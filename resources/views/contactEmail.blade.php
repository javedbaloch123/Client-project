<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .email-wrapper {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #dee2e6;
        }
        .email-header {
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            color: #212529;
        }
        .email-body h2 {
            color: #0d6efd;
            margin-bottom: 10px;
        }
        .email-body p {
            line-height: 1.6;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .info-table th, .info-table td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #dee2e6;
        }
        .email-footer {
            background-color: #f1f3f5;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #6c757d;
        }
        @media (max-width: 600px) {
            .email-body, .email-header, .email-footer {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h1>📩 New Contact Message</h1>
        </div>
        <div class="email-body">
            <h2>Hello Admin,</h2>
            <p>You have received a new message from your website's contact form. Here are the details:</p>
            <table class="info-table">
                {{-- {{ $data }} --}}
                
                <tr>
                    <th>Name</th>
                    <td>{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{{ $data['subject'] }}</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{ $data['messageContent'] }}</td>
                </tr>
            </table>
            <p style="margin-top: 20px;">
                Please respond to this inquiry at your earliest convenience.  
                Thank you for staying connected with your audience!
            </p>
        </div>
        <div class="email-footer">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </div>
    </div>
</body>
</html>
