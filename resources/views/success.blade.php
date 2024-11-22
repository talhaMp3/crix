<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - VYARA BIG BASH DHAMAKA 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .success-checkmark {
            font-size: 5rem;
            color: #28a745;
        }
        .tournament-logo {
            max-width: 150px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
           
                        <h1 class="card-title mb-4">Payment Successful!</h1>
                        <div class="success-checkmark mb-4">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="lead">Thank you for registering for VYARA BIG BASH DHAMAKA 2024!</p>
                        <p>Your payment has been processed successfully, and your registration is now complete.</p>
                        <div class="alert alert-warning mt-3">
                            <i class="fas fa-phone-alt me-2"></i>
                            <strong>Important:</strong> We will confirm your payment within 24 hours and give you a call to verify your details. Please ensure your contact information is up to date.
                        </div>
                
                
                        <a href="{{route('user.home')}}" class="btn btn-primary mt-4">
                            <i class="fas fa-home me-2"></i>Return to Homepage
                        </a>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p><small>If you have any questions, please contact us at <a href="mailto:support@vyarabigbash.com">support@vyarabigbash.com</a></small></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Set the current date as the transaction date
        document.getElementById('transactionDate').textContent = new Date().toLocaleDateString('en-IN', {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
    </script>
</body>
</html>

