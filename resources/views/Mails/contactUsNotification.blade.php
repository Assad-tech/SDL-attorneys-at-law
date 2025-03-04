<!DOCTYPE html>
<html>

<head>
    <title>New Contact Us Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #e3e3e3;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
        }

        h4 {
            margin-top: 30px;
            color: #555;
            text-decoration: underline;
        }

        .details p {
            margin: 5px 0;
            line-height: 1.4;
        }

        .details strong {
            color: #007BFF;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #888;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <h2>New Contact Us Message</h2>
        <p>You have received a new message from the Contact Us form. Please review it and respond to the user.</p>

        <h4>Message Details:</h4>
        <div class="details">
            <p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
            <p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
            <p><strong>Interested In:</strong> {{ $data['interested_in'] }}</p>
            <p><strong>How Did You Hear About Us:</strong> {{ $data['how_did_you_hear'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Telephone:</strong> {{ $data['telephone'] }}</p>
            <p><strong>Message:</strong> {{ $data['message'] }}</p>
        </div>

        <div class="footer">
            <p>Thank you for using our service!</p>
            <p>For more details, visit our <a href="{{ url('/') }}">Pro-Max</a>.</p>
        </div>
    </div>
</body>

</html>