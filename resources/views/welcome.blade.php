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

        .about-img {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
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
            color: white;
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
            <h1 class="animate">Bonjour, je suis <span class="text-success">Pape Moussa DIEDHIOU</span></h1>
            <p class="animate delay-1 text-dark">Développeur informatique avec une spécialisation en cybersécurité, titulaire d'une licence en informatique option
                cybersécurité et d’un Diplôme Supérieur de Technologie en informatique générale. Actuellement développeur au sein d’une entreprise, je dispose
                de quelques bases en cybersécurité et je suis particulièrement passionné par ce domaine. Mon objectif est de poursuivre mes études en Master avec une
                orientation en cybersécurité et en réseaux, afin de renforcer mes compétences et contribuer activement à la protection des systèmes d'information.</p>
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
                    <p>Je suis actuellement en stage en tant que développeur à MIRAHTEC après avoir obtenu ma licence en informatique avec une spécialisation en cybersécurité à la Colombe Academy of Technologie de Dakar. Auparavant, j'ai décroché mon Diplôme Supérieur en Technologie (DST) en informatique générale à l'Ecole Supérieure Polytechnique de Dakar.</p>
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
                    {{-- <a href="#" class="btn btn-primary mt-3">Télécharger mon CV</a> --}}
                    <a href="{{ asset('Doc/CV PM Diedhiou.pdf') }}" class="btn btn-primary mt-3" download="CV_Diedhiou.pdf">
                        <i class="fas fa-download me-2"></i> Télécharger mon CV
                    </a>
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
                            <span>60%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%"></div>
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
                            <span>70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="mb-4">Langages & technologies</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>HTML/CSS</span>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Python</span>
                            <span>60%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                        </div>
                    </div>
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
                        <span class="badge bg-primary me-2 mb-2 p-2">Git</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Docker</span>
                        {{-- <span class="badge bg-primary me-2 mb-2 p-2">React</span> --}}
                        <span class="badge bg-primary me-2 mb-2 p-2">Django</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">MySQL</span>
                        {{-- <span class="badge bg-primary me-2 mb-2 p-2">MongoDB</span> --}}
                        <span class="badge bg-primary me-2 mb-2 p-2">Kali Linux</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Metasploit</span>
                        <span class="badge bg-primary me-2 mb-2 p-2">Wireshark</span>
                        {{-- <span class="badge bg-primary me-2 mb-2 p-2">OWASP ZAP</span> --}}
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
                        <img src="{{asset('img/menu.PNG')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Application de Gestion de Stock</h4>
                            <p>Projet de Fin d'etude à l'ESP</p>
                            <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#stockModal">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/casa.png')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Site Web Région Casamance</h4>
                            <p>En cours </p>
                            <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#casamanceModal">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/vulnerability.png')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Analyse de vulnérabilités</h4>
                            <p>En cours</p>
                            <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#vulnerabilityModal">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/pare-feu.png')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Impact d'un pare-feu</h4>
                            <p>Projet de Fin d'Etude</p>
                            <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#firewallModal">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/appShop.png')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Application de vente en ligne</h4>
                            <p class="text-center">Mise en valeur des produits locaux de la casamance pour une meilleure accessibilité <br> <span class="">(En cours)</span></p>
                            <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#casamanceShopModal">Voir plus</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 mb-4">
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
                </div> --}}
                {{-- <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="{{asset('img/noix.jpeg')}}" alt="Projet 3" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <h4>Analyse de vulnérabilités</h4>
                            <p>Scanner automatisé</p>
                            <a href="#" class="btn btn-outline-light">Voir plus</a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4 mb-4">
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
                </div> --}}
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
                    <div class="timeline-content animate delay-1">
                        <h5>Diplôme Supérieur en Technologie (DST) à l'Ecole Supérieure Polytechnique de Dakar </h5>
                        <h5 style="color: rgb(187, 214, 9)">Informatique Générale</h5>
                        <p class="text-muted">2020 - 2022</p>
                        <p style="font-size: 14px">Formation polyvalente couvrant le développement logiciel, les bases de données, les réseaux et les systèmes d'information.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content animate">
                        <h3>Licence en Informatique</h3>
                        <h5 style="color: rgb(187, 214, 9)">Option Cybersécurité</h5>
                        <p class="text-muted">2022 - 2023</p>
                        <p style="font-size: 14px">Formation approfondie en sécurité informatique, cryptographie, réseaux sécurisés et développement sécurisé.</p>
                    </div>
                </div>
                <!-- Expérience -->
                <div class="timeline-item left">
                    <div class="timeline-content animate delay-2">
                        <h3>Stage en développement</h3>
                        <h5>Entreprise Actuelle</h5>
                        <p class="text-muted">Septembre 2024 - Présent</p>
                        <p style="font-size: 14px">Développement d'applications sécurisées, participation à des audits de sécurité et mise en place de bonnes pratiques.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content animate delay-3">
                        <h3>Etude Anglais</h3>
                        <h4>British Council de Dakar</h4>
                        <p class="text-muted">Janvier 2024 - Juin 2024</p>
                        <p  style="font-size: 14px">Obtention du diplôme d'Anglais niveau B1</p>
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
                            <a href="{{url('https://www.linkedin.com/in/pape-moussa-diedhiou-448251331/')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{url('https://github.com/')}}" target="_blank"><i class="fab fa-github"></i></a>
                            {{-- <a href="#"><i class="fab fa-twitter"></i></a> --}}
                            {{-- <a href="#"><i class="fab fa-instagram"></i></a> --}}
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

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                            </div>
                        </div>
                        <input type="text" name="sujet" class="form-control" placeholder="Sujet">
                        <textarea name="message" class="form-control" rows="5" placeholder="Votre message" required></textarea>
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


    <!-- Les modals pour mes projets  -->

        <!-- first Project -->
        <div class="modal fade" id="stockModal" tabindex="-1" aria-labelledby="stockModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"> <!-- modal-lg pour une taille large -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="stockModalLabel">Application de Gestion de Stock</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('img/menu.PNG')}}" alt="Capture d'écran du projet" class="img-fluid mb-3">
                                <div class="mb-3">
                                    <h6>Technologies utilisées :</h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary">HTML/CSS</span>
                                        <span class="badge bg-primary">JavaScript</span>
                                        <span class="badge bg-primary">PHP procédural</span>
                                        <span class="badge bg-primary">MySQL</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Description du projet :</h6>
                                <p>Application complète de gestion de stock développée comme projet de fin d'étude à l'ESP (Ecole Superieure Polytechnique). Le système permet :</p>
                                <ul>
                                    <li>La gestion des produits et catégories</li>
                                    <li>Suivi des entrées/sorties de stock</li>
                                    <li>Génération de rapports PDF</li>
                                    <li>Alertes de stock faible</li>
                                    <li>Interface administrateur et utilisateur</li>
                                </ul>
                                <h6 class="mt-3">Fonctionnalités clés :</h6>
                                <ul>
                                    <li>Authentification sécurisée</li>
                                    <li>Export des données en Excel</li>
                                    <li>Historique des mouvements</li>
                                    <li>Tableau de bord analytique</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-primary" target="_blank">Voir le code source</a>
                        <a href="#" class="btn btn-success" target="_blank">Voir la démo</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ajoutez ce modal à la fin de votre HTML -->
        <div class="modal fade" id="casamanceModal" tabindex="-1" aria-labelledby="casamanceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="casamanceModalLabel">Site Web Région Casamance</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="carousel slide" id="casamanceCarousel" data-bs-ride="carousel">
                                    <div class="carousel-inner rounded">
                                        <div class="carousel-item active">
                                            <img src="{{asset('img/casa.png')}}" class="d-block w-100" alt="Capture d'écran 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('img/noix.jpeg')}}" class="d-block w-100" alt="Capture d'écran 2">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#casamanceCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Précédent</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#casamanceCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Suivant</span>
                                    </button>
                                </div>

                                <div class="mt-3">
                                    <h6>Technologies :</h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary">Laravel</span>
                                        <span class="badge bg-primary">Bootstrap</span>
                                        <span class="badge bg-primary">Vue.js</span>
                                        {{-- <span class="badge bg-primary">API REST</span> --}}
                                        <span class="badge bg-primary">MySQL</span>
                                    </div>
                                </div>
                                <div class="alert alert-info mt-3">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Statut :</strong> En développement (version beta disponible)
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Contexte :</h6>
                                <p>Plateforme officielle de la région de Casamance visant à :</p>
                                <ul>
                                    <li>Promouvoir le tourisme local</li>
                                    <li>Présenter les potentialités économiques</li>
                                    <li>Faciliter l'accès aux services administratifs</li>
                                    <li>Mettre en valeur le patrimoine culturel</li>
                                </ul>

                                <h6 class="mt-3">Fonctionnalités :</h6>
                                <ul>
                                    <li>Portail multilingue (Français, Wolof, Diola)</li>
                                    <li>Carte interactive des sites touristiques</li>
                                    <li>Galerie média riche (photos/vidéos 360°)</li>
                                    <li>Espace actualités et événements</li>
                                    <li>Formulaire de contact géolocalisé</li>
                                </ul>

                                {{-- <div class="alert alert-info mt-3">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Statut :</strong> En développement (version beta disponible)
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i> Fermer
                        </button> --}}

                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-primary disabled">
                                <i class="fab fa-github me-2"></i> Code source (privé)
                            </a>
                            <a href="https://demo-casamance.votresite.com" class="btn btn-success" target="_blank">
                                <i class="fas fa-external-link-alt me-2"></i> Accéder à la préversion
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Projet Analyse de Vulnérabilité  -->
        <div class="modal fade" id="vulnerabilityModal" tabindex="-1" aria-labelledby="vulnerabilityModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content border border-danger">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="vulnerabilityModalLabel">
                            <i class="fas fa-shield-alt me-2"></i>Outil d'Analyse de Vulnérabilités
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <div id="vulnerabilityCarousel" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner rounded">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('img/vulnerability.png')}}" class="d-block w-100" alt="Interface principale">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('img/P29.PNG')}}" class="d-block w-100" alt="Exemple de rapport">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('img/C6.PNG')}}" class="d-block w-100" alt="Processus de scan">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#vulnerabilityCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#vulnerabilityCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <h6><i class="fas fa-tools me-2"></i>Technologies utilisées :</h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-danger">Python</span>
                                        <span class="badge bg-dark">Django</span>
                                        <span class="badge bg-secondary">Nmap</span>
                                        <span class="badge bg-info">OWASP ZAP</span>
                                        <span class="badge bg-warning text-dark">Metasploit</span>
                                        <span class="badge bg-primary">Docker</span>
                                    </div>
                                </div>

                                <div class="alert alert-warning mt-3">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>Note :</strong> Cet outil est strictement destiné à des tests autorisés et à des fins éducatives.
                                </div>

                            </div>
                            <div class="col-md-6">
                                <h6><i class="fas fa-info-circle me-2"></i>Description :</h6>
                                <p>Plateforme d'analyse automatisée de vulnérabilités permettant :</p>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Scan des ports et services</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Détection des vulnérabilités connues (CVE)</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Analyse des configurations sécuritaires</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span>Génération de rapports détaillés</li>
                                </ul>

                                <h6 class="mt-4"><i class="fas fa-star me-2"></i>Fonctionnalités clés :</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-cog text-primary"></i></span>Interface centralisée pour multiples outils</li>
                                    <li><span class="fa-li"><i class="fas fa-cog text-primary"></i></span>Base de données des vulnérabilités locale</li>
                                    <li><span class="fa-li"><i class="fas fa-cog text-primary"></i></span>Évaluation du niveau de risque</li>
                                    <li><span class="fa-li"><i class="fas fa-cog text-primary"></i></span>Suggestions de correctifs</li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i> Fermer
                        </button> --}}

                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-dark disabled">
                                <i class="fas fa-lock me-2"></i> Code source (restreint)
                            </a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#requestDemoModal">
                                <i class="fas fa-video me-2"></i> Demander une démo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal secondaire pour la demande de démo -->
        <div class="modal fade" id="requestDemoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Demande d'accès à la démo</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="demoRequestForm">
                            <div class="mb-3">
                                <label for="demoEmail" class="form-label">Email professionnel</label>
                                <input type="email" class="form-control" id="demoEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="demoOrganization" class="form-label">Organisation</label>
                                <input type="text" class="form-control" id="demoOrganization" required>
                            </div>
                            <div class="mb-3">
                                <label for="demoPurpose" class="form-label">Motivation de la demande</label>
                                <textarea class="form-control" id="demoPurpose" rows="3" required></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="demoAgreement" required>
                                <label class="form-check-label" for="demoAgreement">
                                    Je certifie que cet outil sera utilisé uniquement à des fins légales et autorisées
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" form="demoRequestForm" class="btn btn-danger">Envoyer la demande</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Apllication de vente en Ligne -->
        <div class="modal fade" id="casamanceShopModal" tabindex="-1" aria-labelledby="casamanceShopModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content border-success">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="casamanceShopModalLabel">
                            <i class="fas fa-store me-2"></i>Plateforme E-commerce Casamance
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div id="casamanceShopCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner rounded-top">
                                            <div class="carousel-item active">
                                                <img src="{{asset('img/appShop.png')}}" class="d-block w-100" alt="Interface principale">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/cpro.jpg')}}" class="d-block w-100" alt="Catalogue produits">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#casamanceShopCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#casamanceShopCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <div class="card-footer text-center bg-light">
                                        <small>Captures d'écran de l'application</small>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <h6><i class="fas fa-code me-2"></i>Stack Technique :</h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary">Laravel</span>
                                        <span class="badge bg-info">Vue.js</span>
                                        <span class="badge bg-warning text-dark">JavaScript</span>
                                        <span class="badge bg-success">MySQL</span>
                                        <span class="badge bg-secondary">API REST</span>
                                        <span class="badge bg-dark">Wave</span>
                                        <span class="badge bg-danger">Orange Money</span>
                                    </div>
                                </div>
                                <div class="alert alert-success mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-seedling fa-2x me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Impact Social</h6>
                                            <p class="mb-0" style="font-size: 12px">Cette plateforme contribue au développement économique de la Casamance en connectant directement les producteurs aux consommateurs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6><i class="fas fa-bullseye me-2"></i>Objectifs :</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-leaf text-success"></i></span>Valoriser les produits du terroir casamançais</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-holding-usd text-success"></i></span>Créer des débouchés pour les producteurs locaux</li>
                                    <li><span class="fa-li"><i class="fas fa-globe-africa text-success"></i></span>Faciliter l'accès aux produits authentiques</li>
                                </ul>

                                <h6 class="mt-4"><i class="fas fa-star me-2"></i>Fonctionnalités :</h6>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Catalogue produits avec fiches détaillées</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Système de paiement local (Orange Money) et international</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Géolocalisation des producteurs</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Traduction multilingue (Français, Wolof, Diola)</li>
                                    <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Espace producteur avec gestion de stock</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-primary disabled"><i class="fas fa-lock me-2"></i> Code source (privé)</a>
                            <a href="https://boutique-casamance.com/preview" class="btn btn-success" target="_blank">
                                <i class="fas fa-external-link-alt me-2"></i> Préversion
                            </a>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#partnerModal">
                                <i class="fas fa-handshake me-2"></i> Devenir partenaire
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal pour devenir partenaire -->
        <div class="modal fade" id="partnerModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-dark">
                        <h5 class="modal-title">Devenir Partenaire Producteur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="partnerForm">
                            <div class="mb-3">
                                <label class="form-label">Vous êtes :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="partnerType" id="individual" checked>
                                    <label class="form-check-label" for="individual">Producteur individuel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="partnerType" id="cooperative">
                                    <label class="form-check-label" for="cooperative">Coopérative</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="partnerName" class="form-label">Nom/Raison sociale</label>
                                <input type="text" class="form-control" id="partnerName" required>
                            </div>
                            <div class="mb-3">
                                <label for="partnerProducts" class="form-label">Types de produits</label>
                                <select class="form-select" id="partnerProducts" multiple required>
                                    <option value="agriculture">Produits agricoles</option>
                                    <option value="artisanat">Artisanat</option>
                                    <option value="cosmetique">Cosmétiques naturels</option>
                                    <option value="textile">Textile traditionnel</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="partnerContact" class="form-label">Contact</label>
                                <input type="tel" class="form-control" id="partnerContact" required>
                            </div>
                            <div class="mb-3">
                                <label for="partnerLocation" class="form-label">Localisation (ville/village)</label>
                                <input type="text" class="form-control" id="partnerLocation" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-warning" form="partnerForm">Soumettre la demande</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal impact pare-feu -->
        <div class="modal fade" id="firewallModal" tabindex="-1" aria-labelledby="firewallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content border-primary">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="firewallModalLabel">
                            <i class="fas fa-fire me-2"></i>Étude de l'Impact d'un Pare-feu sur la Sécurité Réseau
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div id="firewallCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner rounded">
                                            <div class="carousel-item active">
                                                <img src="{{asset('img/pare-feu.png')}}" class="d-block w-100" alt="Architecture réseau">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/vulne1.jpg')}}" class="d-block w-100" alt="Statistiques de sécurité">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('img/vulne2.jpg')}}" class="d-block w-100" alt="Configuration du pare-feu">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#firewallCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Précédent</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#firewallCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Suivant</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="card border-primary mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-tools me-2"></i>Outils et Technologies
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-dark">pfSense</span>
                                            <span class="badge bg-secondary">Wireshark</span>
                                            <span class="badge bg-info">Nmap</span>
                                            <span class="badge bg-danger">Kali Linux</span>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-success">Python</span>
                                            <span class="badge bg-warning text-dark">GNS3</span>
                                            <span class="badge bg-primary">VMware</span>
                                            <span class="badge bg-dark">SNMP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-bullseye me-2"></i>Objectifs du Projet
                                    </div>
                                    <div class="card-body">
                                        <ul class="fa-ul">
                                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Évaluer l'efficacité des pare-feu contre différentes cyberattaques</li>
                                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Mesurer l'impact sur les performances réseau</li>
                                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Analyser les meilleures pratiques de configuration</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-line me-2"></i>Résultats Clés
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <h6>Réduction des attaques :</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 92%">92%</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6>Impact sur la latence :</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 15%">+15%</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6>Couverture des vulnérabilités :</h6>
                                            <div class="progress mb-2">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%">85%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-file-alt me-2"></i>Documentation
                                    </div>
                                    <div class="card-body">
                                        <div class="d-grid gap-2 d-md-flex">
                                            <a href="#" class="btn btn-outline-primary">
                                                <i class="fas fa-file-pdf me-2"></i>Rapport complet
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary">
                                                <i class="fas fa-file-powerpoint me-2"></i>Présentation
                                            </a>
                                            <a href="#" class="btn btn-outline-dark">
                                                <i class="fas fa-code me-2"></i>Scripts d'analyse
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i> Fermer
                        </button>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-graduation-cap me-2"></i> Voir la soutenance
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <!-- End modals pour mes projets  -->


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

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Succès !',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Fermer'
            });
        </script>
    @endif


</body>
</html>
