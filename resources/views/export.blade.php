<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- DataTables Buttons Bootstrap 5 CSS -->
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <style>
        .dataTables_wrapper .dt-buttons .btn {
            margin-right: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid py-5">
        <h2 class="text-center mb-4">Employee Table</h2>
        <div class="card shadow">
            <div class="card-body">
                <table id="employeeTable" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Cricket Skill</th>
                            <th>Transaction ID</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regData as $item)
                            <tr data-id="{{ $item->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('player_photos/' . $item->player_photo) }}" alt="Player Photo"
                                        width="100" class="img-thumbnail"></td>
                                <td>{{ $item->player_name }}
                                </td>
                                <td>{{ $item->mobile_number }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->cricket_skill }}</td>
                                <td>{{ $item->tid }}</td>
                             
                                    @if ($item->payment_status == 'pending' || empty($item->payment_status))
                                        <td class="badge bg-warning text-light">Pending</td>
                                    @elseif ($item->payment_status == 'complete')
                                        <td class="badge bg-success text-light">Complete</td>
                                    @endif
                              
                                <td>
                                    <select class="form-select form-select-sm payment_status"
                                        data-id="{{ $item->id }}">
                                        <option value="pending"
                                            {{ $item->payment_status == 'pending' || empty($item->payment_status) ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="complete"
                                            {{ $item->payment_status == 'complete' ? 'selected' : '' }}>Complete
                                        </option>
                                    </select>
                                    <a href="#" class="btn btn-danger btn-sm mt-2 delete-record"
                                        data-id="{{ $item->id }}">Delete</a>
                                        <br>
                                         <small>
                                        {{ $item->created_at->diffForHumans() }}
                                    </small>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables Core JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap 5 JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <!-- JSZip - for Excel button -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- PDFMake - for PDF button -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <!-- Buttons HTML5 JS - for CSV, Excel, PDF buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <!-- Buttons Print JS - for Print button -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Handle payment status change
        $(document).on('change', '.payment_status', function() {
            var paymentStatus = $(this).val();
            var rowId = $(this).data('id');

            // Show SweetAlert confirmation before making the Ajax request
            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to change the payment status!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Make the AJAX request to update the payment status
                    $.ajax({
                        url: '{{ route('registration.updatePaymentStatus') }}', // Your route to update payment status
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: rowId,
                            payment_status: paymentStatus
                        },
                        success: function(response) {
                            if (response.success) {
                                // Success message
                                Swal.fire(
                                    'Updated!',
                                    'Payment status has been updated.',
                                    'success'
                                );
                                // Reload the table or perform necessary action
                                location
                            .reload(); // To reload the page (or you can update just the row dynamically)
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an error updating the payment status.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong, please try again later.',
                                'error'
                            );
                        }
                    });
                } else {
                    // If canceled, revert the selection back to the original value
                    $(this).val($(this).data('previousValue'));
                }
            });
        });

        // Delete record handler
        $(document).on('click', '.delete-record', function(e) {
            e.preventDefault();
            var rowId = $(this).data('id'); // Get the ID of the row to delete

            // Show SweetAlert confirmation before deleting the record
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send the AJAX request to delete the record
                    $.ajax({
                        url: '{{ route('registration.delete') }}', // Your delete route
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: rowId // Send the ID of the record to be deleted
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'The record has been deleted.',
                                    'success'
                                );
                                // Remove the row from the table after deletion
                                $('tr[data-id="' + rowId + '"]').remove();
                            } else {
                                Swal.fire(
                                    'Error!',
                                    response.message,
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong, please try again later.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#employeeTable').DataTable({
                dom: '<"row"<"col-sm-12 col-md-6"B><"col-sm-12 col-md-6"f>>rt<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"p>>',
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-primary btn-sm'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-primary btn-sm'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-primary btn-sm'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-primary btn-sm'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-primary btn-sm'
                    }
                ],
                columnDefs: [{
                        targets: -1, // Target the last column (Action column)
                        orderable: false, // Disable sorting
                        searchable: false // Disable searching
                    },
                    {
                        targets: '_all', // Target all other columns
                        orderable: false // Disable sorting for all columns
                    }
                ],
                initComplete: function() {
                    this.api().columns(':not(:last)').every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select form-select-sm"><option value="">All</option></select>'
                                )
                            .appendTo($(column.header()))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>');
                        });
                    });
                }
            });
        });
    </script>

</body>

</html>
