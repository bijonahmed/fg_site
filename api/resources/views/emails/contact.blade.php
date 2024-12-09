<!-- resources/views/emails/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - New Message</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .email-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .email-body {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .email-body p {
            margin: 12px 0;
            font-size: 16px;
            line-height: 1.6;
        }
        .email-body p strong {
            color: #333;
        }
        .email-footer {
            background-color: #f4f4f4;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
        .email-footer p {
            margin: 0;
        }
        .email-footer a {
            color: #007bff;
            text-decoration: none;
        }
        .email-body p a {
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="email-header">
        <h2>FG Customer Message</h2>
    </div>

    <div class="email-body">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{!! $data['message'] !!}</p> <!-- Decode raw HTML content -->
    </div>

    <div class="email-footer">
        <p>&copy; {{ date('Y') }} FutureGenIT. All rights reserved.</p>
        <p>For support, visit our <a href="https://futuregenit.com" target="_blank">Support Page</a></p>
    </div>
</div>

</body>
</html>
