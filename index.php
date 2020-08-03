<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelix</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="logo">
                    <img src="img/logo.png">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
                </ul>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">À Propos</a></li>
                </ul>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">Offres</a></li>
                </ul>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">Actus</a></li>
                </ul>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>    
    <main>
        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">Découvrez</h1>
                    <h2 class="subtitle">Nos hôtels de luxe</h2>
                </div>
                <a href="#" class="btn btn-gradient">Explorer
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>
        
        <section class="booking">
            <div class="container">
                <form action="" class="book-form">
                    <div class="input-group">
                        <label for="destination" class="input-label">Destination</label>
                        <input type="text" class="input" id="destination">
                    </div>
                    <div class="input-group">
                        <label for="arrivee" class="input-label">Date d'arrivée</label>
                        <input type="date" class="input" id="arrivee">
                    </div> 
                    <div class="input-group">
                        <label for="depart" class="input-label">Date de départ</label>
                        <input type="date" class="input" id="depart">
                    </div> 
                    <div class="input-group">
                        <label for="adultes" class="input-label">Adultes</label>
                        <select class="options" id='adultes'>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="enfants" class="input-label">Enfants</label>
                        <select class="options" id='enfants'>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn form-btn btn-purple">Rechercher
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
            </div>  
        </section>
        
        
        <section class="hotels">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Explorer</span>
                    <span class="sub-heading">Nos magnifiques hôtels</span>
                </h5>
                <div class="grid">
                    <div class="grid-item featured-hotels">
                        <img src="img/hotel_astro_resort.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Astro Hôtel</h5>
                        <span class="hotel-price">À partir de 200€/nuit</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Réserver
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                    
                   <div class="grid-item featured-hotels">
                       <img src="img/hotel_the_enchanted_garden.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Les Jardins Enchantés</h5>
                        <span class="hotel-price">À partir de 300€/nuit</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Réserver
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                    
                   <div class="grid-item featured-hotels">
                       <img src="img/hotel_the_paradise.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Le Paradis</h5>
                        <span class="hotel-price">À partir de 350€/nuit</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Réserver
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="offer">
            <div class="container">
                <div class="offer-content">
                    <div class="discount">
                        - 40%
                    </div>
                    <h5 class="hotel-name">Le Paradis</h5>
                     <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="#" class="btn btn-gradient">Profiter de l'offre
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                </div>
            </div>
        </section>
        <section class="rooms">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Luxueuses</span>
                    <span class="sub-heading">Chambres abordables</span>
                </h5>
                <div class="grid rooms-grid">
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/room_1.jpg">
                            <h5 class="room-name">Astro Hôtel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">200€ <span class="per-night">Par nuit</span></span>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn rooms-btn">Réserver &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/room_2.jpg">
                            <h5 class="room-name">Les Jardins Enchantés</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">300€ <span class="per-night">Par nuit</span></span>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn rooms-btn">Réserver &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/room_3.jpg">
                            <h5 class="room-name">Le Paradis</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">350€ <span class="per-night">Par nuit</span></span>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn rooms-btn">Réserver &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/room_4.jpg">
                            <h5 class="room-name">Les 4 Saisons</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">250€ <span class="per-night">Par nuit</span></span>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn rooms-btn">Réserver &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/room_5.jpg">
                            <h5 class="room-name">Grand Hôtel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">300€ <span class="per-night">Par nuit</span></span>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn rooms-btn">Réserver &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/room_6.jpg">
                            <h5 class="room-name">Le Palace</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">250€ <span class="per-night">Par nuit</span></span>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn rooms-btn">Réserver &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Contact</span>
                    <span class="sub-heading">Entrer en contact avec nous</span>
                </h5>
                <div class="contact-content">
                    <div class="traveler-wrap">
                        <img src="img/traveler.png">
                    </div>
                    <form action="" class="form contact-form">
                        <div class="input-group-wrap">
                            <div class="input-group">
                                <input type="text" class="input" placeholder="Nom">
                                <span class="bar"></span>
                            </div>
                            <div class="input-group">
                                <input type="email" class="input" placeholder="E-mail">
                                <span class="bar"></span>
                            </div>
                        </div>
                            <div class="input-group">
                                <input type="text" class="input" placeholder="Objet">
                                <span class="bar"></span>
                            </div>
                            <div class="input-group">
                                <textarea class="input" cols="30" rows="8" placeholder="Votre message"></textarea>
                                <span class="bar"></span>
                            </div>
                        <button type="submit" class="btn form-btn btn-purple">Envoyer 
                            <span class="dots" <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <a href="index.php" class="logo">
                        <img class="logo-image" src="img/logo.png">
                    </a>
                    <div class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
                <div class="social-media-wrap">
                    <h4 class="footer-heading">Suivez-nous !</h4>
                    <div class="social-media">
                        <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    
    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
