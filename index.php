<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php
    include './components/Header/header.php'
        ?>
    <!-- Main -->
    <main>
        <!-- Hero -->
        <section id="hero">
            <div class="hero_wrapper">
                <div class="hero_info__container">
                    <div class="hero_info">
                        <h1>Welkom bij AnnexBios 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                        <button><a href="#">Bekijk de draaiende films</a></button>
                    </div>
                </div>
                <div class="hero_contact__container">
                    <div class="hero_contact">
                        <div class="hero__maps">
                            <img src="./assets/images/maps/maps.png" alt="Locatie Afbeelding" class="locatie_img">
                            <div class="hero_contact_info__wrapper">
                                <div class="hero_address contact_info">
                                    <img src="./assets/images/icons/locatie.png" alt="Icon locatie">
                                    <p>Rijkstraatweg 42 <br>3223 KA Hellevoetsluis </p>
                                </div>
                                <div class="hero_number contact_info">
                                    <img src="./assets/images/icons/telefoon.png" alt="Icon number">
                                    <p>020-12345678</p>
                                </div>
                                <div class="hero_bereikbaar contact_info">
                                    <h3>BEREIKBAARHEID
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula
                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hero_contact_info__container">
                            <img src="./assets/images/gebouw/Hellevoetssluis.png" alt="Bioscoop foto buiten">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Film Agenda -->
        <section id="film_agenda">
            <div class="film_agenda__wrapper">
                <div class="film_upper__container">
                    <div class="film_agenda_title">
                        <h2>Film Agenda</h2>
                    </div>
                    <div class="film_upper_container__checklist">
                        <img src="#" alt="">
                        <div class="film_checkbox checkboxes">
                            <input type="checkbox">
                        </div>
                        <div class="deze_week_checkbox checkboxes">
                            <input type="checkbox">
                        </div>
                        <div class="vandaag_checkbox checkboxes">
                            <input type="checkbox">
                        </div>
                        <div class="catgegorie__dropdown">
                            <select name="#" id="#">
                                <option>Categorie</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php
    // include './components/Footer/footer.php'
    ?>
</body>

</html>