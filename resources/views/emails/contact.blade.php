<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4338ca;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9fafb;
            padding: 20px;
            border: 1px solid #e5e7eb;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #4338ca;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0; font-size: 24px;">New Contact Form Submission</h1>
    </div>

    <div class="content">
        <div class="field">
            <span class="label">Name:</span>
            <div>{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <span class="label">Email:</span>
            <div>{{ $data['email'] }}</div>
        </div>

        <div class="field">
            <span class="label">Message:</span>
            <div>{{ $data['message'] }}</div>
        </div>
    </div>

    <div class="footer">
        <p>This message was sent from the contact form on your Teacher Portfolio website.</p>
        <p>Received at: {{ now() }}</p>
    </div>
</body>
</html>
