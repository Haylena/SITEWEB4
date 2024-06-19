<?php

include "menu_haut.php";


?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cinema WEB SITE</title>
        <link rel="stylesheet" href="stylecinema.css">
        <link rel="stylesheet" href="view.css">
        <!--Box Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" >
    </head>
<body>
    <!--Navbar-->
    
    <!--Catalogue-->

    <section class="atm-movie">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <a href="aquamanlien.html"><img src="IMG-20231221-WA0014.jpg" style="width:100%"></a>
              <div class="text">
                <div class="catalogue-text">
                   <span>Warner Bros. Pictures</span>
                    <h1>AQUAMAN<br>Et le Royaume perdu</h1>
                    <a href="aquamanlien.html" class="btn">Réserver Maintenant</a>
                    <a href="aquamanlien.html" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                 </div>
              </div>
            </div>
            
            <div class="mySlides fade">
            <a href="priscillia"><img src="IMG-20231221-WA0018.jpg" style="width:100%"></a>
              <div class="text">
                <div class="catalogue-text">
                    <span>Warner Bros. Pictures</span>
                    <h1>Priscilla<br></h1>
                    <a href="priscillalien.html" class="btn">Réserver Maintenant</a>
                    <a href="priscillalien.html" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                 </div>
              </div>
            </div>
            
            <div class="mySlides fade">
            <a href="hungergameslien.html"></a><img src="IMG-20231221-WA0017.jpg" style="width:100%">
              <div class="text">
                <div class="catalogue-text">
                    <span>Warner Bros. Pictures</span>
                    <h1>THE HUNGER GAMES<br></h1>
                    <a href="hungergameslien.html" class="btn">Réserver Maintenant</a>
                    <a href="hungergameslien.html" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                 </div>
              </div>
            </div>

            <div class="mySlides fade">
                <a href="kungfupandalien.html"></a> <img src="IMG-20231221-WA0016.jpg" style="width:100%">
                <div class="text">
                    <div class="catalogue-text">
                        <span>Warner Bros. Pictures</span>
                        <h1>KUNG FU PANDA<br></h1>
                        <a href="hungergames.html" class="btn">Réserver Maintenant</a>
                        <a href="hungergames.html" class="play">
                            <i class='bx bx-play' ></i>
                        </a>
                     </div>
                </div>
            </div>

            <div class="mySlides fade">
                <a href="wishlien.html"></a>  <img src="IMG-20231221-WA0015.jpg" style="width:100%">
                <div class="text">
                    <div class="catalogue-text">
                        <span>Warner Bros. Pictures</span>
                        <h1>WISH<br>Asha et la Bonne Étoile</h1>
                        <a href="wishlien.html" class="btn">Réserver Maintenant</a>
                        <a href="wishlien.html" class="play">
                            <i class='bx bx-play' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <a href="wonkalien.html"></a>   <img src="IMG-20231221-WA0020.jpg" style="width:100%">
                <div class="text">
                    <div class="catalogue-text">
                        <span>Warner Bros. Pictures</span>
                        <h1>Wonka<br>Et le Royaume perdu</h1>
                        <a href="wonkalien.html" class="btn">Réserver Maintenant</a>
                        <a href="wonkalien.html" class="play">
                            <i class='bx bx-play' ></i>
                        </a>
                    </div>
                </div>
            </div>
            
            </div>

            <a class="prev" onclick="prevSlide()">❮</a>
            <a class="next" onclick="showSlides()">❯</a>

            <br>

            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            
    </section>

    <br>

    <section class="available">

        <h2> Disponible cette semaine</h2>    
        <hr>
        <br>
        <div class="row">

            <!-- List des films disponibles -->
            <div class="thumb-box">
                <a href="">
                <img src="IMG-20231221-WA0008.jpg" alt="Kung-fu Panda">
                <span class="overlay-box">
                <span class="meta">120 min | Comédie/Enfant</span>
                <span class="main-title">Kung-Fu Panda</span>
                <span class="description">
                    Passionné, costaud et quelque peu maladroit, Po est sans conteste le plus grand fan de kung fu ...</span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="">
                <img src="IMG-20231221-WA0009.jpg" alt="Aquaman">
                <span class="overlay-box">
                <span class="meta">140 min | Action/Cinéma de fantasy</span>
                <span class="main-title">Aquaman</span>
                <span class="description">
                   Suivez les aventures entre terre et mer du roi des océans Arthur Curry!</span>
                </a>
            </div>


            <div class="thumb-box">
                <a href="wonkalien.html">
                <img src="IMG-20231221-WA0010.jpg" alt="Wonka">
                <span class="overlay-box">
                <span class="meta"> 120 min | Cinéma de fantasy/Musical </span>
                <span class="main-title">Wonka</span>
                <span class="description">
                   Qui est le mystérieux Monsieur Wonka et quel est le secret du succès de sa célèbre fabrique? </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="">
                <img src="IMG-20231221-WA0011.jpg" alt="WISH">
                <span class="overlay-box">
                <span class="meta">  95 min | Cinéma de fantasy/Musical  </span>
                <span class="main-title"> Wish: Asha et la Bonne Étoile </span>
                <span class="description">
                   Auriez-vous envie de découvrir un compte de fée oû les souhaits deviennent réalité? </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="">
                <img src="IMG-20231221-WA0012.jpg" alt="Priscilla">
                <span class="overlay-box">
                <span class="meta">  110 min | Romance/Musical  </span>
                <span class="main-title">Priscilla </span>
                <span class="description">
                  Suivez l'histoire de la jeune Priscilla et son ascenssion à Hollywood auprès d'Elvis Presley!  </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="">
                <img src="IMG-20231221-WA0013.jpg" alt="The Hunger Games">
                <span class="overlay-box">
                <span class="meta">  158 min | Action/Aventure </span>
                <span class="main-title">The Hunger Games </span>
                <span class="description">
                    Qui est Coriolanus Snow et que prépare-t-il dans les contrées des Hunger Games?</span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="">
                <img src="IMG-20231221-WA0031.jpg" alt="Napoléon">
                <span class="overlay-box">
                <span class="meta">  198 min | Guerre </span>
                <span class="main-title"> Napoléon </span>
                <span class="description">
                   Napoléon, un mythe , une légende, un héro mais avez-vous jamais entendu parler de  Napoléon, l'homme? </span>
                </a>
            </div>

  

        

        </div>
          
    </section>
    <!--Coming-->
    <section class="coming" id="coming">
        <h2 class="heading">Prochainement</h2>
        <!--Coming Container-->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!--Box 1-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0003.jpg" alt=""> 
                        </div>
                        <h3> Dune, deuxième partie </h3>
                        <span> 195min | Science Fiction/Aventure </span>
                    </div>
                <!--Box 2-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0005.jpg" alt=""> 
                        </div>
                        <h3> Gladiateur 2 </h3>
                        <span> 155 min | Action/Aventure</span>
                    </div>
                <!--Box 3-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0007.jpg" alt=""> 
                        </div>
                        <h3> Le Seigneur des Anneaux: La Guerre des Rohirrim </h3>
                        <span> 120 min | Cinéma de fantasy/Action</span>
                    </div>
                <!--Box 4-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0008.jpg" alt=""> 
                        </div>
                        <h3> Deadpool 3</h3>
                        <span> 170 min | Action/Comdéie </span>
                    </div>
                <!--Box 5-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0012.jpg" alt=""> 
                        </div>
                        <h3> Joker: Folie à deux </h3>
                        <span> 140 min | Musical/Crime </span>
                    </div>
                <!--Box 6-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0009.jpg" alt=""> 
                        </div>
                        <h3> La Planète des Singes: Le Nouveau Royaume </h3>
                        <span> 135min | Action/Science Fiction</span>
                    </div>
                <!--Box 7-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0010.jpg" alt=""> 
                        </div>
                        <h3> Furiosa </h3>
                        <span> 132min | Action/Thriller</span>
                    </div>
                <!--Box 8-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0011.jpg" alt=""> 
                        </div>
                        <h3> Madame WEB </h3>
                        <span> 155min | Action/Science Fiction</span>
                    </div>
                <!--Box 9-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src="IMG-20231223-WA0013.jpg" alt=""> 
                        </div>
                        <h3> Vice-Versa </h3>
                        <span> 95min | Aventure/Comédie</span>
                    </div>
                <!--Box 10-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                        <img src="IMG-20231223-WA0014.jpg" alt=""> 
                        </div>
                        <h3> Beetlejuice 2</h3>
                        <span> 92min | Horreur/Comédie</span>
                    </div>
            </div>
        </div>
    

