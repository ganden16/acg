<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form Submission</title>
  <style>
    /* Reset styles */
    body {
      font-family: 'Inter', Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #ffffff;
      padding: 20px;
      text-align: center;
    }

    .content {
      background-color: #ffffff;
      padding: 20px;
    }

    .footer {
      background-color: #ffffff;
      padding: 20px;
      text-align: center;
      color: #777;
      font-size: 14px;
    }

    /* Responsive design */
    @media (max-width: 600px) {
      .container {
        padding: 10px;
      }
      .header h1 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Header -->
    <div class="header bg-white shadow-md rounded-t-lg">
      {{-- <img src="{{ asset('assets1/images/logo-acg.png') }}" alt="PT. Adhi Cahaya Global Logo" class="w-32 mx-auto my-4"> --}}
      <h1 class="text-2xl font-bold text-gray-800">Thank You for Contacting Us!</h1>
      <p class="text-base text-gray-600">We have received your message and will get back to you soon.</p>
    </div>

    <!-- Content -->
    <div class="content bg-white shadow-md rounded-b-lg">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Your Details</h2>
      <ul class="list-none p-0 m-0">
        <li class="flex justify-between items-center mb-2">
          <span class="font-medium text-gray-700">Name:</span>
          <span class="text-gray-600">{{ $name }}</span>
        </li>
        <li class="flex justify-between items-center mb-2">
          <span class="font-medium text-gray-700">Email:</span>
          <span class="text-gray-600">{{ $email }}</span>
        </li>
        <li class="flex justify-between items-center mb-2">
          <span class="font-medium text-gray-700">Phone:</span>
          <span class="text-gray-600">{{ $phone ?? 'Not Provided' }}</span>
        </li>
      </ul>

      <h2 class="text-xl font-semibold text-gray-800 mt-4 mb-2">Message</h2>
      <p class="text-base text-gray-600">{{ $messageEmail }}</p>
    </div>

    <!-- Footer -->
    <div class="footer bg-white shadow-inner">
      <p class="text-sm text-gray-500">
        © {{ date('Y') }} PT. Adhi Cahaya Global. All rights reserved.
      </p>
    </div>
  </div>
</body>
</html>
