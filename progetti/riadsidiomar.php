<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio | Emilio Verri</title>
  <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

    setTimeout(() => {
      img.classList.add('fade-blur');
    }, 1500);

    setTimeout(() => {
      splash.style.display = 'none';
      document.body.style.overflow = 'auto'; 
    }, 2500);
  });


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

    .visit-icon-wrapper {
      margin-top: 30px;
      text-align: center;
    }

    .visit-icon-wrapper a {
      display: inline-block;
      background-color: #fff;
      border-radius: 50%;
      padding: 15px;
      color: #111;
      text-decoration: none;
      transition: transform 0.3s ease;
      font-weight: bold;
    }

    .visit-icon-wrapper a:hover {
      transform: scale(1.1);
    }

    .visit-icon-wrapper i {
      font-size: 24px;
      margin-right: 8px;
    }

    .error-image {
      margin-top: 60px;
      max-width: 100%;
      width: 300px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      opacity: 0.7;
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
    <a href="../index.php">
      <img src="../image/cat-icon.png" alt="Logo" title="Logo" />
    </a>
    <a href="../index.php" class="button">Home</a>
  </div>

  <div class="container">
    <h1>Riad Sidi Omar</h1>
    <img src="../image/riadSidiOmar.png" alt="Immagine Progetto" title="Immagine Progetto" class="project-image" />
    
    <p class="description">
      Il progetto <strong>Riad Sidi Omar</strong> è attualmente in fase di sviluppo.<br><br>
    </p>
<div class="github-icon-wrapper">
  <a href="https://riadsidiomar.altervista.org/" target="_blank" title="Visita il sito" class="visit-button">
    <i class="fas fa-globe"></i> Preview del Sito
  </a>
</div>

    <img src="https://i.imgur.com/qIufhof.png" alt="Riad Sidi Omar" title="Riad Sidi Omar" class="error-image" />

  </div>
</body>
</html>
