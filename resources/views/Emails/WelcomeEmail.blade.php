<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">
  <title>Newsletter</title>
  <style type="text/css">
    body,
    table {
      width: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      line-height: 1.5;
    }

    body {
      background-color: #F6F6F6;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: left;
      padding: 20px;
    }

    .email-container {
      max-width: 600px;
      width: 100%;
      background-color: #FFFFFF;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      text-align: left;
    }

    h1 {
      font-size: 30px;
      color: #333;
      margin: 0;
      padding: 20px 0;
    }

    p {
      font-size: 14px;
      color: #333;
      line-height: 1.5;
      margin: 0 0 20px 0;
    }

    a {
      text-decoration: none;
      color: #FFFFFF;
    }

    .es-button {
      display: inline-block;
      background-color: #2563EB;
      color: #FFFFFF !important;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 18px;
      text-align: center;
      width: auto;
      border: 2px solid #2563EB;
    }

    .adapt-img {
      width: 100%;
      height: auto;
    }

    @media only screen and (max-width: 600px) {
      h1 {
        font-size: 24px;
      }

      p,
      a {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  <div class="email-container">

    <table style="max-height: 300px; width: 100%; background-color: #262626; padding: 20px; text-align: left;">
      <tr>
        <td>
          <img
            src="https://fpyvetl.stripocdn.email/content/guids/CABINET_9e07405ee8a4d5c60f782581acf595720b8aa9275ce916d442012a564d1e460d/images/opus.png"
            alt="Opus" class="adapt-img" style="width: 100%; height: 300px; object-fit: cover;">
        </td>
      </tr>
    </table>


    <table style="width: 100%; background-color: #ffffff; padding: 20px; text-align: left;">
      <tr>
        <td>
          <h1>Welcome to Our Newsletter!</h1>
        </td>
      </tr>
      <tr>
        <td>
          <p>Hi there,</p>
          <p>Thank you for joining our newsletter. You're now part of a community that stays updated with the latest
            news, exclusive insights, and exciting offers tailored just for you.</p>
          <p>As a new subscriber, you'll be the first to know about our announcements and special events. Stay tuned!
          </p>
          <p>If you have any questions, feel free to reply to this email or visit our website for more information.</p>
        </td>
      </tr>
      <tr>
        <td style="text-align: center;">
          <a href="{{ $url }}" target="_blank" class="es-button">View More on Our Webpage</a>
        </td>
      </tr>
    </table>


    <table style="width: 100%; background-color: #F6F6F6; text-align: left; padding: 10px;">
      <tr>
        <td>
          <p style="font-size: 12px; color: #a0aec0; text-align: center;">© {{ now()->year }} OpusEvents. All rights
            reserved.</p>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>