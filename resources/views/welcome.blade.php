<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio | Développeur Informatique - Cybersécurité</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-weight: 600;
            color: var(--secondary-color);
        }

        .code-font {
            font-family: 'Roboto Mono', monospace;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.95);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            color: var(--dark-color) !important;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Q50,80 0,100 Z" fill="white"/></svg>');
            background-size: 100% 100%;
            bottom: 0;
            z-index: 1;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            color: white;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-outline-light {
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-outline-light:hover {
            transform: translateY(-2px);
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background: var(--primary-color);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* .about-img {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        } */
        .about-img {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            max-width: 380px; /* Ajoutez cette ligne pour limiter la largeur */
            height: auto; /* Conserve les proportions */
            width: 100%; /* S'adapte au conteneur parent */
        }

        .about-img:hover {
            transform: scale(1.03);
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .progress {
            height: 10px;
            border-radius: 5px;
        }

        .progress-bar {
            background-color: var(--primary-color);
        }

        .portfolio-item {
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            position: relative;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .portfolio-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(52, 152, 219, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-overlay h4 {
            color: white;
            margin-bottom: 10px;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--primary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: white;
            border: 4px solid var(--primary-color);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .left::after {
            right: -12px;
        }

        .right::after {
            left: -12px;
        }

        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }

        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 30px 0;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: rgb(19, 24, 182);
            margin: 0 10px;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--secondary-color);
            transform: translateY(-5px);
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate {
            animation: fadeIn 1s ease forwards;
        }

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 18px;
            }

            .left::after, .right::after {
                left: 18px;
            }

            .right {
                left: 0;
            }
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MonPortfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Parcours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container text-center hero-content">
            <h1 class="animate">Bonjour, je suis <span class="text-warning">Pape Moussa DIEDHIOU</span></h1>
            <p class="animate delay-1 text-dark">Développeur informatique spécialisé en cybersécurité. Diplômé d'une licence en informatique option cybersécurité et d'un DST en informatique générale. Actuellement en stage.</p>
            <div class="animate delay-2">
                <a href="#about" class="btn btn-primary me-2">En savoir plus</a>
                <a href="#contact" class="btn btn-primary ">Me contacter</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title">À propos de moi</h2>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{asset('img/jah.jpeg')}}" alt="Photo de profil" class="img-fluid about-img">
                </div>
                <div class="col-lg-7">
                    <h3>Développeur & passionné de cybersécurité</h3>
                    <br>
                    <p>Je suis actuellement en stage en tant que développeur après avoir obtenu ma licence en informatique avec une spécialisation en cybersécurité. Auparavant, j'ai décroché mon Diplôme Supérieur en Technologie (DST) en informatique générale.</p>
                    <p>Mon parcours académique et professionnel m'a permis d'acquérir des compétences solides en développement logiciel tout en développant une expertise en sécurité informatique.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Nom :</strong>Pape Moussa DIEDHIOU</li>
                                <li class="mb-2"><strong>Email :</strong> papemoussadiedhiou272@gmail.com</li>
                                <li class="mb-2"><strong>Téléphone :</strong> +221 77 3859679</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Diplôme :</strong> Licence Informatique</li>
                                <li class="mb-2"><strong>Spécialité :</strong> Cybersécurité</li>
                                <li class="mb-2"><strong>Disponibilité :</strong> À temps plein</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-3">Télécharger mon CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="bg-light py-5">
        <div class="container">
            <h2 class="section-title">Mes compétences</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-4">Compétences techniques</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Développement Web</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Cybersécurité</span>
                            <span>65%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Bases de données</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Réseaux informatiques</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <br>
                    <h3 class="mb-4">Langages & technologies</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>HTML/CSS/JavaScript</span>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Python</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div>
                    </div>
                    {{-- <div class="skill-item">
                        <div class="skill-name">
                            <span>Java</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                        </div>
                    </div> --}}
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>C/C++</span>
                            <span>70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="mb-4">Outils & frameworks</h3>
                    <div class="d-flex flex-wrap">
                        <span class="badge bg-primary me-2 mb-2 p-2">Laravel</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Bootstrap</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">React</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Django</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">MySQL</span>
                        {{-- <span class="badge bg-primary me-2 mb-2 p-2">MongoDB</span> --}}
                        <span class="badge bg-primary me-2 mb-2 p-2">Git</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Docker</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Kali Linux</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Metasploit</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Wireshark</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">OWASP ZAP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5">
        <div class="container">
            <h2 class="section-title">Mes projets</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/appSécurité.png')}}" alt="Projet 1" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Application de sécurité</h4>
                            <p>Outil de détection d'intrusion</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/E-commerce.png')}}" alt="Projet 2" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Site e-commerce</h4>
                            <p>Plateforme sécurisée</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/noix.jpeg')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Analyse de vulnérabilités</h4>
                            <p>Scanner automatisé</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/noix.jpeg')}}" alt="Projet 4" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Gestion de parc</h4>
                            <p>Application web</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/noix.jpeg')}}" alt="Projet 5" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Cryptographie</h4>
                            <p>Outil de chiffrement</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/noix.jpeg')}}" alt="Projet 6" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Réseau social</h4>
                            <p>Plateforme sécurisée</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education & Experience Section -->
    <section id="education" class="bg-light py-5">
        <div class="container">
            <h2 class="section-title">Mon parcours</h2>
            <div class="timeline">
                <!-- Éducation -->
                <div class="timeline-item left">
                    <div class="timeline-content animate">
                        <h3>Licence en Informatique</h3>
                        <h4>Option Cybersécurité</h4>
                        <p class="text-muted">2021 - 2024</p>
                        <p>Formation approfondie en sécurité informatique, cryptographie, réseaux sécurisés et développement sécurisé.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content animate delay-1">
                        <h3>Diplôme Supérieur en Technologie (DST)</h3>
                        <h4>Informatique Générale</h4>
                        <p class="text-muted">2018 - 2021</p>
                        <p>Formation polyvalente couvrant le développement logiciel, les bases de données, les réseaux et les systèmes d'information.</p>
                    </div>
                </div>
                <!-- Expérience -->
                <div class="timeline-item left">
                    <div class="timeline-content animate delay-2">
                        <h3>Stage en développement</h3>
                        <h4>Entreprise Actuelle</h4>
                        <p class="text-muted">2024 - Présent</p>
                        <p>Développement d'applications sécurisées, participation à des audits de sécurité et mise en place de bonnes pratiques.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content animate delay-3">
                        <h3>Projet de fin d'études</h3>
                        <h4>Outil d'analyse de vulnérabilités</h4>
                        <p class="text-muted">2023 - 2024</p>
                        <p>Conception et développement d'un scanner automatisé de vulnérabilités pour applications web.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="section-title">Contactez-moi</h2>
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h3 class="mb-4">Informations de contact</h3>
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4>Localisation</h4>
                        <p>Dakar, Sénégal</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>papemoussadiedhiou272@gmail.com</p>
                    </div>
                </div>
                {{-- <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4>WhatsApp</h4>
                        <p>
                            <a href="https://wa.me/221773859679?text=Bonjour%20[Votre%20Nom]%20je%20vous%20contacte%20via%20votre%20portfolio" ...>
                                +221 773859679
                            </a>
                        </p>
                    </div>
                </div> --}}
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4>Téléphone</h4>
                        <p>+221 77 3859679</p>
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="mb-3">Réseaux sociaux</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">Envoyez-moi un message</h3>
                <p class="mb-4">Pour une réponse rapide, contactez-moi directement sur WhatsApp :</p>
                <div class="text-center mb-4">
                    <a href="https://wa.me/221773859679" class="btn btn-success btn-lg" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Envoyer un message WhatsApp
                    </a>
                </div>

                <p class="text-center mb-4">Ou utilisez le formulaire ci-dessous :</p>

                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Votre email" required>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Sujet">

                    <textarea class="form-control" rows="5" placeholder="Votre message" required></textarea>

                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                </form>
            </div>
        </div>
    </div>
</section>
    <!-- Footer -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-2">© 2024 DIEDHIOU. Tous droits réservés. Conçu avec <i class="fas fa-heart text-danger"></i> par Jah</p>
            {{-- <p class="mb-0">Conçu avec <i class="fas fa-heart text-danger"></i> par Jah </p> --}}
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });

        // Animation on scroll
        const animateElements = document.querySelectorAll('.animate');

        function checkScroll() {
            animateElements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);

        // Form submission
        const contactForm = document.getElementById('contactForm');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Here you would typically send the form data to a server
            alert('Merci pour votre message! Je vous répondrai dès que possible.');
            contactForm.reset();
        });
    </script>
</body>
</html>
