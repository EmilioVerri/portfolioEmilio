<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
  var _iub = _iub || [];
  _iub.csConfiguration = {
    "siteId": 4151296,
    "cookiePolicyId": 59616074,
    "lang": "it"
  };
</script>
<script type="text/javascript" src="https://cs.iubenda.com/autoblocking/4151296.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

    <script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"siteId":4151296,"cookiePolicyId":59616074,"lang":"it","storage":{"useSiteId":true}};
</script>
<script type="text/javascript" src="https://cs.iubenda.com/autoblocking/4151296.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Minimalistic and elegant portfolio in black and white">
    <title>Portfolio | Emilio Verri</title>
    <link rel="shortcut icon" href=".\image\favicon.ico" type="image/x-icon">

<div id="splash-screen" style="position: fixed; inset: 0; background-color: #111; display: flex; align-items: center; justify-content: center; z-index: 99999;">
  <img src="./image/OnloadCAT.png" alt="Intro" title="Intro" id="pulse-img" style="width: 150px; height: auto; animation: pulseAnim 1s infinite;">
</div>

<div id="pc-container" style="display: none; z-index: 9999; position: relative;">
  <div class="falling-pc">
    <div class="screen"></div>
    <div class="base"></div>
  </div>
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
    0% { opacity: 1; filter: blur(0px); }
    100% { opacity: 0; filter: blur(10px); }
  }

  .falling-pc {
    width: 160px;
    height: 100px;
    position: absolute;
    top: -150px;
    left: 50%;
    transform: translateX(-50%);
    animation: dropPc 2s ease-out forwards;
  }

  .falling-pc .screen {
    width: 140px;
    height: 60px;
    background-color: #000000;
    border: 2px solid #ffffff;
    margin: 0 auto;
  }

  .falling-pc .base {
    width: 70px;
    height: 20px;
    background-color: #ffffff;
    border: 2px solid #000000;
    margin: 5px auto 0;
    border-radius: 0 0 6px 6px;
  }

  @keyframes dropPc {
    0% { top: -150px; }
    100% { top: 100px; }
  }
</style>

<script>
  window.addEventListener('load', function () {
    const splash = document.getElementById('splash-screen');
    const img = document.getElementById('pulse-img');
    const pcContainer = document.getElementById('pc-container');


    setTimeout(() => {
      img.classList.add('fade-blur');
    }, 1500);


    setTimeout(() => {
      splash.style.display = 'none';
      document.body.style.overflow = 'auto';
      pcContainer.style.display = 'block';
    }, 2500);
  });


  document.body.style.overflow = 'hidden';
