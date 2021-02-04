<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'nav',
        'container_class' => 'menu-principal'
    );
    //wp_nav_menu($args);
    ?>
    <div class="mainDiv">
        <div class="diagonal-box">
            <div class="content">

            </div>
        </div>
        <div class="dev-mesage">
            <div class="info-icon">
                <img class="info-img" src="<?php echo get_template_directory_uri(); ?>/img/info_icon2.png" alt="Apple Download Button">
            </div>
            <div class="info-text">
                <p>Actualmente este proyecto se encuentra en fase de desarrollo, no abierto al público general</p>
            </div>
        </div>
        <p class="title">PickApp</p>
        <p class="desc">Los productos de siempre, ahora online</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="logo pagina">
        <div class="row download-container">
            <div class="column ios-download">
                <img class="download-img" src="<?php echo get_template_directory_uri(); ?>/img/apple_download.png" alt="Apple Download Button">
            </div>
            <div class="column android-container">
                <img class="download-img" src="<?php echo get_template_directory_uri(); ?>/img/android_download.png" alt="Android Download Button">
            </div>
        </div>
    </div>
</body>

</html>