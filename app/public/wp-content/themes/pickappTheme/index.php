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
        <p class="title">PickApp</p>
        <p class="desc">Los productos de siempre, ahora online</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="logo pagina">
    </div>
</body>

</html>