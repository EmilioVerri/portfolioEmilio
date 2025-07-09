<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio | Emilio Verri</title>
  <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

  <!-- FontAwesome per icona GitHub -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #111;
      color: #eee;
      min-height: 100vh;
      padding-top: 70px;
    }

    .top-bar {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #111;
      z-index: 1000;
      border-bottom: 1px solid #222;
    }

    .top-bar img {
      height: 50px;
      width: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    .top-bar a.button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .top-bar a.button:hover {
      background-color: #0056b3;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      padding: 20px;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #007bff;
    }

    .project-image {
      width: 100%;
      max-width: 300px;
      height: auto;
      margin: 0 auto 30px auto;
      display: block;
      border-radius: 10px;
    }

    .description {
      font-size: 1.1rem;
      color: #ccc;
      line-height: 1.6;
    }

    /* Stile icona GitHub */
    .github-icon-wrapper {
      margin-top: 30px;
      text-align: center;
    }

    .github-icon-wrapper a {
      display: inline-block;
      background-color: #fff;
      border-radius: 50%;
      padding: 15px;
      color: #111;
      text-decoration: none;
      transition: transform 0.3s ease;
    }

    .github-icon-wrapper a:hover {
      transform: scale(1.1);
    }

    .github-icon-wrapper i {
      font-size: 32px;
    }

    @media (max-width: 500px) {
      h1 {
        font-size: 2rem;
      }

      .top-bar {
        padding: 10px 20px;
      }

      .top-bar a.button {
        padding: 8px 16px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <a href="/portfolioEmilio/index.php">
      <img src="../image/cat-icon.png" alt="Logo" title="Logo" />
    </a>
    <a href="/portfolioEmilio/index.php" class="button">Home</a>
  </div>

  <div class="container">
    <h1>Registra Manutenzioni</h1>
    <img src="../image/RegistraManutenzioni.png" alt="Immagine Progetto" title="Immagine Progetto" class="project-image" />
<p class="description" style="margin-top: 40px; color: #ccc;">
  Questo software è stato sviluppato per semplificare la gestione delle manutenzioni periodiche. È possibile scaricarlo e utilizzarlo gratuitamente.<br><br>
  Una volta effettuato il download, basta avviare il file <code>www\manutenzione.exe</code> per iniziare ad aggiungere interventi di manutenzione e consultare lo storico delle operazioni effettuate.<br><br>
  Il programma include anche un sistema di notifica automatica che ti avverte quando una manutenzione è scaduta, aiutandoti a tenere tutto sotto controllo in modo semplice ed efficiente.<br><br>
  Attualmente l’interfaccia grafica è piuttosto essenziale e funzionale, ma sono previsti miglioramenti per renderla più moderna e intuitiva.
</p>





    <!-- Icona GitHub centrata con sfondo bianco -->
    <div class="github-icon-wrapper">
      <a href="https://github.com/EmilioVerri/Software-Manutenzione.git" target="_blank" title="Vai alla repository GitHub">
        <i class="fab fa-github"></i>
      </a>
    </div>

  </div>
</body>
</html>
