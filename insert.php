
<?php

require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["mmdKundeProfilPic"]["tmp_name"])){
        move_uploaded_file($file["mmdKundeProfilPic"]["tmp_name"], "uploads/" . basename($file["mmdKundeProfilPic"]["name"]));
    }

    if (!empty($file["mmdKundeBevis"]["tmp_name"])){
        move_uploaded_file($file["mmdKundeBevis"]["tmp_name"], "uploads/" . basename($file["mmdKundeBevis"]["name"]));
    }

    if (!empty($file["mmdKundeVideo"]["tmp_name"])){
        move_uploaded_file($file["mmdKundeVideo"]["tmp_name"], "uploads/" . basename($file["mmdKundeVideo"]["name"]));
    }



    $sql = "INSERT INTO mmdkunde (mmdKundeNavn, mmdKundeEfternavn, mmdKundeEmail, mmdKundePassword, mmdKundeCVR, mmdKundeTitel, mmdKundeTLF, mmdKundeBevis, mmdKundeProfilPic, mmdKundeVideo, mmdKundeTag1, mmdKundeTag2, mmdKundeTag3, mmdKundeBio) VALUES (:mmdKundeNavn, :mmdKundeEfternavn, :mmdKundeEmail, :mmdKundePassword, :mmdKundeCVR, :mmdKundeTitel, :mmdKundeTLF, :mmdKundeBevis, :mmdKundeProfilPic, :mmdKundeVideo, :mmdKundeTag1, :mmdKundeTag2, :mmdKundeTag3, :mmdKundeBio)";
    $bind = [
        ":mmdKundeNavn" => $data["mmdKundeNavn"],
        ":mmdKundeEfternavn" => $data["mmdKundeEfternavn"],
        ":mmdKundeEmail" => $data["mmdKundeEmail"],
        ":mmdKundePassword" => $data["mmdKundePassword"],
        ":mmdKundeCVR" => $data["mmdKundeCVR"],
        ":mmdKundeTitel" => $data["mmdKundeTitel"],
        ":mmdKundeTLF" => $data["mmdKundeTLF"],
        ":mmdKundeBevis" => (!empty($file["mmdKundeBevis"]["tmp_name"])) ? $file["mmdKundeBevis"]["name"] : NULL,
        ":mmdKundeProfilPic" => (!empty($file["mmdKundeProfilPic"]["tmp_name"])) ? $file["mmdKundeProfilPic"]["name"] : NULL,
        ":mmdKundeVideo" => (!empty($file["mmdKundeVideo"]["tmp_name"])) ? $file["mmdKundeVideo"]["name"] : NULL,
        ":mmdKundeTag1" => $data["mmdKundeTag1"],
        ":mmdKundeTag2" => $data["mmdKundeTag2"],
        ":mmdKundeTag3" => $data["mmdKundeTag3"],
        ":mmdKundeBio" => $data["mmdKundeBio"]];

    $db->sql($sql, $bind, false);


    echo "<body style='font-size: 2rem; background-color: #353758;'></body> 
        <h1 style='color: white; font-family: montserrat, sans-serif; display: flex; justify-content: center; padding: 50px;' id='echo_besked'>Tak fordi du valgte Find Graphics</h1> 
        <a style='text-decoration: underline; color: white; font-family: montserrat, sans-serif; display: flex; justify-content: center; font-weight: bold;' href='index.html'> Gå tilbage</a>
        ";

    exit;


}
?>



<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>OPRET DIN PROFIL</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="tab icon" href="billeder/Tab%20logo.png">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/ykt2zah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ede39c7ba1.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/zquinc6p2731tv9vxna2i9s3dmifhibr2rw3657swz26blb4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>


<body style="background-color: #353758; ">

<header class="header bg-marineblue text-white shadow">
    <div class="d-flex justify-content-between align-items-center mx-4 ">
        <div class="logo pt-3 align-items-center pb-3">
            <a href="index.html" class="text-decoration-none text-white">
                <p>Find Graphic</p>
            </a>
        </div>
        <div class="col-3 d-md-none menu-btn d-flex justify-content-end">
            <div class="menu-btn_burger toggle"></div>
        </div>
        <div class="nav-items d-none d-md-block">
            <a class="p-2 text-decoration-none text-white" href="nyheder.html">NYHEDER</a>
            <a class="p-2 text-decoration-none text-white" href="insert.php">OPRET PROFIL</a>
        </div>
    </div>

    <div class="col-12 d-md-none">
        <div class="row text-center mx-auto nav nav-items">
            <a class="col-12 p-5 text-white text-decoration-none" href="nyheder.html" class="">NYHEDER</a>
            <a class="col-12 pb-5 text-white text-decoration-none" href="insert.php" class="">OPRET PROFIL</a>
        </div>
    </div>
</header>


<div class="container text-white">
    <h1 class="text-center m-5 mmdKunde_overskrift">OPRET DIN PROFIL</h1>
    <p class="text-center pb-5 mmdKunde_overskrift1">Opret dig som selvstændig Multimediedesigner
        og bliv en del af et større fællesskab
        der respektere din virksomhed</p>
