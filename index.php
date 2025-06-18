<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LearnSphere - Apprentissage par micro-leçons</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #3bc37d;
      --primary-dark: #2da368;
      --secondary: #5e72e4;
      --accent: #ff6b6b;
      --light: #f8f9fa;
      --dark: #343a40;
      --text: #495057;
      --gradient-start: #3bc37d;
      --gradient-end: #5e72e4;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      color: var(--text);
      overflow-x: hidden;
      background-color: #f8fafc;
    }
    
    /* Navigation */
    .navbar {
      padding: 1.2rem 0;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      background-color: rgba(255,255,255,0.95);
      backdrop-filter: blur(10px);
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      color: var(--primary);
      display: flex;
      align-items: center;
    }
    
    .navbar-brand i {
      margin-right: 10px;
      font-size: 1.5rem;
      color: var(--secondary);
    }
    
    .nav-link {
      font-weight: 500;
      margin: 0 0.8rem;
      color: var(--dark);
      transition: all 0.3s ease;
      position: relative;
    }
    
    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }
    
    .nav-link:hover:after {
      width: 100%;
    }
    
    .nav-link:hover {
      color: var(--primary);
    }
    
    .btn-nav {
      background: var(--primary);
      color: white;
      border-radius: 50px;
      padding: 0.5rem 1.5rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .btn-nav:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(59, 195, 125, 0.4);
    }
    
    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
      color: white;
      padding: 6rem 0 4rem;
      position: relative;
      overflow: hidden;
    }
    
    .hero:before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
      transform: rotate(30deg);
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
    }
    
    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      line-height: 1.2;
    }
    
    .hero p {
      font-size: 1.3rem;
      font-weight: 300;
      margin-bottom: 2rem;
      max-width: 600px;
    }
    
    .hero-img {
      border-radius: 20px;
      box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
      transform: perspective(1000px) rotateY(-5deg);
      transition: all 0.5s ease;
      border: 8px solid white;
    }
    
    .hero-img:hover {
      transform: perspective(1000px) rotateY(0);
    }
    
    .btn-hero {
      background: white;
      color: var(--primary);
      border: none;
      border-radius: 50px;
      padding: 1rem 2.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
    }
    
    .btn-hero i {
      margin-left: 10px;
      transition: transform 0.3s ease;
    }
    
    .btn-hero:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    
    .btn-hero:hover i {
      transform: translateX(5px);
    }
    
    .btn-secondary-hero {
      background: transparent;
      color: white;
      border: 2px solid rgba(255,255,255,0.5);
      margin-left: 1rem;
    }
    
    .btn-secondary-hero:hover {
      background: rgba(255,255,255,0.1);
      border-color: white;
    }
    
    /* Features Section */
    .features {
      padding: 7rem 0;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 4rem;
    }
    
    .section-title h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 1rem;
    }
    
    .section-title p {
      font-size: 1.2rem;
      color: var(--text);
      max-width: 700px;
      margin: 0 auto;
    }
    
    .feature-card {
      background: white;
      border-radius: 16px;
      padding: 2.5rem 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      transition: all 0.4s ease;
      height: 100%;
      position: relative;
      overflow: hidden;
      border: 1px solid #edf2f7;
    }
    
    .feature-card:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 0;
      background: var(--primary);
      transition: height 0.4s ease;
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(59, 195, 125, 0.15);
    }
    
    .feature-card:hover:after {
      height: 100%;
    }
    
    .feature-icon {
      width: 70px;
      height: 70px;
      border-radius: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      background: rgba(59, 195, 125, 0.1);
      color: var(--primary);
      font-size: 1.8rem;
    }
    
    .feature-card h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: var(--dark);
    }
    
    /* How it works */
    .how-it-works {
      padding: 6rem 0;
      background: #f8fafc;
      position: relative;
    }
    
    .step-card {
      position: relative;
      padding: 2rem;
      background: white;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      margin-bottom: 3rem;
      border: 1px solid #edf2f7;
    }
    
    .step-number {
      position: absolute;
      top: -20px;
      left: 30px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--primary);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: 700;
      box-shadow: 0 5px 15px rgba(59, 195, 125, 0.4);
    }
    
    /* Skills Section */
    .skills {
      padding: 7rem 0;
    }
    
    .skill-badge {
      display: inline-block;
      background: rgba(94, 114, 228, 0.1);
      color: var(--secondary);
      border-radius: 50px;
      padding: 0.7rem 1.5rem;
      margin: 0.5rem;
      font-weight: 500;
      transition: all 0.3s ease;
      cursor: pointer;
      border: 1px solid rgba(94, 114, 228, 0.2);
    }
    
    .skill-badge:hover {
      background: var(--secondary);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(94, 114, 228, 0.3);
    }
    
    /* Testimonials */
    .testimonials {
      padding: 7rem 0;
      background: linear-gradient(to right bottom, #f8fafc, #edf2f7);
    }
    
    .testimonial-card {
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      position: relative;
      margin: 1rem;
      height: 100%;
    }
    
    .testimonial-card:before {
      content: '"';
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 5rem;
      color: rgba(59, 195, 125, 0.1);
      font-family: Georgia, serif;
      line-height: 1;
    }
    
    .testimonial-content {
      margin-top: 2rem;
      font-style: italic;
      color: var(--text);
      position: relative;
      z-index: 2;
    }
    
    .client {
      display: flex;
      align-items: center;
      margin-top: 1.5rem;
    }
    
    .client-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
    }
    
    .client-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .client-info h4 {
      margin-bottom: 0;
      color: var(--dark);
    }
    
    .client-info p {
      color: var(--text);
      font-size: 0.9rem;
      margin-bottom: 0;
    }
    
    /* CTA Section */
    .cta {
      padding: 7rem 0;
      background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .cta:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
    
    .cta h2 {
      font-size: 2.8rem;
      margin-bottom: 1.5rem;
    }
    
    .cta p {
      font-size: 1.3rem;
      max-width: 700px;
      margin: 0 auto 2.5rem;
      font-weight: 300;
    }
    
    /* Footer */
    .footer {
      background: var(--dark);
      color: rgba(255,255,255,0.7);
      padding: 5rem 0 2rem;
    }
    
    .footer h5 {
      color: white;
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
    }
    
    .footer-links a {
      display: block;
      color: rgba(255,255,255,0.7);
      margin-bottom: 0.8rem;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .footer-links a:hover {
      color: white;
      transform: translateX(5px);
    }
    
    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      color: white;
      margin-right: 10px;
      transition: all 0.3s ease;
    }
    
    .social-links a:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }
    
    .copyright {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 2rem;
      margin-top: 3rem;
      text-align: center;
      font-size: 0.9rem;
    }
    
    /* Animations */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    
    .floating {
      animation: float 6s ease-in-out infinite;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
      .hero h1 {
        font-size: 2.8rem;
      }
      
      .hero p {
        font-size: 1.1rem;
      }
    }
    
    @media (max-width: 768px) {
      .hero {
        padding: 4rem 0 2rem;
      }
      
      .hero h1 {
        font-size: 2.3rem;
      }
      
      .section-title h2 {
        font-size: 2rem;
      }
      
      .cta h2 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-graduation-cap"></i>
        LearnSphere
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-auto">
          <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Fonctionnalités</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Compétences</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tarifs</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        </ul>
        <div>
          <a href="#" class="btn btn-nav">Se connecter</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 hero-content">
          <h1>Apprenez les compétences essentielles en 5 minutes par jour</h1>
          <p>Micro-learning innovant pour développer vos compétences personnelles et professionnelles à votre rythme.</p>
          <div class="d-flex flex-wrap mt-4">
            <a href="#" class="btn btn-hero">Commencer gratuitement <i class="fas fa-arrow-right"></i></a>
            <a href="#" class="btn btn-secondary-hero">Voir la démo</a>
          </div>
        </div>
        <div class="col-lg-6 text-center mt-5 mt-lg-0">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1925" alt="Apprentissage mobile" class="hero-img img-fluid floating">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features">
    <div class="container">
      <div class="section-title">
        <h2>Notre approche révolutionnaire</h2>
        <p>LearnSphere transforme votre façon d'apprendre avec des micro-leçons conçues pour s'intégrer à votre vie quotidienne.</p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-stopwatch"></i>
            </div>
            <h3>Leçons de 5 minutes</h3>
            <p>Des contenus condensés et ultra-efficaces que vous pouvez suivre n'importe où, n'importe quand.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-brain"></i>
            </div>
            <h3>Adaptatif et intelligent</h3>
            <p>Notre IA personnalise votre parcours d'apprentissage en fonction de vos progrès et objectifs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-gamepad"></i>
            </div>
            <h3>Apprentissage ludique</h3>
            <p>Quiz interactifs, défis quotidiens et système de récompenses pour rendre l'apprentissage amusant.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Disponible partout</h3>
            <p>Accédez à vos leçons sur mobile, tablette ou ordinateur. Synchronisation parfaite entre vos appareils.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Suivi des progrès</h3>
            <p>Visualisez votre évolution avec des tableaux de bord clairs et des rapports détaillés.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Communauté apprenante</h3>
            <p>Partagez vos réussites, échangez avec d'autres apprenants et participez à des défis communs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="how-it-works">
    <div class="container">
      <div class="section-title">
        <h2>Comment ça fonctionne ?</h2>
        <p>Trois étapes simples pour transformer votre quotidien grâce au micro-learning</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Choisissez votre objectif</h3>
            <p>Sélectionnez parmi des centaines de compétences pratiques ou laissez notre IA vous recommander un parcours personnalisé.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Apprenez par micro-leçons</h3>
            <p>Recevez chaque jour une leçon de 5 minutes directement sur votre appareil. Vidéos, quiz, infographies - des formats variés pour tous les styles d'apprentissage.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Appliquez et progressez</h3>
            <p>Mettez en pratique immédiatement ce que vous apprenez. Suivez vos progrès et célébrez vos réussites avec notre système de badges et récompenses.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="skills">
    <div class="container">
      <div class="section-title">
        <h2>Découvrez nos compétences</h2>
        <p>Des centaines de micro-compétences pour améliorer votre vie personnelle et professionnelle</p>
      </div>
      <div class="text-center">
        <div class="skill-badge">Gestion de budget</div>
        <div class="skill-badge">Communication efficace</div>
        <div class="skill-badge">Nutrition saine</div>
        <div class="skill-badge">Gestion du stress</div>
        <div class="skill-badge">Lecture de contrats</div>
        <div class="skill-badge">Productivité</div>
        <div class="skill-badge">Leadership</div>
        <div class="skill-badge">Cuisine rapide</div>
        <div class="skill-badge">Développement personnel</div>
        <div class="skill-badge">Écologie au quotidien</div>
        <div class="skill-badge">Négociation</div>
        <div class="skill-badge">Prise de parole</div>
        <div class="skill-badge">Gestion du temps</div>
        <div class="skill-badge">Décryptage médias</div>
        <div class="skill-badge">Premiers secours</div>
      </div>
      <div class="text-center mt-5">
        <a href="#" class="btn btn-hero">Explorer toutes les compétences</a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <div class="section-title">
        <h2>Ce que disent nos apprenants</h2>
        <p>Découvrez comment LearnSphere transforme le quotidien de milliers de personnes</p>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>"Grâce aux micro-leçons de LearnSphere, j'ai enfin réussi à prendre de bonnes habitudes financières. En seulement 5 minutes par jour, j'ai appris à gérer mon budget comme un pro!"</p>
            </div>
            <div class="client">
              <div class="client-avatar">
                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sophie Martin">
              </div>
              <div class="client-info">
                <h4>Sophie Martin</h4>
                <p>Comptable, 28 ans</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>"Je n'avais jamais le temps pour me former. Avec LearnSphere, j'apprends pendant mes trajets en métro. En 3 mois, j'ai développé des compétences qui ont boosté ma carrière!"</p>
            </div>
            <div class="client">
              <div class="client-avatar">
                <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Thomas Dubois">
              </div>
              <div class="client-info">
                <h4>Thomas Dubois</h4>
                <p>Chef de projet, 35 ans</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>"Les leçons courtes et ludiques ont changé ma vision de l'apprentissage. Je pensais être trop vieux pour apprendre, mais LearnSphere a prouvé le contraire!"</p>
            </div>
            <div class="client">
              <div class="client-avatar">
                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Marie Lambert">
              </div>
              <div class="client-info">
                <h4>Marie Lambert</h4>
                <p>Retraitée, 62 ans</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <div class="container">
      <h2>Prêt à transformer votre quotidien ?</h2>
      <p>Rejoignez plus de 250 000 apprenants qui développent chaque jour de nouvelles compétences avec LearnSphere.</p>
      <div class="d-flex justify-content-center flex-wrap">
        <a href="#" class="btn btn-hero me-3 mb-3">Commencer gratuitement</a>
        <a href="#" class="btn btn-secondary-hero mb-3">Voir nos formules</a>
      </div>
      <div class="mt-5">
        <p><small>7 jours d'essai gratuit - Aucune carte de crédit requise</small></p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h5>LearnSphere</h5>
          <p>Révolutionnez votre façon d'apprendre avec nos micro-leçons quotidiennes. Développez des compétences pratiques en seulement 5 minutes par jour.</p>
          <div class="social-links mt-4">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
          <h5>Produit</h5>
          <div class="footer-links">
            <a href="#">Fonctionnalités</a>
            <a href="#">Tarifs</a>
            <a href="#">Applications</a>
            <a href="#">Nouveautés</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
          <h5>Ressources</h5>
          <div class="footer-links">
            <a href="#">Blog</a>
            <a href="#">Tutoriels</a>
            <a href="#">Centre d'aide</a>
            <a href="#">Support</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <h5>Entreprise</h5>
          <div class="footer-links">
            <a href="#">À propos</a>
            <a href="#">Carrières</a>
            <a href="#">Contact</a>
            <a href="#">Partenaires</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <h5>Légal</h5>
          <div class="footer-links">
            <a href="#">Conditions</a>
            <a href="#">Confidentialité</a>
            <a href="#">Cookies</a>
            <a href="#">Mentions légales</a>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>© 2025 LearnSphere. Tous droits réservés.<br>
        Conçu avec ❤️ pour transformer l'apprentissage.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>