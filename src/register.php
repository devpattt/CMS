<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to external CSS file -->
</head>
<body>
    <div class="form-container">
        <!-- Logo -->
        <img src="logo.png" alt="Logo" class="logo"> <!-- Make sure to replace 'logo.png' with your actual logo file path -->

        <!-- Header text -->
        <h2>Register for an Account</h2>
        <p>Please fill in this form to create an account.</p>

        <!-- Registration form -->
        <form id="registrationForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="submit-button">Register</button>
        </form>

        <!-- Success message (hidden by default) -->
        <p id="successMessage" class="success-message" style="display: none;">Registration successful!</p>
    </div>

    <script src="js/script.js"></script> <!-- Link to external JavaScript file -->
</body>
</html>