</div>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div style="font-size: .9rem;" class="row text-white m-0 d-flex d-flex justify-content-center p-0">

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeNavn">Dit fulde navn</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeNavn]" id="mmdKundeNavn" placeholder="Indtast dit fulde navn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeEfternavn">Efternavn</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeEfternavn]" id="mmdKundeEfternavn" placeholder="Indtast dit efternavn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeEmail">Email</label>
                <input class="form-control shadow" type="email" name="data[mmdKundeEmail]" id="mmdKundeEmail" placeholder="Indtast en passende email" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundePassword">Adgangskode</label>
                <input class="form-control shadow" type="password" name="data[mmdKundePassword]" id="mmdKundePassword" placeholder="Indtast en adgangskode" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeCVR">CVR</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeCVR]" id="mmdKundeCVR" placeholder="Indtast dit CVR Nummer" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeTitel">Titel</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeTitel]" id="mmdKundeTitel" placeholder="Indtast din titel f.eks. animator." value="">
            </div>
        </div>

        <div class="col-lg-6 col-md-8 p-5 pt-3">
            <div class="form-group ">
                <label class="" for="mmdKundeTLF">Telefonnummer</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTLF]" id="mmdKundeTLF" placeholder="Indtast dit arbejdes nummer" value="">
            </div>
        </div>

        <div class="col-12 p-5 pt-3">
            <label class="form-label" for="mmdKundeBevis">Indsæt uddannelsebevis her</label>
            <input type="file" class="form-control shadow" id="mmdKundeBevis" name="mmdKundeBevis">
        </div>

        <div class="col-12 p-5 pt-3">
            <label class="form-label " for="mmdKundeProfilPic">Indsæt profilbillede her</label>
            <input type="file" class="form-control shadow" id="mmdKundeProfilPic" name="mmdKundeProfilPic">
        </div>

        <div class="col-12 p-5 pt-3 ">
            <label class="form-label" for="mmdKundeVideo">Indsæt video her</label>
            <input type="file" class="form-control shadow" id="mmdKundeVideo" name="mmdKundeVideo">
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeTag1">1.tag</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTag1]" id="mmdKundeTag1" placeholder="Indtast relevant kategori/tag" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeTag2">2.tag</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTag2]" id="mmdKundeTag2" placeholder="Indtast relevant kategori/tag" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeTag3">3.tag</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTag3]" id="mmdKundeTag3" placeholder="Indtast relevant kategori/tag" value="">
            </div>
        </div>

        <div class="col-12 p-5 pt-3">
            <div class="form-group">
                <label class="" for="mmdKundeBio">Fortæl verdenen hvem du er</label>
                <textarea class="form-control" name="data[mmdKundeBio]" id="mmdKundeBio" placeholder="Beskriv dig og dine kompetancer"></textarea>
            </div>
        </div>

        <div class="col-12 button d-flex mb-5 align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <button class="submit_knap bg-transparent text-white border-0">Opret bruger</button>
        </div>
    </div>
    <button class="form-control button border-0 text-white shadow" type="submit" id="btnSubmit">Ja tak</button>
</form>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title text-center" id="staticBackdropLabel">Terms & Conditions</h4>
            </div>
            <div class="modal-body">
                <h5 class="forside_underoverskrift">1. Succes</h5>
                <p class="mb-3">I tilfældet af "ekstrem succes" acceptere
                    du til at Find Graphics firmaet må tage en 99% del af alt din income.
                </p>
                <h5 class="forside_underoverskrift">2. Læs ikke dette</h5>
                <p class="mb-3">Hvis du acceptere vores betingelser siger
                    du ja til ikke at have læst terms &
                    conditions dokumentet. Yderligere siger
                    du også ja til at din førstefødte bliver
                    permanent ofret til "højre magter".
                </p>
                <h5 class="forside_underoverskrift">3. Stol på os</h5>
                <p class="mb-3">
                    Hvis du acceptere vores betingelser acceptere
                    du også chancen for det vi kalder "den permanente søvn"
                    som bliver anvendt og eller udøvet på arbejder
                    der bliver bedømt til at være "ineffektive"
                    og eller "et problem".
                </p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="col-12 button d-flex mb-5 align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <button class="submit_knap bg-transparent text-white border-0">Opret bruger</button>
                </div>
                <button type="button" class="button1 shadow" data-bs-dismiss="modal">Nej tak</button>
            </div>
        </div>
    </div>
</div>

<!----------Start på footer------------>
<div class="footer container-fluid d-none d-md-block box-shadow justify-content-evenly">
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
</div>

<div class="footer container-fluid d-md-none box-shadow">
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
</div>

<div class="container-fluid footer-small">
    <div class="row">
        <h1 class="text-center footer-text mt-3 mb-3">
            COPYRIGHT FindGraphics
        </h1>
    </div>
</div>
<!----------Slut på footer------------>

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



<script>
    tinymce.init({
        selector: '#mmdKundeBio',
    });
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
