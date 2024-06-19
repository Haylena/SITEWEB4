<?php


$bdd = new PDO('mysql:host=localhost;dbname=messages_prives;charset=utf8', 'root', '');
include 'menu_haut.php';
?>


           






<!--
           
            
            
            <li><a href="connexion.php">Connexion</a></li>
 -->           
            
        
    

    <section id="accueil">
        <div class="left">
            <h4>Votre nouveau cin�ma</h4>
            <h1>Capteur Cin�wave</h1>
            <p>texte</p>
            <button><a href="C:\Users\samy\OneDrive\Bureau\Nouveau dossier\htdocs\APP\forum\connexion.php">essayer mtn ?!</a></button>
        </div>
        <div class="right">
            <img src="image/img1.jpg">
        </div>
    </section>

    

    <section id="Client">
        <h4 class="mini_title">Cataloque � la une</h4>
        <h2 class="title">Catalogue</h2>
        <div class="dishes">
            <div class="dish">
                <img src="image/poster-film.jpg">
                <p>xxx</p>
                
            </div>
            <div class="dish">
                <img src="image/poster-film.jpg">
                <p>xxx</p>
                <h2>evoluation</h2>
                <a href="catalogue\fwdimagesiteloriane\indexcinema.php">aper�us perf</a>
            </div>
            <div class="dish">
                <img src="image/poster-film.jpg">
                <p>xxx</p>
                <h2>evoluation</h2>
                <a href="indexcinema.html">Recommandation</a>
            </div>
            

        </div>
    </section>



    <section id="#about_us">
        <h4 class="mini_title"> Sui nous somme? </h4>
        <h2 class="title">Pourquoi notre visons du cin�ma est sp�cial</h2>
        <div class="about">
            <div class="left">
                <img src="image/img1.jpg">
            </div>
            <div class="right">
                <h3>Ecrire</h3>
                <p>ddd</p>
                
                <button><a href="#">PLus?</a></button>
            </div>
        </div>
    </section>


    
    <section class="comment_section">
        <h4 class="mini_title">Comments</h4>
        <h2 class="title"> What People this about us</h2>
        <div class="comments">
            <div class="comment">
                <div>
                    <img src="images/img1.png">
                    <h4>Smith Johnson</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, sequi repellat. Velit, temporibus! Repellat velit delectus vero suscipit ut, consequatur atque molestias obcaecati tenetur dignissimos! Eius eos reprehenderit aspernatur molestiae?</p>
            </div>
            <div class="comment">
                <div>
                    <img src="images/img1.png">
                    <h4>Smith Johnson</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, sequi repellat. Velit, temporibus! Repellat velit delectus vero suscipit ut, consequatur atque molestias obcaecati tenetur dignissimos! Eius eos reprehenderit aspernatur molestiae?</p>
            </div>
            <div class="comment">
                <div>
                    <img src="images/img1.png">
                    <h4>Smith Johnson</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, sequi repellat. Velit, temporibus! Repellat velit delectus vero suscipit ut, consequatur atque molestias obcaecati tenetur dignissimos! Eius eos reprehenderit aspernatur molestiae?</p>
            </div>
            <div>
                <br><br >
                <button><a href="forum.php">En parler sur le Forum</a></button>
                </div>
            

        </div>
    </section>

 <!--
   
    <section id="reservation">
        <h4 class="mini_title">Connexion</h4>
        <h2 class="title">Connexion</h2>
        <form action="">
            <label> Your Name</label>
            <input type="text">
            <label> Your Email</label>
            <input type="email">
            <label> Your Number</label>
            <input type="text">
            
            <input type="submit" value="Connexion">

        </form>
    </section>

-->
    
    <footer>
        <div class="services_list">
            <div class="service">
                <img src="image/partenair.png" alt="">
                <h2>Cin�ma partenaire</h2>
                <p>celui de ma grand mere</p>
                <p>celui de mon pere</p>
            </div>

            <div class="service">
                <img src="image/adresse.png" alt="">
                <h2>Adresses</h2>
                <p>France, 10 vanve 92000</p>
                
            </div>
            <div class="service">
                <img src="image/email.png" alt="">
                <h2>Emails</h2>
                <p>Cin�wave@gmail.com</p>
                
            </div>
            <div class="service">
                <img src="image/number.png" alt="">
                <h2>Numbers</h2>
                <p>+33 0789599667</p>
                
            </div>

            <hr>
        </div>

       <p class="footer_text" style="color: black;"><a href="CGU.php"> | Tous les droits sont réservés par personne.</a></p>

    </footer>


    <script>
        var small_menu = document.querySelector('.toggle_menu')
        var menu = document.querySelector('.menu')

        small_menu.onclick = function () {
            small_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
    </script>
    <script src="Script1.js"></script>
</body>
</html>