</section>
<!--Newsletter-->
<section class="newsletter" id="newsletter">
    <h2>S'inscrire pour recevoir <br> la Newsletter</h2>
    <form action="traitement_newsletter.php" method="post">
        <input type="email" class="email" placeholder="Renseigner l'email..." required>
        <input type="submit" value="s'abonner" class="btn">
    </form>
</section>
<!--Footer-->
    <?php
    include "footer.php";
    ?>
<!--Copyright-->
<div class="copyright">
    <p>&#169;  DigiTech All Rights reserved</p>
</div>



</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
//    let slideIndex = 0;
//    showSlides(slideIndex);
    
    
    //Permet de défiler les slides avec des boutons
    var timeOut = 1000;
        var slideIndex = 0;
        var autoOn = true;

        autoSlides();

        function autoSlides() {
            timeOut = timeOut - 20;

            if (autoOn == true && timeOut < 0) {
                showSlides();
            }
            setTimeout(autoSlides, 20);
        }

        function prevSlide() {

            timeOut = 3000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex--;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            if (slideIndex == 0) {
                slideIndex = 3
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function showSlides() {

            timeOut = 3000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

    //Code JavaScript ici// 
    let header = document.querySelector('header');
    let catalogue = document.querySelector('#catalogue-icon');
    let navbar = document.querySelector('.navbar');

    window.addEventListener('scroll',()=> {
    header.classList.toggle('shadow', window.scrollY > 0);
    });

    catalogue.onclick = () => {
    catalogue.classList.toggle('bx-x');
    navbar.classList.toggle('active');
    }
    window.onscroll = () => {
    catalogue.classList.remove('bx-x');
    navbar.classList.remove('active');
    }
</script>

</html>
