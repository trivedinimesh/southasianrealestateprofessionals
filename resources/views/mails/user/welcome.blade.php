
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2e6da4;
        }
        p {
            font-size: 16px;
        }
        .button {
            background-color: #2e6da4;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, {{ $first_name }} {{ $last_name }}!</h1>
        <p>We are excited to have you join our platform. Your account has been successfully created with the email <strong>{{ $email }}</strong>.</p>

        <p>Please take a moment to explore our services and update your profile to get started.</p>

        <p>If you have any questions, feel free to reach out to our support team.</p>

        <p>Thank you for registering with us!</p>

        <p>Best regards, <br>SAREP Team</p>

      
    </div>
</body>
</html>