</script>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js"></script>

    <style>
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #000000;
            color: green;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        .hero h1 {
            font-size: 4rem;
            margin: 0;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeIn 1s ease-out forwards;
        }

        .hero p {
            font-size: 1.5rem;
            margin-top: 10px;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeIn 1s ease-out forwards 0.5s;
        }

        .hero button {
            margin-top: 20px;
            padding: 10px 20px;
            border: 2px solid #ffffff;
            background: transparent;
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeIn 1s ease-out forwards 1s;
        }

        .hero button:hover {
            background: #ffffff;
            color: #000000;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

/*
       .falling-pc {
    width: 160px;
    height: 100px;
    position: absolute;
    top: -150px;
    left: 50%;
    transform: translateX(-50%);
    animation: dropPc 2s ease-out forwards;
}

.falling-pc .screen {
    width: 140px;
    height: 60px;
    background-color: #000000;
    border: 2px solid #ffffff;
    
    margin: 0 auto;
}

.falling-pc .base {
    width: 70px;       
    height: 20px;
    background-color: #ffffff;
    border: 2px solid #000000;
    margin: 5px auto 0;
    border-radius: 0 0 6px 6px;
}




@keyframes dropPc {
    0% {
        top: -150px; 
    }
    100% {
        top: 100px; 
    }
}*/


        .bouncing-balls {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .ball {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #ffffff;
            border-radius: 50%;
        }


        .menu-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .menu-icon:hover {
            background: #cccccc;
        }
.menu {
    position: absolute;
    top: 20px;
    left: -250px;
    width: 200px;
    background: #ffffff;
    border: 1px solid #000000;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    z-index: 99999; /* valore molto alto per coprire tutto */
}


        .menu.visible {
            transform: translateX(250px);
        }

        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu ul li {
            margin: 10px 0;
        }

        .menu ul li a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
        }

        .scroll-animate {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .scroll-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .projects,
        .about,
        .contact {
            padding: 50px 20px;
            text-align: center;
        }

        .projects h2,
        .about h2,
        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .project-card {
            padding: 20px;
            border: 2px solid #000000;
            background: #ffffff;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .project-card img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .project-card a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            font-size: 1.2rem;
            display: block;
            margin-top: 10px;
        }

        footer {
            background: #000000;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }

        .hero button {
            pointer-events: auto;
        
            z-index: 10;
           
        }

        .bouncing-balls {
            pointer-events: none;
        }

        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        .logo {
    width: 50px; 
    height: 50px; 
    border-radius: 50%; 
    object-fit: cover; 
    border: 2px solid #000000; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
}

    </style>




</head>

<body>

    <div class="hero">



   
        <div class="menu-icon" id="menuIcon">☰</div>

        <div class="logo-container">
            <a href=".\"><img src=".\image\cat-icon.png" alt="Logo" class="logo"></a>
        </div>

   
        <div class="menu" id="menu">
            <ul>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#studio">Percorsi</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#why">Perché?</a></li>
                <li><a href="#contact">Contattami</a></li>
            </ul>
        </div>

        <div class="bouncing-balls" id="bouncingBalls"></div>
      <!--  <div class="falling-pc">
            <div class="screen"></div>
            <div class="base"></div>
        </div>-->
        <h1 style="color: #007bff; font-family: 'Courier New', Courier, monospace;text-transform: uppercase;">V3RR1L0G1C</h1>

<p style="color: #007bff;">🤖Codice e Divertimento🤖</p>
        <a href="#projects" class="explore-button">
            <a href="#projects" style="text-decoration: none;">
                <button style="cursor: pointer;">I Miei Lavori</button>
            </a>
        </a>

    </div>

    <script>
        
        const menuIcon = document.getElementById('menuIcon');
        const menu = document.getElementById('menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('visible');
        });
    </script>


<section class="projects scroll-animate" id="projects">
  <h2>Esplora i miei Progetti</h2>

  <div class="project-carousel-wrapper" style="position: relative;">
    <button id="scrollLeft" style="position: absolute; top: 40%; left: 0; z-index: 1; border: none; background: none; font-size: 2rem; color: #007bff; cursor: pointer;">&#10094;</button>
    <button id="scrollRight" style="position: absolute; top: 40%; right: 0; z-index: 1; border: none; background: none; font-size: 2rem; color: #007bff; cursor: pointer;">&#10095;</button>

    <div class="project-scroll-container" style="display: flex; overflow-x: auto; scroll-behavior: smooth; gap: 1rem; padding: 1rem 2rem;">
      
     
      <a href=".\progetti\snapsclean.php" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="./image/SnapsClean.png" alt="snapsclean" title="snapsclean" style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>SnapsClean</p>
      </a>

      <a href=".\progetti\ecosentinel.php" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="./image/EcoSentinel.png" alt="EcoSentinel" title="EcoSentinel" style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>EcoSentinel</p>
      </a>

      <a href=".\progetti\smkrealestate.php" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="./image/smkRealEstate.png" alt="SmkRealEstate Valtellina" title="SmkRealEstate Valtellina" style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>SmkRealEstate Valtellina</p>
      </a>

      <a href=".\progetti\RegistraManutenzioni.php" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="./image/RegistraManutenzioni.png" alt="RegistraManutenzioni" title="RegistraManutenzioni"style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>Registra Manutenzioni</p>
      </a>


      <a href=".\progetti\riadsidiomar.php" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="./image/riadSidiOmar.png" alt="riadSidiOmar" title="riadSidiOmar" style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>Riad Sidi Omar</p>
      </a>

            <a href=".\progetti\GestioneDipendenti.php" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="./image/GestioneDipendenti.png" alt="GestioneDipendenti" title="GestioneDipendenti" style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>Gestione Dipendenti</p>
      </a>

      <!--<a href="QR Code Manager" class="project-card" style="min-width: 220px; flex: 0 0 auto; text-align: center; text-decoration: none; color: inherit;">
        <img src="https://via.placeholder.com/300x200" alt="Project 7 Image" style="width: 180px; height: 150px; object-fit: cover; border-radius: 8px;">
        <p>Project 7</p>
      </a>-->

    </div>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector('.project-scroll-container');
    const scrollLeft = document.getElementById('scrollLeft');
    const scrollRight = document.getElementById('scrollRight');

    scrollLeft.addEventListener('click', () => {
      container.scrollBy({ left: -300, behavior: 'smooth' });
    });

    scrollRight.addEventListener('click', () => {
      container.scrollBy({ left: 300, behavior: 'smooth' });
    });


    let isDown = false;
    let startX;
    let scrollLeftStart;

    container.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - container.offsetLeft;
      scrollLeftStart = container.scrollLeft;
      container.style.cursor = 'grabbing';
    });

    container.addEventListener('mouseleave', () => {
      isDown = false;
      container.style.cursor = 'default';
    });

    container.addEventListener('mouseup', () => {
      isDown = false;
      container.style.cursor = 'default';
    });

    container.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - container.offsetLeft;
      const walk = (x - startX) * 1.5;
      container.scrollLeft = scrollLeftStart - walk;
    });


    container.addEventListener('touchstart', (e) => {
      startX = e.touches[0].pageX;
      scrollLeftStart = container.scrollLeft;
    });

    container.addEventListener('touchmove', (e) => {
      const x = e.touches[0].pageX;
      const walk = (startX - x) * 1.5;
      container.scrollLeft = scrollLeftStart + walk;
    });
  });
