<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VYARA BIG BASH DHAMAKA 2024 Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #003B70;
            --secondary-color: #E5B700;
            --accent-color: #FF4B4B;
            --text-color: #2C3E50;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: #F5F7FA;
            color: var(--text-color);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
        }

        .main-header {
            background: var(--primary-color);
            padding: 2rem 0;
            margin-bottom: 2rem;
            box-shadow: var(--box-shadow);
        }

        .main-header h1 {
            color: white;
            font-weight: 700;
            margin: 0;
            font-size: 2.5rem;
            text-align: center;
        }

        .registration-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .section-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary-color);
        }

        .qr-section {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
            text-align: center;
        }

        .qr-section h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: 500;
            color: var(--text-color);
        }

        .form-control,
        .form-select {
            border: 2px solid #E2E8F0;
            border-radius: var(--border-radius);
            padding: 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.25rem rgba(229, 183, 0, 0.25);
        }

        /* .skill-card {
            background: white;
            border: 2px solid #E2E8F0;
            border-radius: var(--border-radius);
            padding: 1rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .skill-card:hover {
            border-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .skill-card.selected {
            border-color: var(--secondary-color);
            background: rgba(229, 183, 0, 0.1);
        }

        .skill-card i {
            color: var(--primary-color);
            margin-right: 0.5rem;
        } */

        .progress {
            height: 0.8rem;
            background-color: #E2E8F0;
            border-radius: 1rem;
            margin: 2rem 0;
        }

        .progress-bar {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 1rem;
            transition: width 0.5s ease;
        }

        .btn-register {
            background: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-register:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .sponsors-section {
            background: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            text-align: center;
            box-shadow: var(--box-shadow);
        }

        .sponsors-section h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-banner {
            background: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1rem;
            border-radius: var(--border-radius);
            margin-top: 2rem;
        }

        .input-group-text {
            background: var(--primary-color);
            color: white;
            border: none;
        }

        .form-file-button {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            cursor: pointer;
        }

        .alert-info {
            background: rgba(0, 59, 112, 0.1);
            border: none;
            border-left: 4px solid var(--primary-color);
            border-radius: 0;
            padding: 1rem;
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .main-header h1 {
                font-size: 2rem;
            }

            .registration-card {
                padding: 1rem;
            }
        }

        .skill-card {
            position: relative;
            padding-right: 30px;
            /* Make room for the indicator */
        }

        .selected-indicator {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            display: none;
        }

        .skill-card.selected {
            border-color: var(--secondary-color);
            background-color: rgba(229, 183, 0, 0.1);
        }

        .skill-card.selected .selected-indicator {
            display: block;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <div class="container">
            <h1>
                <i class="fas fa-trophy"></i>
                VYARA BIG BASH DHAMAKA 2024
            </h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="registration-card">
                    <h4 class="section-title">Player Registration</h4>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i>
                        Please fill all required fields marked with an asterisk (*).
                    </div>

                    @dump(Session()->all())
                    <form id="registrationForm" method="POST" accept="{{ route('registration.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="player_name" class="form-label">Player Name *</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control" id="player_name" name="player_name">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mobile_number" class="form-label">Mobile Number *</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control" id="mobile_number" name="mobile_number">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address *</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="player_photo" class="form-label">Player Photo *</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                    <input type="file" class="form-control" id="player_photo" name="player_photo"
                                        accept=".jpg,.jpeg,.png">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tshirt_size" class="form-label">T-Shirt Size *</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-tshirt"></i>
                                    </span>
                                    <select class="form-select" id="tshirt_size" name="tshirt_size">
                                        <option value="">Select Size</option>
                                        <option value="S">Small</option>
                                        <option value="M">Medium</option>
                                        <option value="L">Large</option>
                                        <option value="XL">Extra Large</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div id="otherSizeInput" class="mt-2" style="display: none;">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                        <input type="text" class="form-control" id="custom_tshirt_size"
                                            name="custom_tshirt_size" placeholder="Please specify size"
                                            aria-label="Custom size">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="section-title">Cricket Skills *</h5>
                        <div class="mb-4">
                            <label for="cricket_skill" class="form-label">Cricket Skills *</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-star"></i>
                                </span>
                                <select class="form-select" id="cricket_skill" name="cricket_skill" required>
                                    <option value="">Select Skill</option>
                                    <option value="Left Hand Batsman">Left Hand Batsman</option>
                                    <option value="Right Hand Batsman">Right Hand Batsman</option>
                                    <option value="Right Hand Bowler">Right Hand Bowler</option>
                                    <option value="Left Hand Bowler">Left Hand Bowler</option>
                                    <option value="Right Hand All Rounder">Right Hand All Rounder</option>
                                    <option value="Left Hand All Rounder">Left Hand All Rounder</option>
                                    <option value="Wicket Keeper">Wicket Keeper</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-4">
                            <label for="tid" class="form-label">Transaction I'd *</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-receipt"></i>
                                </span>
                                <input type="text" class="form-control" id="tid" name="tid">
                            </div>
                        </div>

                        <button type="submit" class="btn-register w-100">
                            <i class="fas fa-paper-plane me-2"></i>
                            Complete Registration
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="qr-section mb-4">
                    <h5>
                        <i class="fas fa-qrcode me-2"></i>
                        Scan to Pay
                    </h5>
                    <img src="https://via.placeholder.com/200" alt="Payment QR Code" class="img-fluid mb-3">
                    <div class="alert alert-info mb-0">
                        <small>
                            <i class="fas fa-info-circle me-1"></i>
                            Please save the payment screenshot
                        </small>
                    </div>
                </div>

                <div class="sponsors-section">
                    <h5>Official Sponsors</h5>
                    <img src="blob:https://web.whatsapp.com/60912739-e826-4d17-b26d-9f5002009599" alt="Sponsors" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="footer-banner">
            <i class="fas fa-calendar-alt me-2"></i>
            Tournament Dates: 27th Nov to 1st Dec, 2024
        </div>
    </div>

    <script>
        document.getElementById('tshirtSize').addEventListener('change', function() {
            const otherSizeInput = document.getElementById('otherSizeInput');
            const customSizeField = document.getElementById('customSize');

            if (this.value === 'other') {
                otherSizeInput.style.display = 'block';
                customSizeField.required = true;
            } else {
                otherSizeInput.style.display = 'none';
                customSizeField.required = false;
                customSizeField.value = ''; // Clear the custom size when switching back
            }

            // Trigger form progress update
            document.getElementById('registrationForm').dispatchEvent(new Event('change'));
        });
    </script>

</body>

</html>
