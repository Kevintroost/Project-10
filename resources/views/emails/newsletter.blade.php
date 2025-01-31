<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Newsletter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f6f6f6;
    }

    table {
      width: 100%;
      border-spacing: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header {
      background-color: #262626;
      text-align: center;
      padding: 20px;
    }

    .header img {
      max-width: 100px;
      height: auto;
    }

    .body {
      padding: 20px;
      text-align: left;
    }

    .body img {
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 30px;
      color: #333;
      margin-bottom: 10px;
    }

    p {
      font-size: 14px;
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .button-container {
      text-align: center;
      margin: 20px 0;
    }

    .button {
      display: inline-block;
      background-color: #2563EB;
      color: #ffffff !important;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 20px;
      }

      p {
        font-size: 13px;
      }
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <td>
        <div class="container">
          <!-- Header -->
          <div class="header">
            <img
              src="https://fpyvetl.stripocdn.email/content/guids/CABINET_9e07405ee8a4d5c60f782581acf595720b8aa9275ce916d442012a564d1e460d/images/opus.png"
              alt="Logo">
          </div>
          <!-- Body -->
          <div class="body">
            <!-- Dynamic Image -->
            <img src="{{ $image }}" alt="{{ $title }}">
            <!-- Dynamic Title -->
            <h1>{{ $title }}</h1>
            <!-- Dynamic Description -->
            <p>{{ $description }}</p>
            <div class="button-container">
              <a href="{{ $url }}" target="_blank" class="button">View More on Our
                Webpage</a>
            </div>
            <table style="width: 100%; background-color: #F6F6F6; text-align: left; padding: 10px;">
              <tr>
                <td>
                  <p style="font-size: 12px; color: #a0aec0; text-align: center;">© {{ now()->year }} OpusEvents. All
                    rights reserved.</p>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </td>
    </tr>
  </table>
</body>

</html>