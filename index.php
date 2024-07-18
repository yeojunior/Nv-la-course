<?php
  include('./php/InsertDataBase.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
        .highlight {
            background-color: yellow; /* Couleur de fond jaune pour mettre en évidence */
            color: black; /* Couleur de texte noire pour une meilleure lisibilité */
        }
    </style>
<body>
   
    <div id="navbb">
        <header>
            <div id="nabbb">
                <div class="logo">
                    <img src="image/logo-removebg-preview.png" alt="Nv Lacourse">
               </div>
        
                <nav>
                    <ul>
                        <li><a href="#Aceuille">Aceuille</a></li>
                        <li><a href="#Service">Service & Offres</a></li>
                        <li><a href="#vehicule">Vehicule</a></li>
                        <li><a href="#">Divers</a></li>
                    </ul>
                </nav>
        
                <div class="serach">
                    <input id="searchWord" type="text" placeholder="Faire une recherche">
                    <button onclick="searchAndHighlight()">Rechercher</button>
                </div>
        
            </div>
        </header>
    </div>

    <section id="imageb">
        <div class="image1">
            <img src="image/cami.jpg" alt="">
            <p class="welcom"><span style="color: #F4C85B;">BIENVENUE </span>CHEZ <span style="color: #8c0a0a;">NV LA COURSE</span> :</p>
            <p id="junioryeo"><?php if(isset($res)){echo $res;} ?></p>
        </div>

    </section>

    <section class="slide">

        <div id="slideshow">
            <img src="image/societe1.jpg" alt="">
            <img src="image/SOCIETE2.jpg" alt="">
            <img src="image/SOCIETE3.jpg" alt="">
            <img src="image/SOCITE4.jpg" alt="">
        </div>

        <div class="texte">
            <h1 style="font-style: italic; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                HISTORIQUE
            </h1>
            <p>Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut magnam possimus, culpa sit non recusandae consectetur at voluptatem tempora ipsam. ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusamus dicta laborum neque culpa maxime, distinctio blanditiis voluptates sit quo unde exercitationem, eveniet placeat porro laboriosam, temporibus totam. Nisi, ex!</p>
        </div>

    </section>

    <section style="background-color: #f5f3f3de;">

    <section class="Directeur">
        <div class="profils">
            <img src="image/PROFILS1.jpg" alt="">
        </div>
        <div class="mot">
            <h2 style="color: black;">Mot Du PDG </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Ipsa sapiente in veritatis tenetur, quidem necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magnam odio molestiae accusantium eveniet dolores.br <br> quo libero rerum quibusdam facilis illum aliquid suscipit praesentium sint?</p>
        </div>
    </section>

    <!-- <section class="sect">

        <div class="element1">
            <div class="persone_img1">
                <img src="image/PROFILS1.jpg" alt="">
            </div>
            <p>Name:Entoinette KAtoto</p>
            <p>POste:Espert Conducteur</p>
        </div>


        <div class="element1">
            <div class="persone_img1">
                <img src="image/PROFILS2.jpg" alt="">
            </div>
            <p>Name:Entoinette KAtoto</p>
            <p>POste:Espert Conducteur</p>
        </div>

        <div class="element1">
            <div class="persone_img1">
                <img src="image/PROFILS1.jpg" alt="">
            </div>
            <p>Name:Entoinette KAtoto</p>
            <p>POste:Espert Conducteur</p>
        </div>


        <div class="element1">
            <div class="persone_img1">
                <img src="image/PROFILS2.jpg" alt="">
            </div>
            <p>Name:Entoinette KAtoto</p>
            <p>POste:Espert Conducteur</p>
        </div>


    </section> -->


    <!-- le code pour service et offres -->
    <!-- margin-left: 100px;margin-right: 100px; -->

    <section  id="Service" style=" width: 100%; margin-top: 30px;background: linear-gradient(#f2f2f2,#f1e8e8);box-shadow: 0PX 40px 60Px rgb(214, 209, 209,1)">
        <h2 style="text-align: center; margin-bottom: 30px;">SERVICE ET OFFRES</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style=" margin-left: 100px;margin-right: 100px;">
            <div class="carousel-inner">
              <div class="carousel-item active">
               <div class="jeel" style="display: flex;gap: 40px;">
                <div class="">
                    <img style="width: 400px; border-radius: 15px; object-fit: cover; margin-bottom: 20px;" src="image/vehicule-camion-remorques-arriere-plan_342744-1297.jpg" alt="" srcset="">
                </div>
                <div class="img2_description" style="text-align: center;">
                    <h3>SUIVI  DE MARCHANDISES</h3>
                    <p style="position: relative; top: 20px;">Confiance, Eficacité,Tranquilité Vos marchandises notre priorité <br> Livraison rapide et sûre,partout dans le monde <br>Bénéficiez de notre savoir-faire et de notre expérience pour un transport de marchandises  sans tracas <br> Nous nous engaeons a livrer vos marchandises dans les temps et en toute sécurité<br> <span style="color: #8c0a0a;" > Votre partenaire de transport de Confiance Nv LACOURSE</span> </p>
                </div>
               </div>
              </div>
             
                <div class="carousel-item ">
                    <div class="jeel" style="display: flex;gap: 40px;">
                     <div class="">
                         <img style="width: 400px; border-radius: 15px; object-fit: cover;margin-bottom: 20px;" src="image/vehicule-camion-remorques-arriere-plan_342744-1297.jpg" alt="" srcset="">
                     </div>
                     <div class="img2_description" style="text-align: center;">
                         <h3>SUIVI  DE MARCHANDISES</h3>
                         <p  style="position: relative; top: 20px;">Confiance, Eficacité,Tranquilité Vos marchandises notre priorité <br> Livraison rapide et sûre,partout dans le monde <br>Bénéficiez de notre savoir-faire et de notre expérience pour un transport de marchandises  sans tracas <br> Nous nous engaeons a livrer vos marchandises dans les temps et en toute sécurité<br> <span style="color: #8c0a0a;" > Votre partenaire de transport de Confiance Nv LACOURSE</span> </p>
                     </div>
                    </div>
              </div>
                <div class="carousel-item ">
                    <div class="jeel" style="display: flex;gap: 40px;">
                     <div class="">
                         <img style="width: 400px; border-radius: 15px; object-fit: cover; margin-bottom: 20px;" src="image/vehicule-camion-remorques-arriere-plan_342744-1297.jpg" alt="" srcset="">
                     </div>
                     <div class="img2_description" style="text-align: center;">
                         <h3>SUIVI  DE MARCHANDISES</h3>
                         <p style="position: relative; top: 20px;">Confiance, Eficacité,Tranquilité Vos marchandises notre priorité <br> Livraison rapide et sûre,partout dans le monde <br>Bénéficiez de notre savoir-faire et de notre expérience pour un transport de marchandises  sans tracas <br> Nous nous engaeons a livrer vos marchandises dans les temps et en toute sécurité<br> <span style="color: #8c0a0a;"> Votre partenaire de transport de Confiance Nv LACOURSE</span> </p>
                     </div>
                    </div>              
                </div>
            </div>
          </div>
    </section>
    
  </section>
    <!-- les villes destination et itineraire -->

    <section >
        <h4 style="margin-top: 50px; text-align: center;"> <span style="color: #F4C85B; font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif;">  NOS DESTINATIONS</span> <span style="font-weight: 900; color: #000;"> & </span><span style="color: #F4C85B; font-weight: 900; font-family:Verdana, Geneva, Tahoma, sans-serif;">INTINERAIRES</span></h4>
        

        <div id="big_villes" style="margin-top: 40px;">

           <div class="les_trois_premiers">

             <!-- le premier -->

             

              <div class="londres">
                <div class="londres_img">
                    <img src="image/londres.jpg" alt="La ville de londres">
                </div>
                <div class="descrip_londres">
                    <h5>Avec <span> NV LA COURSE</span>, Londres n’a jamais été aussi proche.</h3>
                    <p>Nous offrons un service de transport fiable et efficace vers Londres,<br> en tenant compte de tous les défis logistiques que peut présenter cette métropole animée. <br> Grâce à notre connaissance approfondie de la ville et à notre réseau étendu,<br> nous sommes en mesure de garantir une livraison rapide et sûre de vos marchandises.</p>
                </div>
            </div>

             
        

            <!-- le deuxieme -->

        
            <div class="londres">
                <div class="londres_img">
                    <img src="image/bruxel.jpg" alt="La ville de londres">
                </div>
                <div class="descrip_londres">
                    <h5>Avec <span> NV LA COURSE</span>, Londres n’a jamais été aussi proche.</h3>
                    <p>Nous offrons un service de transport fiable et efficace vers Londres,<br> en tenant compte de tous les défis logistiques que peut présenter cette métropole animée. <br> Grâce à notre connaissance approfondie de la ville et à notre réseau étendu,<br> nous sommes en mesure de garantir une livraison rapide et sûre de vos marchandises.</p>
                </div>
            </div>
        

            <!-- le troisieme -->

        
            <div class="londres">
                <div class="londres_img">
                    <img src="image/madrid.jpg" alt="La ville de londres">
                </div>
                <div class="descrip_londres">
                    <h5>Avec <span> NV LA COURSE</span>, Londres n’a jamais été aussi proche.</h3>
                    <p>Nous offrons un service de transport fiable et efficace vers Londres,<br> en tenant compte de tous les défis logistiques que peut présenter cette métropole animée. <br> Grâce à notre connaissance approfondie de la ville et à notre réseau étendu,<br> nous sommes en mesure de garantir une livraison rapide et sûre de vos marchandises.</p>
                </div>
            </div>

           </div>

            <div class="les_trois_dernier">

                <!-- le quatrieme -->

       
            <div class="londres">
                <div class="londres_img">
                    <img src="image/marseille.jpg" alt="La ville de londres">
                </div>
                <div class="descrip_londres">
                    <h5>Avec<span> NV LA COURSE</span>, Londres n’a jamais été aussi proche.</h3>
                    <p>Nous offrons un service de transport fiable et efficace vers Londres,<br> en tenant compte de tous les défis logistiques que peut présenter cette métropole animée. <br> Grâce à notre connaissance approfondie de la ville et à notre réseau étendu,<br> nous sommes en mesure de garantir une livraison rapide et sûre de vos marchandises.</p>
                </div>
            </div>
        

         <!-- le cinquieme -->

        
            <div class="londres">
                <div class="londres_img">
                    <img src="image/monaco.jpg" alt="La ville de londres">
                </div>
                <div class="descrip_londres">
                    <h5>Avec <span> NV LA COURSE</span>, Londres n’a jamais été aussi proche.</h3>
                    <p>Nous offrons un service de transport fiable et efficace vers Londres,<br> en tenant compte de tous les défis logistiques que peut présenter cette métropole animée. <br> Grâce à notre connaissance approfondie de la ville et à notre réseau étendu,<br> nous sommes en mesure de garantir une livraison rapide et sûre de vos marchandises.</p>
                </div>
            </div>
        

            <!-- le sixieme -->

        
            <div class="londres">
                <div class="londres_img">
                    <img src="image/rome.jpg" alt="La ville de londres">
                </div>
                <div class="descrip_londres">
                    <h5 >Avec <span> NV LA COURSE</span>, Londres n’a jamais été aussi proche.</h5>
                    <p>Nous offrons un service de transport fiable et efficace vers Londres,<br> en tenant compte de tous les défis logistiques que peut présenter cette métropole animée. <br> Grâce à notre connaissance approfondie de la ville et à notre réseau étendu,<br> nous sommes en mesure de garantir une livraison rapide et sûre de vos marchandises.</p>
                </div>
            </div>
            </div>

            
        </div>

        
    </section>


    <!-- les vehicule  -->


    <section id="vehicule">
        <h2 style="text-align: center;margin-top: 30PX;">VEHICULES</h2>
        <div class="container" style="margin-top: 20PX;">


            <div class="vehicules" style="display: flex; gap: 20px;">



                <div class="vehicule slide-in">
    
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
        
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
        
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some go quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go  somewhere</a>
                          <p></p>
                        </div>
                      </div>
        
                </div>
        
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
    
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
    
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
    
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
    
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
    
                <div class="vehicule slide-in">
        
                    <div class="card" style="width: 18rem;">
                        <img src="image/voiture.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick junior example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
        
                </div>
    
    
            </div>


        </div>

    </section>

    <!-- les partenaires -->

    <section>
        <h3 style="text-align: center; margin-top: 20PX;">NOS PARTENAIRES</h3>
        <div class="les_partenaires">
            <div class="images1" style="display: flex; justify-content: space-around;">
                <img src="image/logo-societe-triangulaire-template_1071-62.jpg" alt="">
                <img src="image/resume-logo-business-template_1043-161.jpg" alt="">
                <img src="image/modele-logo-livraison-voiture-van_74218-502.jpg" alt="">
            </div>
            <div class="images2"  style="display: flex; justify-content: space-around;">
                <img src="image/circulaire-bleu-logo-abstraite_1043-69.jpg" alt="">
                <img src="image/logistique-transport-logo-dedouanement_843175-163.avif" alt="">
                <img src="image/circulaire-agence-voyage-logo_1071-77.jpg" alt="">
            </div>
        </div>
    </section>

                        <!-- CONTACTE -->

                        <section class="contact_section layout_padding " style="display: flex;">



                            <div class="container">
                              <div class="heading_container">
                                <h2>
                                  Contact Us
                                </h2>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <form action="#" method="post">
                                    <div>
                                      <input type="text" placeholder="Name" name="name" maxlength="50" title="<?php if(isset($messagen)){echo $message;}else{echo'Veullez entrer un nom correcte';}?>" required/>
                                    </div>
                                    <div>
                                      <input type="text" placeholder="Phone Number" pattern="[0-9]*" title="<?php if(isset($messagen)){echo $messagen;}else{echo'Veullez entrer un bon numero';}?>"  name="number" required/>
                                    </div>
                                    <div>
                                      <input type="email" placeholder="Email" name="email" title="<?php if(isset($messagi)){echo $messagi;}else{echo'Veullez entrer un nom correcte';}?>" required />
                                    </div>
                                    <div>
                                      <input type="text" class="message-box" placeholder="Message" name="description" required/>
                                    </div>
                                    <div class="d-flex ">
                                      <button name="send" style="margin-bottom: 10px;">
                                        SEND
                                      </button>
                                    </div>
                                  </form>
                                </div>
                                <div class="col-md-6">
                                  <div class="map_container">
                                    <div class="map">
                                      <div id="googleMap" style="width:100%;height:100%;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.6451728388989!2d2.4181719927308807!3d48.904327800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66cf9c4c68de9%3A0xd917a66c10fc20db!2sYG%20SECURITE%20PRIVEE!5e0!3m2!1sfr!2sci!4v1708626346496!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </section>

                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </section>


<!-- info section -->
<section class="info_section ">
    <div class="container">
      <h4>
        Get In Touch
      </h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                        <img style="width: 100px; height: 50px; position: relative; right: 10px;" src="fonts/location-dot-solid.svg" alt="">
                    </div>
                    <p>
                        8 avenue Henri Barbusse, 93000 Bobigny
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <img style="width: 100px; height: 50px; position: relative; right: 10px;" src="fonts/phone-solid.svg" alt="" srcset="">
                    </div>
                    <p>
                      +333-634-442-691
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <img style="width: 100px; height: 50px; position: relative; right: 10px;" src="fonts/message-regular.svg" alt="">
                    </div>
                    <p>
                      nvlacourse@outlook.fR
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>



  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> Votre Partenaire
        <a href="#">Nv La COURSE</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>

        window.onscroll=function(){
            var navbar=document.getElementById("nabbb")
            if(window.pageYOffset>10){
                navbar.style.backgroundColor="#2a9df4";
            }else{
                navbar.style.backgroundColor='transparent';
            }
        }





var typed = new Typed('#junioryeo', {
  strings: ["NV LA COURSE :", "Votre satisfaction est notre engagement","Des chauffeurs professionnels à votre disposition"],
  typeSpeed: 100,
  backSpeed: 50,
  loop: true,
  showCursor: true,
    
});


// barre de recherche
    //     function searchAndHighlight() {
    //       alert('Search')
    //         var word = document.getElementById('searchWord').value;
    //         var paragraphs = document.getElementsByTagName("p");

    //         for (var i = 0; i < paragraphs.length; i++) {
    //             paragraphs[i].classList.remove("highlight"); // Supprimer la classe "highlight" de tous les paragraphes
    //             if (paragraphs[i].innerText.includes(word)) {
    //                 paragraphs[i].classList.add("highlight"); // Ajouter la classe "highlight" à l'élément contenant le mot
    //                 paragraphs[i].scrollIntoView({ behavior: 'smooth', block: 'start' });
    //                 break; // Sortir de la boucle une fois que l'élément est trouvé
    //             }
    //         }

    //         if (i === paragraphs.length) {
    //             alert("Le mot '" + word + "' n'a pas été trouvé dans la page.");
    //         } else {
    //             alert("Le mot '" + word + "' a été trouvé dans la page.");
    //         }
    //     }
        
    // 
    
          function searchAndHighlight() {
            var word = document.getElementById('searchWord').value.toLowerCase(); // Convertir le mot recherché en minuscules
            var paragraphs = document.querySelectorAll("p,h1,h2,h3,h4,h5,a,span");

            for (var i = 0; i < paragraphs.length; i++) {
                // paragraphs[i].classList.remove("highlight"); // Supprimer la classe "highlight" de tous les paragraphes
                if (paragraphs[i].innerText.toLowerCase().includes(word)) { // Convertir le texte en minuscules pour comparer
                    paragraphs[i].classList.add("highlight"); // Ajouter la classe "highlight" à l'élément contenant le mot
                    paragraphs[i].scrollIntoView({ behavior: 'smooth', block: 'start' });
                    break; // Sortir de la boucle une fois que l'élément est trouvé
                }
            }

            if (i === paragraphs.length) {
                alert("Le mot '" + word + "' n'a pas été trouvé dans la page.");
            } else {
                alert("Le mot '" + word + "' a été trouvé dans la page.");
            }
        }

    </script>
</body>
</html>