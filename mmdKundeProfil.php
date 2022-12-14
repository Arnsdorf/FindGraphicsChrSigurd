<?php
require "settings/init.php";

$bind = [":mmdKundeId" => $_GET["mmdKundeId"]];
$mmdkunder = $db->sql("SELECT * FROM mmdkunde WHERE`mmdKundeId` = :mmdKundeId;", $bind);



?>
<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <?php

    foreach ($mmdkunder as $mmdkunde){
    ?>

    <title>

        <?php

        echo $mmdkunde->mmdKundeNavn;
        echo $mmdkunde->mmdKundeEfternavn;

        ?>

    </title>

    <meta name="robots" content="All">
    <meta name="author" content="Sigurd, Tommy og Christian. Find Graphics 2022.">
    <meta name="copyright" content="Sigurd, Tommy og Christian. Find Graphics 2022. All Rights Reserved.">
    <meta name="description" content="Denne side kan hjælpe med finde en designer, så du kan få styr på dine design problemer">
    <meta name="theme-color" content="#ffffff"/>

    <link rel="tab icon" href="billeder/Tab%20logo.png">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ede39c7ba1.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.typekit.net/ykt2zah.css">
</head>


<body style="background-color: #353758";>

<header class="header bg-marineblue text-white shadow">
    <div class="d-flex justify-content-between align-items-center mx-4">
        <div class="logo pt-3 pb-3">
            <a href="index.html" class="text-decoration-none text-white">
                <p class="mb-0">Find Graphics</p>
            </a>
        </div>
        <div class="col-6 d-md-none menu-btn d-flex justify-content-end">
            <div class="menu-btn_burger toggle"></div>
        </div>
        <div class="nav-items d-none d-md-block">
            <a class="p-2 text-decoration-none text-white" href="nyheder.html">NYHEDER</a>
            <a class="p-2 text-decoration-none text-white" href="insert.php">OPRET PROFIL</a>
        </div>
    </div>

    <div class="col-12 d-md-none">
        <div class="row text-center mx-auto nav nav-items">
            <a class="col-12 p-5 text-white text-decoration-none" href="nyheder.html">NYHEDER</a>
            <a class="col-12 pb-5 text-white text-decoration-none" href="insert.php">OPRET PROFIL</a>
        </div>
    </div>
</header>

<div class="container">
    <div class="row d-flex justify-content-evenly align-items-center m-3">
        <!-- Billed og video delen   -->
        <div class="col-md-5 p-4 mx-3 mx-md-5 mt-4 mb-5 col-lg-6 col-xl-4 Ydre_boks1 ">
            <div class="">
                <div class="text-white text-center">
                    <?php
                    if(!empty($mmdkunde->mmdKundeProfilPic)){
                        ?>
                        <img class="card-profil shadow mb-5" alt="fremhævede designer" src="uploads/<?php echo $mmdkunde->mmdKundeProfilPic;?>">
                        <?php
                    }else{
                        echo "Ikke noget billede endnu :(";
                    }
                    ?>

                    <?php
                    if(!empty($mmdkunde->mmdKundeVideo)){
                        ?>
                        <video width="100%" height="30%" controls poster="billeder/Thumbnail.png" class="shadow kunde_video">
                            <source class="" type="video/mp4" src="uploads/<?php echo $mmdkunde->mmdKundeVideo;?>">
                            Your browser does not support the video tag.
                        </video>
                        <?php
                    }else{
                        echo "Ikke nogen video endnu :(";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Info delen -->
        <div class="col-md-5 col-lg-4 col-xl-4 p-0">
            <div class="row">
                <div class="text-white mt-5">
                    <h1 class="mmdKunde_overskrift text-center">
                        <?php echo $mmdkunde->mmdKundeNavn;?>

                        <?php echo $mmdkunde->mmdKundeEfternavn; ?>

                    </h1>
                    <h2 class="mmdKunde_overskrift1 text-center">
                        <?php

                        echo $mmdkunde->mmdKundeTitel;
                        ?>
                    </h2>
                    <div class="Ydre_boks1 text-white bio p-4 pb-2 pt-2 mt-5">
                        <p>
                            <?php

                            echo $mmdkunde->mmdKundeBio;
                            ?>
                        </p>
                    </div>
                    <div class="mmdKunde_overskrift1 text-center mt-5">
                        <h3>
                            Kontaktinformationer
                        </h3>
                    </div>
                    <div class="Ydre_boks1 bio p-4 pb-2 pt-3 mt-3 mb-5">
                        <p>
                            Du kan altid kontakte
                            <?php

                            echo $mmdkunde->mmdKundeNavn;
                            ?>, hvis du har nogle spørgsmål, eller hvis
                            du har en speciel opgave.
                        </p>
                        <div class="d-flex align-items-center justify-content-center pt-2">
                            <a class="text-decoration-none text-white" href="tel:+45<?php echo $mmdkunde->mmdKundeTLF;?>">
                                <i class="bi bi-telephone" style="font-size: 1.8rem"></i>
                                + 45
                                <?php

                                echo $mmdkunde->mmdKundeTLF;
                                ?>
                            </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-center p-1">
                            <a class="text-decoration-none text-white" href="mailto:<?php echo $mmdkunde->mmdKundeEmail;?>">
                                <i class="bi bi-envelope-at" style="font-size: 1.8rem"></i>

                                <?php

                                echo $mmdkunde->mmdKundeEmail;
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="button mx-auto mt-3 mb-5 text-center shadow d-flex justify-content-center align-items-center mb-3">
                        <a class="text-white text-decoration-none" href="index.html#Items">
                            <h6 class="m-0 btn-tekst">Tilbage</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!----------Start på footer------------>
<footer class="footer container-fluid d-none d-md-block box-shadow justify-content-evenly">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <a class="text-white text-decoration-none forside_underoverskrift" href="#top">Gå til toppen <i class="fas fa-arrow-up"></i></a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="mt-5 mb-5 align-items-center">
                <a class="mx-xl-5 mx-md-2 text-decoration-none footer-text text-white" href="tel:+4512345678"><i class="fas fa-phone"></i> +45 12 34 56 78</a>
                <a class="mx-xl-5 mx-md-2 text-decoration-none footer-text text-white" href="mailto:findgraphics@mail.com"><i class="fas fa-envelope"></i> findgraphics@mail.com</a>
                <a class="mx-xl-5 mx-md-2 text-decoration-none footer-text text-white" href="#"><i class="bi bi-house-fill"></i> Nykøbing F, Geovej 6</a>
            </div>
            <div class="mt-5 mb-5 align-items-center">
                <a class="mx-xl-5 mx-md-2 text-white text-decoration-none footer-text fa fa-brands fa-instagram fa-2x" href="https://www.instagram.com" target="_blank"></a>
                <a class="mx-xl-5 mx-md-2 text-white text-decoration-none footer-text fa fa-brands fa-linkedin fa-2x" href="https://www.linkedin.com" target="_blank"></a>
                <a class="mx-xl-5 mx-md-2 text-white text-decoration-none footer-text fa fa-brands fa-facebook fa-2x" href="https://www.facebook.com" target="_blank"></a>
            </div>
        </div>
    </div>
</footer>

<footer class="footer container-fluid d-md-none box-shadow">
    <div class="row text-center justify-content-center">
        <div class="d-flex flex-column">
            <a class="text-white text-decoration-none mt-5 forside_overskrift" href="#top">Gå til toppen <i class="fas fa-arrow-up"></i></a>
            <a class="text-decoration-none text-white mt-5 footer-text" href="tel:+4512345678"><i class="fas fa-phone"></i> +45 12 34 56 78</a>
            <a class="text-decoration-none text-white mt-5 footer-text" href="mailto:findgraphics@mail.com"><i class="fas fa-envelope"></i> findgraphics@mail.com</a>
            <a class="text-decoration-none text-white mt-5 footer-text" href="#"><i class="bi bi-house-fill"></i> Nykøbing F, Geovej 6</a>
            <a class="text-white text-decoration-none mt-5 footer-text fa fa-brands fa-instagram fa-2x" href="https://www.instagram.com" target="_blank"></a>
            <a class="text-white text-decoration-none mt-5 footer-text fa fa-brands fa-linkedin fa-2x" href="https://www.linkedin.com" target="_blank"></a>
            <a class="text-white text-decoration-none mt-5 footer-text mb-5 fa fa-brands fa-facebook fa-2x" href="https://www.facebook.com" target="_blank"></a>
        </div>
    </div>
</footer>

<footer class="container-fluid footer-small">
    <div class="row">
        <h1 class="text-center footer-text mt-3 mb-3">
            COPYRIGHT FindGraphics
        </h1>
    </div>
</footer>
<!----------Slut på footer------------>



<?php



}

?>


<script>
    const toggle = document.querySelector('.toggle');
    const nav = document.querySelector('.nav');
    toggle.addEventListener('click', () => nav.classList.toggle('show'));
</script>

<script>
    const menuBtn = document.querySelector('.menu-btn');
    let menuOpen = false;
    menuBtn.addEventListener('click', () =>{
        if (!menuOpen){
            menuBtn.classList.add('open');
            menuOpen = true;
        }   else{
            menuBtn.classList.remove('open');
            menuOpen = false;
        }
    });
</script>

</body>
</html>
