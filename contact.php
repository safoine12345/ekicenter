<?php
include "config/commendos.php"; ?> 
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="assets/css/main.css" />
      <!-- fevicon -->
     </head>
      <header>
         <!-- header inner -->
         <div id="header-wrapper">
            <div class="container">

               <!-- Header -->
                 <!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="index.html" id="logo">EKI Centre</a></h1>

									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.html">Presentation</a></li>
												<li>
													<a href="repartition et maintenace.html">repartition et maintenace</a>
                                                </li>
												
												<li><a href="boutique.html">Boutique en ligne</a></li>
												<li><a href="contact.php">Assistance</a></li>
												<li><a href="inscription.php">Inscription</a></li>
											</ul>
										</nav>

								</div>
							</header>
         </header>
      <!-- end header inner -->
      <!-- end header -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form" method="post"  >
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="nom" type="type" name="nom"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="numero" type="type" name="tel">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="msg">Message </textarea>
                        </div>
                        <div class="col-md-12">
                        <input type="submit" name="Envoyer" class="btn btn-info" value="Envoyer">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>
<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['tel']) AND !empty($_POST['msg']))
    {
        $nom = htmlspecialchars(strip_tags($_POST['nom'])) ;
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $tel = htmlspecialchars(strip_tags($_POST['tel']));
        $msg = htmlspecialchars(strip_tags($_POST['msg']));

        $user = ajoutercontact($nom, $email, $tel, $msg);
    }
}    
     
?>
