<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css');
    </style>
</head>
<body class="bg-black-100">

  <!-- Logo Image -->
  <img src="https://fpyvetl.stripocdn.email/content/guids/CABINET_9e07405ee8a4d5c60f782581acf595720b8aa9275ce916d442012a564d1e460d/images/opus.png" 
       alt="Opus" 
       class="adapt-img" 
       style="max-width: 111px; height: 111px; display: block; margin: 20px auto;">

  <!-- Newsletter Content -->
  <div class="max-w-xl mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="bg-blue-600 text-white text-center py-6">
      <h1 class="text-3xl font-bold">Welcome to Our Newsletter!</h1>
      <p class="mt-2 text-lg">We're thrilled to have you on board.</p>
    </div>
    <div class="p-6">
      <p class="text-gray-700 text-lg">
        Hi there,
      </p>
      <p class="text-gray-600 mt-4 leading-relaxed">
        Thank you for joining our newsletter. You're now part of a community that stays updated with the latest news, exclusive insights, and exciting offers tailored just for you.
      </p>
      <p class="text-gray-600 mt-4 leading-relaxed">
        As a new subscriber, you'll be the first to know about our announcements and special events. Stay tuned!
      </p>
      <p class="text-gray-500 text-sm mt-6 leading-relaxed">
        If you have any questions, feel free to reply to this email or visit our website for more information.
      </p>
    </div>
    <div style="text-align: center; padding: 20px;">
      <a href="{{ $url }}" 
         target="_blank" 
         class="es-button">View More on Our Webpage</a>
    </div>
    <div class="bg-gray-200 text-center py-4">
      <p class="text-sm text-gray-500">
        © {{ now()->year }} OpusEvents. All rights reserved.
      </p>
    </div>
  </div>

</body>
</html>
