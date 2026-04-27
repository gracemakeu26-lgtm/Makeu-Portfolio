<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Grâce</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💼</text></svg>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Limelight&family=Lobster&family=Playwrite+NZ+Guides&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#myNavbar">

    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-briefcase-fill"></i> Grace Makeu TCHOMGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#about">Moi</a>
                    <a class="nav-link" href="#skills">Compétences</a>
                    <a class="nav-link" href="#experience">Expérience</a>
                    <a class="nav-link" href="#education">Education</a>
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                    <a class="nav-link" href="#recommendation">Réalisations</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 pofile-picture">
            <img src="image/moi.jpg" alt="Grâce Makeu" class="rounded-circle">
        </div>
        <div class="heading">
            <h1>Hello, c'est moi Grâce</h1>
            <h3>Développeur Web Passionnée</h3>
            <p class="lead">Étudiante en informatique à l'Université de Yaoundé 1, je suis une développeuse web en formation passionnée par la création d'expériences utilisateur innovantes et responsives. Spécialisée en HTML, CSS, JavaScript et Bootstrap.</p>
            <div class="mt-4">
                <a href="/docs/cv.pdf" class="button1"><i class="bi bi-download"></i> Télécharger CV</a>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="divider"></div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label><i class="bi bi-lightning-fill"></i> JavaScript</label>
                            <span class="badge bg-primary">50%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label><i class="bi bi-puzzle-fill"></i> jQuery</label>
                            <span class="badge bg-primary">50%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label><i class="bi bi-diagram-3-fill"></i> Bootstrap</label>
                            <span class="badge bg-primary">80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label><i class="bi bi-bezier"></i> React</label>
                            <span class="badge bg-primary">50%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label><i class="bi bi-filetype-html"></i> HTML5</label>
                            <span class="badge bg-primary">90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label><i class="bi bi-filetype-css"></i> CSS3</label>
                            <span class="badge bg-primary">85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
    <div class="container">
        <div class="divider white"></div>
        <div class="heading">
            <h2>Expérience professionnelle</h2>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><span class="bi-briefcase-fill"></span></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>PROJET SCOLAIRE</h3>
                            <h4>Développement Web</h4>
                            <p class="text-muted"><span class="bi-clock-fill"></span> 2025 - 2026</p>
                        </div>
                        <div class="timeline-body">
                            <p>Création d'un portfolio personnel responsive</p>
                            <p>Intégration de Bootstrap pour le design et la mise en page</p>
                            <p>Développement d'un formulaire de contact avec validation</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </section>

    <section id="education">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Education</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="education-block">
                        <h5>2023-2026</h5>
                        <span class="bi bi-award-fill"></span>
                        <h3>Université de Yaoundé 1</h3>
                        <h4>Diplôme licence en informatique</h4>
                        <div class="divider"></div>
                        <p>Génie logiciel</p>
                        <p>Système d'information</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="education-block">
                        <h5>2025</h5>
                        <span class="bi bi-award-fill"></span>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation Développeur Web</h4>
                        <div class="divider"></div>
                        <p>HTML, CSS, Javascript</p>
                        <p>Responsive Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="divider white"></div>
            <div class="heading">
                <h2>Portfolio</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 overflow-hidden transition" style="border-radius: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <a href="https://github.com/gracemakeu26-lgtm" target="_blank" class="text-decoration-none text-dark position-relative" style="display: block; height: 100%;">
                            <img src="./image/github.png" class="card-img-top" alt="GitHub Profile" style="object-fit: cover; height: 250px; filter: brightness(0.95);">
                            <div class="card-body text-center" style="background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);">
                                <h5 class="card-title fw-bold"><i class="bi bi-github text-dark"></i> GitHub</h5>
                                <p class="card-text text-muted small">Consultez mes projets et contributions</p>
                                <span class="badge bg-dark">Vérifier</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 overflow-hidden transition" style="border-radius: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <a href="https://linkedin.com/in/tchomgo-grace-makeu" rel="noopener noreferrer" target="_blank" class="text-decoration-none text-dark position-relative" style="display: block; height: 100%;">
                            <img src="./image/linkedin.png" class="card-img-top" alt="LinkedIn Profile" style="object-fit: cover; height: 250px; filter: brightness(0.95);">
                            <div class="card-body text-center" style="background: linear-gradient(135deg, #e7f3ff 0%, #ffffff 100%);">
                                <h5 class="card-title fw-bold"><i class="bi bi-linkedin text-primary"></i> LinkedIn</h5>
                                <p class="card-text text-muted small">Connectez-vous avec moi</p>
                                <span class="badge bg-primary">Me suivre</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 overflow-hidden transition" style="border-radius: 15px; transition: transform 0.3s ease, background: white; box-shadow 0.3s ease;">
                        <a href="mailto:gracemakeu26@gmail.com" class="text-decoration-none text-dark position-relative" style="display: block; height: 100%;">
                            <img src="./image/mail.png" class="card-img-top" alt="Email" style="object-fit: cover; height: 250px; filter: brightness(0.85); background: white;">
                            <div class="card-body text-center" style="background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%); position: relative;">
                                <h5 class="card-title fw-bold"><i class="bi bi-envelope-at text-danger"></i> Email</h5>
                                <p class="card-text text-muted small">Envoyez-moi un message</p>
                                <span class="badge bg-danger">Contacter</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="recommendation">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Réalisations</h2>
            </div>
            <div id="myCaroussel" class="carousel carousel-dark slide text-center" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCaroussel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCaroussel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCaroussel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#myCaroussel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#myCaroussel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h3><i class="bi bi-globe"></i> Site Portfolio Personnel</h3>
                        <p>Portfolio responsive développé avec HTML, CSS, Bootstrap et JavaScript</p>
                        <h4>Design moderne et intuitif</h4>
                    </div>
                    <div class="carousel-item">
                        <h3><i class="bi bi-chat-dots-fill"></i> Formulaire de Contact</h3>
                        <p>Formulaire interactif avec validation des données en temps réel</p>
                        <h4>Expérience utilisateur optimisée</h4>
                    </div>
                    <div class="carousel-item">
                        <h3><i class="bi bi-phone"></i> Design Responsive</h3>
                        <p>Adaptation complète à tous les appareils (mobile, tablette, desktop)</p>
                        <h4>Compatible avec tous les navigateurs</h4>
                    </div>
                    <div class="carousel-item">
                        <h3><i class="bi bi-joystick"></i> Jeux Serpent</h3>
                        <p>Jeu interactif développé en JavaScript avec HTML5 Canvas</p>
                        <h4>Gameplay fluide et fonctionnalités avancées</h4>
                    </div>
                    <div class="carousel-item">
                        <h3><i class="bi bi-star-fill"></i> Top 5 des Meilleures Actrices</h3>
                        <p>Application web affichant les meilleures actrices avec interface élégante</p>
                        <h4>Design moderne et contenu dynamique</h4>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCaroussel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCaroussel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contact</h2>
            </div>
            <form id="contact-form" method="post" action="php/contact.php" role="form" class="needs-validation">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label for="firstname" class="form-label"><i class="bi bi-person-fill"></i> Prénom <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" required>
                        <p class="comments small text-danger"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label"><i class="bi bi-person-fill"></i> Nom <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" required>
                        <p class="comments small text-danger"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i> Email <span class="blue">*</span></label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" required>
                        <p class="comments small text-danger"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label"><i class="bi bi-telephone-fill"></i> Téléphone</label>
                        <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                        <p class="comments small text-danger"></p>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label"><i class="bi bi-chat-left-dots-fill"></i> Message <span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="5" required></textarea>
                        <p class="comments small text-danger"></p>
                    </div>
                    <div class="col-12">
                        <p class="text-muted small"><i class="bi bi-info-circle-fill"></i> <strong>* Ces informations sont requises.</strong></p>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="button1"><i class="bi bi-send-fill"></i> Envoyer le message</button>
                    </div>    
                </div>
            </form>
        </div>
    </section>

    <footer class="bg-dark text-center text-white pt-5 pb-4">
        <div class="container">
            <div>
                <a href="#about"><span><i class="bi bi-chevron-up"></i></span></a>
            </div>
            <div class="row pb-3">
                <div class="col-md-4">
                    <h5><i class="bi bi-telephone-fill"></i> Contact Direct</h5>
                    <p>
                        <i class="bi bi-phone"></i> <a href="tel:+237651406356" class="text-white text-decoration-none">+237 651 40 63 56</a><br>
                        <i class="bi bi-envelope"></i> <a href="mailto:gracemakeu26@gmail.com" class="text-white text-decoration-none">gracemakeu26@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h5><i class="bi bi-share"></i> Suivez-moi</h5>
                    <a href="https://www.linkedin.com/in/tchomgo-grace-makeu" rel="noopener noreferrer" target="_blank" class="text-white mx-2" title="LinkedIn"><i class="bi bi-linkedin fs-5"></i></a>
                    <a href="https://github.com/gracemakeu26-lgtm" target="_blank" rel="noopener noreferrer" class="text-white mx-2" title="GitHub"><i class="bi bi-github fs-5"></i></a>
                    <a href="mailto:gracemakeu26@gmail.com" class="text-white mx-2" title="Email"><i class="bi bi-envelope fs-5"></i></a>
                </div>
                <div class="col-md-4">
                    <h5><i class="bi bi-info-circle-fill"></i> À propos</h5>
                    <p class="small">Développeuse Web passionnée basée au Cameroun. Toujours disponible pour discuter de nouveaux projets!</p>
                </div>
            </div>
            <hr class="bg-light">
            <div class="pt-3 text-center">
                <p>&copy; 2026  - Tous droits réservés</p>
            </div>
        </div>
    </footer>
</body>
</html>