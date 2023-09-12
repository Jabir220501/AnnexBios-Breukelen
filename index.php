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
                            <!-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.2324191454013!2d5.2947255!3d51.89322250000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6f5f038dcd97b%3A0x4795c4e724b18908!2sRijksstraatweg%2042%2C%204197%20BC%20Buurmalsen!5e0!3m2!1snl!2snl!4v1694520466618!5m2!1snl!2snl"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe> -->
                            <div class="hero_contact_info__container">
                                <div class="hero_contact_info__wrapper">
                                    <div class="hero_address">
                                        <img src="#" alt="Icon locatie">
                                        <p>Rijkstraatweg 42 <br>3223 KA Hellevoetsluis </p>
                                    </div>
                                    <div class="hero_number">
                                        <img src="#" alt="Icon number">
                                        <p>020-12345678</p>
                                    </div>
                                    <div class="hero_berijkbaar">
                                        <h3>BEREIKBAARHEID
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                            eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        </p>
                                    </div>
                                </div>
                                <img src="#" alt="Bioscoop foto buiten">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Film Agenda -->
        <section id="film_agenda">

        </section>
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <?php
    include './components/Footer/footer.php'
        ?>
</body>

</html>