</script>



<section class="education" id="education" style="background-color: #111; color: #eee; padding: 50px 20px; font-family: Arial, sans-serif;">
  <div style="max-width: 800px; margin: 0 auto;">
    <h2 style="text-align: center; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-bottom: 30px; color: #007bff;" id="studio">
      I miei percorsi di studio
    </h2>
    <ul style="list-style: none; padding-left: 0; position: relative; margin-top: 2rem; border-left: 3px solid #007bff;">
      <li style="position: relative; margin-bottom: 2rem; padding-left: 40px;">
        <div style="position: absolute; left: -18px; top: 0; background-color: #007bff; border-radius: 50%; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px; font-weight: bold;">
          1
        </div>
        <div>
          <h3 style="margin-top: 0; margin-bottom: 0.3rem; color: #007bff;">Magistrale Big Data engineering</h3>
          <p style="margin: 0.2rem 0;"><strong>Università Internazionale Uninettuno</strong> - 2024 / Presente</p>
          <p style="margin: 0.2rem 0;">Il Corso di Laurea Magistrale in Big Data è un percorso biennale incentrato principalmente sulla programmazione avanzata per la gestione e l’analisi di grandi volumi di dati.
          </p>
        </div>
      </li>
      <li style="position: relative; margin-bottom: 2rem; padding-left: 40px;">
        <div style="position: absolute; left: -18px; top: 0; background-color: #007bff; border-radius: 50%; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px; font-weight: bold;">
          2
        </div>
        <div>
          <h3 style="margin-top: 0; margin-bottom: 0.3rem; color: #007bff;">Laurea Triennale in Ingegneria Informatica</h3>
          <p style="margin: 0.2rem 0;"><strong>Università Internazionale Uninettuno</strong> - 2019 / 2023</p>
          <p style="margin: 0.2rem 0;">Il corso triennale online in Ingegneria Informatica di UNINETTUNO approfondisce lo sviluppo di sistemi informatici, la gestione di reti, l’uso di calcolatori elettronici e l’organizzazione di banche dati.
          </p>
        </div>
      </li>
      <li style="position: relative; margin-bottom: 2rem; padding-left: 40px;">
        <div style="position: absolute; left: -18px; top: 0; background-color: #007bff; border-radius: 50%; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px; font-weight: bold;">
          3
        </div>
        <div>
          <h3 style="margin-top: 0; margin-bottom: 0.3rem; color: #007bff;">Diploma Web Design and Software Development</h3>
          <p style="margin: 0.2rem 0;"><strong>Fondazione JobsAcademy</strong> - 2019 / 2021</p>
          <p style="margin: 0.2rem 0;">La Job's Academy — indirizzo WEB DESIGN è un percorso focalizzato sulle competenze pratiche in sviluppo software, spaziando da programmazione full‑stack a tecnologie moderne, metodologie Agile e sviluppo di applicazioni web e mobile.
          </p>
        </div>
      </li>
      <li style="position: relative; margin-bottom: 2rem; padding-left: 40px;">
        <div style="position: absolute; left: -18px; top: 0; background-color: #007bff; border-radius: 50%; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 18px; font-weight: bold;">
          4
        </div>
        <div>
          <h3 style="margin-top: 0; margin-bottom: 0.3rem; color: #007bff;">Diploma in Amministrazione Finanza e Marketing (SIA)</h3>
          <p style="margin: 0.2rem 0;"><strong>Istituto Tecnico Statale De Simoni</strong> - 2014 / 2019</p>
          <p style="margin: 0.2rem 0;">Diploma scuole superiori Amministrazione Finanza e Marketing indirizzo SIA (Sistemi informativi Aziendali)</p>
        </div>
      </li>
    </ul>
  </div>
