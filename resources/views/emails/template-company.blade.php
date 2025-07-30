<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Contact Form Submission</title>
  <style>
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #f9fafb;
      margin: 0;
      padding: 0;
    }
    .email-container {
      max-width: 650px;
      margin: 30px auto;
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }
    .email-header {
      background: linear-gradient(135deg, #4f46e5 0%, #3730a3 100%);
      padding: 30px;
      text-align: center;
      color: white;
    }
    .email-header h1 {
      font-size: 24px;
      font-weight: 700;
      margin: 0;
    }
    .email-header p {
      font-size: 16px;
      opacity: 0.9;
      margin-top: 8px;
    }
    .email-body {
      padding: 30px;
      color: #111827;
      line-height: 1.6;
    }
    .email-body h2 {
      font-size: 18px;
      font-weight: 600;
      color: #1f2937;
      margin-bottom: 16px;
    }
    .detail-item {
      display: flex;
      margin-bottom: 14px;
      font-size: 15px;
    }
    .detail-label {
      font-weight: 600;
      color: #4b5563;
      min-width: 100px;
    }
    .detail-value {
      color: #111827;
      flex: 1;
    }
    .message-box {
      background: #f3f4f6;
      border-left: 4px solid #4f46e5;
      padding: 16px;
      border-radius: 6px;
      margin-top: 16px;
      white-space: pre-wrap;
      font-style: normal;
      font-family: inherit;
    }
    .footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #6b7280;
      background: #f9fafb;
      border-top: 1px solid #e5e7eb;
    }
    .logo {
      display: block;
      margin: 0 auto 16px;
      height: 50px;
    }
  </style>
</head>
<body>
  <div class="email-container">
    <!-- Header -->
    <div class="email-header">
      <h1>New Message from Website Company Profile PT. Adhi Cahaya Global</h1>
      <p>Contact Form - {{ now()->format('d M Y, H:i') }}</p>
    </div>

    <!-- Body -->
    <div class="email-body">
      <h2>Sender Details</h2>
      <div class="detail-item">
        <div class="detail-label">Name</div>
        <div class="detail-value">{{ $name }}</div>
      </div>
      <div class="detail-item">
        <div class="detail-label">Email</div>
        <div class="detail-value">
          <a href="mailto:{{ $email }}" style="color: #4f46e5; text-decoration: none;">{{ $email }}</a>
        </div>
      </div>
      <div class="detail-item">
        <div class="detail-label">Phone</div>
        <div class="detail-value">{{ $phone ?? 'Not provided' }}</div>
      </div>

      <h2>Message</h2>
      <div class="message-box">
        {{ $messageEmail }}
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>This message was sent automatically from the contact form on <a href="{{ env('APP_URL') }}">website</a><strong> PT. Adhi Cahaya Global</strong></p>
      <p style="margin-top: 8px;">© {{ date('Y') }} PT. Adhi Cahaya Global. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
