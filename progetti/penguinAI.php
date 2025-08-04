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
      margin-left: 10px;
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

    /* Stile icona GitHub e sito */
    .icon-wrapper {
      margin-top: 30px;
      text-align: center;
    }

    .icon-wrapper a {
      display: inline-block;
      background-color: #fff;
      border-radius: 50%;
      padding: 15px;
      color: #111;
      text-decoration: none;
      transition: transform 0.3s ease;
      margin: 0 10px;
    }

    .icon-wrapper a:hover {
      transform: scale(1.1);
    }

    .icon-wrapper i {
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
        margin-left: 5px;
      }
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <a href="../index.php">
      <img src="../image/cat-icon.png" alt="Logo" title="Logo" />
    </a>
    <div>
      <a href="../index.php" class="button">Home</a>
    </div>
  </div>

  <div class="container">
    <h1>PenguinAI</h1>
    <img src="../image/penguinAI.png" alt="Immagine Progetto" title="Immagine Progetto" class="project-image" />
    <p class="description" style="margin-top: 40px; color: #ccc;">
    <strong>PenguinAI</strong> è un chatbot intelligente che genera risposte e immagini sfruttando modelli AI avanzati ospitati su server esterni.<br>
Testo tramite <em>Gemma (Google)</em>, immagini tramite <em>Pollinations</em>. Tutto accessibile dal tuo browser, senza installazioni.

<strong>PenguinAI</strong> è un progetto open source nato con l'obiettivo di offrire un assistente virtuale AI completamente controllabile e personalizzabile dall'utente.<br><br>

Nella sua prima versione, il sistema era eseguito interamente su un PC locale, sfruttando <strong>XAMPP</strong> per l’hosting dell’interfaccia web PHP e <strong>Ollama</strong> (con il modello <em>Gemma 3</em>) per l’elaborazione dei testi in locale. Per la generazione di immagini creative, venivano (e vengono tuttora) utilizzate le <strong>API di Pollinations</strong>, che permettono la creazione di contenuti visivi tramite prompt testuali.<br><br>

Per rendere PenguinAI accessibile anche da remoto, venne inizialmente configurato un <strong>port forwarding</strong> sul router domestico, abbinato a un sistema di <strong>reverse proxy</strong> locale per migliorare la sicurezza e gestire correttamente il traffico HTTP/HTTPS.<br><br>

Tuttavia, nonostante le precauzioni, l’esposizione della rete casalinga a Internet attraverso il port forwarding è risultata una soluzione troppo rischiosa nel lungo periodo. Dopo alcuni giorni di test e uso reale, si è deciso di <strong>rimuovere il port forwarding</strong> per evitare potenziali vulnerabilità, e migrare verso un’architettura che sfrutta **servizi esterni per l'elaborazione AI**.<br><br>

Attualmente, PenguinAI utilizza:

<ul>
  <li><strong>google/gemma-3n-e4b-it:free</strong> (tramite API) per la generazione dei testi;</li>
  <li><strong>Pollinations API</strong> per la generazione delle immagini;</li>
</ul>

Il codice sorgente del progetto è completamente <strong>open source</strong> e disponibile su GitHub. All’interno dello storico del repository è possibile trovare anche i vecchi script e le configurazioni utilizzate durante la fase locale, comprese le istruzioni per l’utilizzo di Ollama in locale e le configurazioni del reverse proxy (NGINX).<br><br>
    </p>

    <div class="icon-wrapper">
      <a href="https://github.com/EmilioVerri/PenguinAIExtract" target="_blank" title="Vai alla repository GitHub">
        <i class="fab fa-github"></i>
      </a>
      <a href="https://penguinai.infinityfree.me/" target="_blank" title="Vai al sito PenguinAI">
        <i class="fas fa-globe"></i>
      </a>
    </div>

  </div>
</body>
</html>