</section>



<section class="about scroll-animate">
  <div class="about-container">
    <div class="about-photo">
      <img src="./image/EmilioVerri.png" alt="Foto di Emilio Verri" />
    </div>
    <div class="about-text" id="about">
      <h2>About Me</h2>
      <p>Mi chiamo <strong>Emilio Verri</strong>, sono un giovane ragazzo valtellinese appassionato di informatica. Il mio percorso di studi è iniziato alla Job’s Academy, dove ho imparato le basi dello sviluppo software con un approccio concreto e orientato al mondo del lavoro. Dopo questa esperienza formativa, ho deciso di proseguire con un percorso universitario per approfondire ulteriormente le mie competenze. Col tempo, mi sono avvicinato al mondo dell’infrastruttura e dell’amministrazione dei sistemi, intraprendendo il percorso da sistemista. Nonostante ciò, conservo una forte passione per lo sviluppo e continuo a coltivarla nel tempo libero, cercando sempre nuove sfide e progetti in cui mettermi alla prova.</p>
      <ul>
        <li><strong>Skills:</strong> JavaScript, PHP, Scripting Powershell e Python</li>
        <li><strong>Esperienza:</strong> 1 anno dedicato allo sviluppo web e 1 anno allo sviluppo di applicativi interni aziendali</li>
        <li><strong>Curiosità:</strong>Mi piace lanciarmi in piccoli progetti personali dedicati allo sviluppo</li>
      </ul>
    </div>
  </div>

  <style>
    section.about {
      padding: 60px 10vw;
      background: #fff;
      color: #222;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .about-container {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      max-width: 1100px;
      margin: 0 auto;
      flex-wrap: wrap;
    }

    .about-photo {
      flex-shrink: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-photo img {
      width: 320px;
      height: 320px;
      object-fit: cover;
      border-radius: 50%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      user-select: none;
    }

    .about-photo img:hover {
      transform: scale(1.07);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    }

    .about-text {
      max-width: 600px;
    }

    .about-text h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #111;
    }

    .about-text p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #333;
    }

    .about-text ul {
      list-style: none;
      padding-left: 0;
      font-size: 1rem;
      color: #444;
    }

    .about-text ul li {
      margin-bottom: 10px;
      padding-left: 20px;
      position: relative;
    }

    .about-text ul li::before {
      content: '▹';
      position: absolute;
      left: 0;
      color: #888;
      font-weight: bold;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        text-align: center;
      }

      .about-photo img {
        width: 240px;
        height: 240px;
        margin-bottom: 30px;
      }

      .about-text ul li {
        padding-left: 15px;
      }
    }
  </style>
</section>




