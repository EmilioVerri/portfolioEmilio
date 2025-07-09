<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pagina 404 - Non trovata</title>
  <link rel="shortcut icon" href="..\image\favicon.ico" type="image/x-icon">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #111;
      color: #eee;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
    }

    .container {
      max-width: 600px;
    }

    h1 {
      font-size: 4rem;
      margin-bottom: 10px;
      color: #007bff;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    img {
      width: 100%;
      max-width: 300px;
      margin-bottom: 30px;
    }

    a.button {
      display: inline-block;
      padding: 12px 24px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    a.button:hover {
      background-color: #0056b3;
    }

    @media (max-width: 500px) {
      h1 {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <p>Oops! Pagina non trovata</p>
    <img src="https://i.imgur.com/qIufhof.png" alt="Errore 404" title="Errore 404" />
    <br />
    <a href="/portfolioEmilio/index.php" class="button">Torna alla Home</a>
  </div>
</body>
</html>
