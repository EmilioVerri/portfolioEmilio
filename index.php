<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Minimalistic and elegant portfolio in black and white">
    <title>Portfolio | Emilio Verri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css">
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

        /* PC Falling Animation */
        .falling-pc {
            width: 80px;
            height: 100px;
            position: absolute;
            top: -150px;
            left: 50%;
            transform: translateX(-50%);
            animation: dropPc 2s ease-out forwards;
        }

        .falling-pc .screen {
            width: 100%;
            height: 70%;
            background-color: #000000;
            border: 2px solid #ffffff;
            border-radius: 4px 4px 0 0;
        }

        .falling-pc .base {
            width: 60%;
            height: 20%;
            background-color: #ffffff;
            border: 2px solid #000000;
            margin: 5px auto 0;
            border-radius: 0 0 4px 4px;
        }

        @keyframes dropPc {
            to {
                top: 50%;
                transform: translate(-50%, -50%);
            }
        }

        /* Bouncing Balls */
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

        /* Menu Icon */
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
            z-index: 9;
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
            /* Assicurati che il bottone accetti clic */
            z-index: 10;
            /* Assicurati che il bottone sia sopra altri elementi */
        }

        .bouncing-balls {
            pointer-events: none;
            /* Rendi questo elemento trasparente ai clic */
        }

        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        .logo {
    width: 50px; /* Imposta la larghezza */
    height: 50px; /* Imposta l'altezza */
    border-radius: 50%; /* Rende il logo arrotondato */
    object-fit: cover; /* Assicura che l'immagine si adatti all'interno del cerchio */
    border: 2px solid #000000; /* Aggiunge un bordo nero attorno al logo */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Aggiunge un'ombra per un effetto estetico */
}

    </style>




</head>

<body>

    <div class="hero">



        <!-- Menu Icon -->
        <div class="menu-icon" id="menuIcon">☰</div>

        <div class="logo-container">
            <img src=".\image\cat-icon.png" alt="Logo" class="logo">
        </div>

        <!-- Sliding Menu -->
        <div class="menu" id="menu">
            <ul>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="bouncing-balls" id="bouncingBalls"></div>
        <div class="falling-pc">
            <div class="screen"></div>
            <div class="base"></div>
        </div>
        <h1>Benvenuto nel mio Portoflio</h1>
        <p>Elegance in Simplicity</p>
        <a href="#projects" class="explore-button">
            <a href="#projects" style="text-decoration: none;">
                <button style="cursor: pointer;">Explore My Work</button>
            </a>
        </a>

    </div>

    <script>
        // Menu Toggle Logic
        const menuIcon = document.getElementById('menuIcon');
        const menu = document.getElementById('menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('visible');
        });
    </script>

    <!-- Projects Section -->
    <section class="projects scroll-animate" id="projects">
        <h2>My Projects</h2>
        <div class="project-grid">
            <div class="project-card">
                <img src="./image/cat-icon.png" alt="Project 1 Image">
                <a href="project1.html">Project 1</a>
            </div>
            <div class="project-card">
                <img src="https://via.placeholder.com/300x200" alt="Project 2 Image">
                <a href="project2.html">Project 2</a>
            </div>
            <div class="project-card">
                <img src="https://via.placeholder.com/300x200" alt="Project 3 Image">
                <a href="project3.html">Project 3</a>
            </div>
            <div class="project-card">
                <img src="https://via.placeholder.com/300x200" alt="Project 3 Image">
                <a href="project3.html">Project 3</a>
            </div>
        </div>
        <br>
        <div class="project-grid">
            <div class="project-card">
                <img src="./image/cat-icon.png" alt="Project 1 Image">
                <a href="project1.html">Project 1</a>
            </div>
            <div class="project-card">
                <img src="https://via.placeholder.com/300x200" alt="Project 2 Image">
                <a href="project2.html">Project 2</a>
            </div>
            <div class="project-card">
                <img src="https://via.placeholder.com/300x200" alt="Project 3 Image">
                <a href="project3.html">Project 3</a>
            </div>
            <div class="project-card">
                <img src="https://via.placeholder.com/300x200" alt="Project 3 Image">
                <a href="project3.html">Project 3</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about scroll-animate">
        <h2>About Me</h2>
        <p>Hi, I'm [Your Name], a passionate designer and developer. I specialize in creating minimalistic and functional designs that prioritize user experience. My journey in technology has been driven by a love for creativity and problem-solving.</p>
    </section>

    <!-- Contact Section -->
    <section class="contact scroll-animate">
        <h2>Contattami</h2>
        <p>Feel free to reach out via email: <a href="mailto:yourname@example.com">yourname@example.com</a></p>
        <p>Or connect with me on social media!</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 [Your Name]. All rights reserved.</p>
    </footer>

    <script>
        // Bouncing Balls Logic
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

                // Check for collisions with walls
                if (ball.x <= 0 || ball.x >= containerRect.width - 20) {
                    ball.dx *= -1;
                }
                if (ball.y <= 0 || ball.y >= containerRect.height - 20) {
                    ball.dy *= -1;
                }

                // Update ball position
                ball.element.style.left = `${ball.x}px`;
                ball.element.style.top = `${ball.y}px`;
            });

            requestAnimationFrame(animateBalls);
        }

        animateBalls();

        // Scroll Animation
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
</body>

</html>