<section class="timeline-fullscreen">
  <h2>Le mie conoscenze</h2>
  <ul class="timeline">
    <li>
      <div class="content">
        <h3>Powershell</h3>
        <p>In questo periodo mi sto dedicando a PowerShell e allo sviluppo di script per ottimizzare i processi interni dell’azienda in cui lavoro.</p>
      </div>
      <span class="date">2025</span>
    </li>
    <li>
      <div class="content">
        <h3>Python</h3>
        <p>In questo periodo mi sono lanciato nello studio di Python, approfondendo librerie come NumPy e TensorFlow. Sto lavorando alla creazione di un sistema basato su reti neurali convoluzionali (CNN) per il rilevamento automatico di fumi.</p>
      </div>
      <span class="date">2024</span>
    </li>
   
    <li>
      <div class="content">
        <h3>PHP & JavaScript</h3>
        <p>Ho collaborato con una piccola software house valtellinese, contribuendo allo sviluppo di siti web. E studio scolastico</p>
      </div>
      <span class="date">2020/22</span>
    </li>
  </ul>

  <style>
    section.timeline-fullscreen {
      height: 100vh;
      width: 100%;
      background: #000;
      padding: 60px 10vw;
      box-sizing: border-box;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    section.timeline-fullscreen h2 {
      color: #00aaff;
      font-size: 2.8rem;
      font-weight: 700;
      text-align: center;
      letter-spacing: 2px;
      margin-bottom: 50px;
      user-select: none;
    }
    ul.timeline {
      list-style: none;
      padding: 0;
      margin: 0 auto;
      max-width: 900px;
      position: relative;
      border-left: 3px solid #00aaff;
    }
    ul.timeline li {
      position: relative;
      margin: 40px 0 40px 30px;
      padding-left: 30px;
      opacity: 0;
      transform: translateX(-50px);
      animation: slideIn 0.6s forwards;
      animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }
    ul.timeline li:nth-child(1) { animation-delay: 0.1s; }
    ul.timeline li:nth-child(2) { animation-delay: 0.3s; }
    ul.timeline li:nth-child(3) { animation-delay: 0.5s; }
    ul.timeline li:nth-child(4) { animation-delay: 0.7s; }

    ul.timeline li::before {
      content: '';
      position: absolute;
      left: -14px;
      top: 8px;
      width: 20px;
      height: 20px;
      background: #00aaff;
      border-radius: 50%;
      border: 3px solid #000;
      box-shadow: 0 0 10px #00aaff88;
      transition: transform 0.3s ease;
    }
    ul.timeline li:hover::before {
      transform: scale(1.3);
      box-shadow: 0 0 20px #00aaffcc;
    }

    ul.timeline li .content h3 {
      margin: 0 0 8px 0;
      font-size: 1.6rem;
      color: #00aaff;
    }
    ul.timeline li .content p {
      margin: 0;
      font-size: 1rem;
      line-height: 1.5;
      color: #eee;
    }

    ul.timeline li .date {
      position: absolute;
      left: -110px;
      top: 5px;
      font-weight: 700;
      color: #00aaff;
      font-size: 1.1rem;
      user-select: none;
      letter-spacing: 1.2px;
      white-space: nowrap;
    }

    @keyframes slideIn {
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

   
    section.timeline-fullscreen::-webkit-scrollbar {
      width: 8px;
    }
    section.timeline-fullscreen::-webkit-scrollbar-thumb {
      background: #00aaff55;
      border-radius: 10px;
    }
    section.timeline-fullscreen::-webkit-scrollbar-thumb:hover {
      background: #00aaffaa;
    }

  
    @media (max-width: 600px) {
      section.timeline-fullscreen {
        height: auto;
        overflow-y: visible;
        padding: 40px 5vw;
      }
      ul.timeline {
        border-left: 3px solid transparent;
      }
      ul.timeline li {
        margin: 30px 0;
        padding-left: 0;
        transform: none !important; 
        opacity: 1 !important;
      }
      ul.timeline li::before {
        display: none;
      }
      ul.timeline li .date {
        position: static;
        display: block;
        margin-bottom: 8px;
        font-size: 1rem;
        color: #00aaff;
        left: auto;
        top: auto;
        user-select: none;
        letter-spacing: 1.2px;
      }
      ul.timeline li .content h3 {
        font-size: 1.4rem;
      }
      ul.timeline li .content p {
        font-size: 0.95rem;
      }
    }
  </style>
</section>
<section class="about scroll-animate">
  <div class="about-container">
    <div class="about-photo">
      <img src="./image/cat-icon.png" alt="Foto di Emilio Verri" />
    </div>

    <div class="about-text" id="why">
      <div class="about-motivation">
        <h3>Perché questo sito?</h3>
        <p>
          Questo sito nasce dal desiderio di avere uno spazio personale dove raccontare chi sono, raccogliere i miei progetti e condividere il mio percorso professionale. È anche un laboratorio digitale in cui posso sperimentare e continuare a crescere come sviluppatore e sistemista.
        </p>
      </div>

      <div class="about-links horizontal">
        <a href="./pdf/CV_Verri_Emilio.pdf" target="_blank" class="pdf-link">📄 Curriculum Vitae</a>
        <a href="./pdf/TesiLaureaEmilioVerri.pdf" target="_blank" class="pdf-link">📘 Tesi di Laurea</a>
        <a href="./pdf/DigitalInnovationEmilioVerri.pdf" target="_blank" class="pdf-link">📑 Integrazione Tesi</a>
      </div>
    </div>
  </div>

  <style>
    section.about {
      padding: 60px 10vw;
      background: #fff;
      color: #222;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .about-container {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      max-width: 1100px;
      margin: 0 auto;
      flex-wrap: wrap;
    }

    .about-photo {
      flex-shrink: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-photo img {
      width: 320px;
      height: 320px;
      object-fit: cover;
      border-radius: 50%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      user-select: none;
    }

    .about-photo img:hover {
      transform: scale(1.07);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    }

    .about-text {
      max-width: 600px;
    }

    .about-motivation {
      margin-top: 10px;
    }

    .about-motivation h3 {
      font-size: 1.6rem;
      margin-bottom: 10px;
      color: #111;
    }

    .about-motivation p {
      font-size: 1rem;
      line-height: 1.6;
      color: #333;
    }

    .about-links {
      margin-top: 20px;
      gap: 10px;
    }

    .about-links.horizontal {
      display: flex;
      flex-direction: row;
      gap: 20px;
      flex-wrap: wrap;
    }

    .pdf-link {
      color: #0056b3;
      text-decoration: none;
      font-weight: bold;
      border: 1px solid #0056b3;
      padding: 8px 12px;
      border-radius: 8px;
      transition: background 0.3s, color 0.3s;
    }

    .pdf-link:hover {
      background: #0056b3;
      color: white;
    }

    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        text-align: center;
      }

      .about-photo img {
        width: 240px;
        height: 240px;
        margin-bottom: 30px;
      }

      .about-links.horizontal {
        justify-content: center;
      }
    }
  </style>
</section>
<?php
$response = "";
$showPopup = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(strip_tags(trim($_POST["nome"] ?? '')));
    $cognome = htmlspecialchars(strip_tags(trim($_POST["cognome"] ?? '')));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $messaggio = htmlspecialchars(strip_tags(trim($_POST["messaggio"] ?? '')));
    $privacy = isset($_POST["privacy"]) ? "Accettata" : "Non accettata";

    if (empty($nome) || empty($cognome) || empty($email) || empty($messaggio)) {
        $response = "Tutti i campi sono obbligatori.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = "Indirizzo email non valido.";
    } elseif ($privacy === "Non accettata") {
        $response = "Devi accettare la privacy policy per inviare il messaggio.";
    } else {
        $to = "emilioverri83@gmail.com";
        $subject = "Hai ricevuto un messaggio da $nome $cognome";
        $logoUrl = "https://emilioverri.altervista.org/image/cat-icon.png"; 

        $body = "
        <html>
        <head>
          <style>
            body { font-family: Arial, sans-serif; color: #333; background-color: #f9f9f9; }
            .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
            .header img { max-width: 150px; display: block; margin: 0 auto 20px; }
            .content p { font-size: 16px; line-height: 1.5; }
            .signature { margin-top: 30px; font-style: italic; color: #555; }
          </style>
        </head>
        <body>
          <div class='container'>
            <div class='header'>
              <img src='$logoUrl' alt='Logo sito'>
            </div>
            <div class='content'>
              <p><strong>Nome:</strong> $nome</p>
              <p><strong>Cognome:</strong> $cognome</p>
              <p><strong>Email:</strong> $email</p>
              <p><strong>Messaggio:</strong><br>" . nl2br($messaggio) . "</p>
              <p><strong>Privacy:</strong> $privacy</p>
              <div class='signature'>
                <p>– Emilio Verri</p>
              </div>
            </div>
          </div>
        </body>
        </html>";

        $headers = "From: \"Emilio Verri\" <emilioverri@portfolio.altervista.org>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $showPopup = true;
        } else {
            $response = "Errore durante l'invio del messaggio.";
        }
    }
}
?>

<section class="contact-form" id="contact" style="background:#000; padding:80px 10vw; color:#007bff; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align:center; font-size:2.8rem; margin-bottom:40px; letter-spacing:1px; color:#007bff;">Contattami</h2>

  <?php if ($showPopup): ?>
    <div id="popupSuccess" style="position: fixed; top: 30px; left: 50%; transform: translateX(-50%); background-color: #28a745; color: white; padding: 15px 30px; border-radius: 30px; font-weight: bold; z-index: 9999; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
      ✅ Messaggio inviato con successo!
    </div>
    <script>
      setTimeout(() => {
        const popup = document.getElementById('popupSuccess');
        if (popup) popup.style.display = 'none';
      }, 5000);
    </script>
  <?php endif; ?>

  <form class="form-container" action="" method="POST" style="max-width:700px; margin:0 auto; background:#111; padding:40px; border-radius:20px; color:#007bff; box-shadow:0 0 25px rgba(0,123,255,0.3); animation:fadeIn 1s ease-in-out;">
    <div class="form-group" style="margin-bottom:25px;">
      <label for="nome" style="display:block; margin-bottom:8px; font-weight:600;">Nome</label>
      <input type="text" name="nome" id="nome" required style="width:100%; padding:12px 15px; border:2px solid #007bff; border-radius:8px; font-size:1rem; background:#000; color:#007bff; outline:none;">
    </div>
    <div class="form-group" style="margin-bottom:25px;">
      <label for="cognome" style="display:block; margin-bottom:8px; font-weight:600;">Cognome</label>
      <input type="text" name="cognome" id="cognome" required style="width:100%; padding:12px 15px; border:2px solid #007bff; border-radius:8px; font-size:1rem; background:#000; color:#007bff; outline:none;">
    </div>
    <div class="form-group" style="margin-bottom:25px;">
      <label for="email" style="display:block; margin-bottom:8px; font-weight:600;">Email</label>
      <input type="email" name="email" id="email" required style="width:100%; padding:12px 15px; border:2px solid #007bff; border-radius:8px; font-size:1rem; background:#000; color:#007bff; outline:none;">
    </div>
    <div class="form-group" style="margin-bottom:30px;">
      <label for="messaggio" style="display:block; margin-bottom:8px; font-weight:600;">Cosa vuoi chiedermi?</label>
      <textarea name="messaggio" id="messaggio" rows="5" required style="width:100%; padding:12px 15px; border:2px solid #007bff; border-radius:8px; font-size:1rem; background:#000; color:#007bff; outline:none;"></textarea>
    </div>

    <div class="form-group" style="margin-bottom:30px;">
      <label style="display:flex; align-items:center; font-size:0.95rem;">
        <input type="checkbox" name="privacy" required style="margin-right:10px;"> 
        Accetto la &nbsp; <a href="https://www.iubenda.com/privacy-policy/59616074" class="iubenda-black iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
      </label>
    </div>

    <button type="submit" style="background:#007bff; color:#fff; padding:15px 40px; border:none; border-radius:50px; font-size:1.2rem; cursor:pointer;">
      Invia Messaggio
    </button>

    <?php if ($response): ?>
      <div style="margin-top:20px; font-weight:600; color:<?= strpos($response, 'successo') !== false ? 'limegreen' : 'red'; ?>;">
        <?= $response; ?>
      </div>
    <?php endif; ?>
  </form>

  <style>
    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: #339cff;
      box-shadow: 0 0 5px #007bff88;
    }

    button:hover {
      background-color: #0056b3 !important;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</section>


<section style="background-color: #fff; padding: 40px 20px; text-align: center;">
  <blockquote style="font-size: 1.5rem; font-style: italic; color: #333;">
     "La vita è tutta ‘na commedia: io faccio ridere pure quando piango… e piango pure quando rido!"  Totò
  </blockquote>
</section>



    <footer class="uk-section uk-section-small uk-text-center" style="background-color: #000000; color: #ffffff;">
  <div class="uk-container">
    <div class="uk-grid-small uk-flex-center uk-child-width-auto" uk-grid>
     
      <div>
        <a href="https://www.linkedin.com/in/emilio-verri-911027212/" target="_blank" uk-icon="linkedin" style="color: #ffffff;"></a>
      </div>
      <div>
        <a href="https://github.com/EmilioVerri" target="_blank" uk-icon="github" style="color: #ffffff;"></a>
      </div>
      <div>
        <a href="https://www.instagram.com/emilio_verri/?next=%2F" target="_blank" uk-icon="instagram" style="color: #ffffff;"></a>
      </div>
    </div>

    <div class="uk-margin-small-top uk-text-small" style="color: #ccc;">
      <p>Email: <a href="mailto:emilioverri83@gmail.com" style="color: #ccc;">emilioverri83@gmail.com</a> | Tel: +39 3933130400</p>
      <p>&copy; 2025 Emilio Verri. Tutti i diritti riservati.</p>
      <p><a href="https://www.iubenda.com/privacy-policy/59616074" class="iubenda-black iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script> | <a href="https://www.iubenda.com/privacy-policy/59616074/cookie-policy" class="iubenda-black iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></p>
    </div>
  </div>
</footer>


    <script>
      
        const ballCount = 10;
        const balls = [];
        const container = document.getElementById('bouncingBalls');
        const containerRect = container.getBoundingClientRect();

        for (let i = 0; i < ballCount; i++) {
            const ball = document.createElement('div');
            ball.classList.add('ball');
            ball.style.left = `${Math.random() * (containerRect.width - 20)}px`;
            ball.style.top = `${Math.random() * (containerRect.height - 20)}px`;
            container.appendChild(ball);
            balls.push({
                element: ball,
                x: Math.random() * (containerRect.width - 20),
                y: Math.random() * (containerRect.height - 20),
                dx: (Math.random() - 0.5) * 4,
                dy: (Math.random() - 0.5) * 4
            });
        }

        function animateBalls() {
            balls.forEach(ball => {
                ball.x += ball.dx;
                ball.y += ball.dy;

                
                if (ball.x <= 0 || ball.x >= containerRect.width - 20) {
                    ball.dx *= -1;
                }
                if (ball.y <= 0 || ball.y >= containerRect.height - 20) {
                    ball.dy *= -1;
                }

               
                ball.element.style.left = `${ball.x}px`;
                ball.element.style.top = `${ball.y}px`;
            });

            requestAnimationFrame(animateBalls);
        }

        animateBalls();

       
        const scrollElements = document.querySelectorAll('.scroll-animate');

        const elementInView = (el, offset = 100) => {
            const elementTop = el.getBoundingClientRect().top;
            return (
                elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset
            );
        };

        const displayScrollElement = (element) => {
            element.classList.add('visible');
        };

        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el)) {
                    displayScrollElement(el);
                }
            });
        };

        window.addEventListener('scroll', handleScrollAnimation);
    </script>





<style>
  #backToTop {
    position: fixed;
    bottom: 40px;
    left: 40px;
    background-color: #007bff;
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    text-align: center;
    line-height: 45px;
    font-size: 28px;
    cursor: pointer;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.4s ease, visibility 0.4s;
    z-index: 10000;
  }
  #backToTop.show {
    opacity: 1;
    visibility: visible;
  }
</style>

<div id="backToTop" title="Torna su">&#8679;</div>

<script>
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {  
      backToTop.classList.add('show');
    } else {
      backToTop.classList.remove('show');
    }
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>

</body>

</html>