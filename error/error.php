<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Oops! Errore del server</title>
  <link rel="shortcut icon" href="..\image\favicon.ico" type="image/x-icon">
   <!-- Splash screen con immagine pulsante -->
<div id="splash-screen" style="position: fixed; inset: 0; background-color: #111; display: flex; align-items: center; justify-content: center; z-index: 99999;">
  <img src="..\image\OnloadCAT.png" alt="Intro" title="Intro" id="pulse-img" style="width: 150px; height: auto; animation: pulseAnim 1s infinite;">
</div>

<style>
  @keyframes pulseAnim {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.8; }
    100% { transform: scale(1); opacity: 1; }
  }

  .fade-blur {
    animation: fadeOutBlur 1s forwards;
  }

  @keyframes fadeOutBlur {
    0% {
      opacity: 1;
      filter: blur(0px);
    }
    100% {
      opacity: 0;
      filter: blur(10px);
    }
  }
</style>

<script>
  window.addEventListener('load', function () {
    const splash = document.getElementById('splash-screen');
    const img = document.getElementById('pulse-img');

    // Dopo 1.5 secondi inizia l'effetto sfuma + blur
    setTimeout(() => {
      img.classList.add('fade-blur');
    }, 1500);

    // Dopo 2.5 secondi rimuove lo splash screen
    setTimeout(() => {
      splash.style.display = 'none';
      document.body.style.overflow = 'auto'; // sblocca scroll
    }, 2500);
  });

  // Blocca scroll finché dura splash screen
  document.body.style.overflow = 'hidden';
</script>
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
      font-size: 3.5rem;
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
        font-size: 2.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Oops! Qualcosa è andato storto</h1>
    <p>Si è verificato un errore durante la richiesta.<br>
    Torna alla home o riprova più tardi.</p>
    <img src="https://i.imgur.com/O0DCcQy.png" alt="Errore generico" title="Errore generico" />
    <br />
    <a href="/portfolioEmilio/index.php" class="button">Torna alla Home</a>
  </div>
</body>
</html>
