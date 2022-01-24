<?php
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/font-awesome.min.css">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
</head>
<body>

<div class="menu">
    <div class="box-usuario">
        <?php 
            if($_SESSION['img'] == ''){
        ?>
        <div class="avatar-usuario">
            <i class="fa fa-user"></i>
        </div><!--avatar-usuario-->
        <?php }else{ ?>
            <div class="imagem-usuario">
            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/ <?php echo $_SESSION['img']; ?>" />
        <?php } ?>
        <div class="nome-usuario">
            <p><?php echo $_SESSION['nome']; ?></p>
            <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
        </div><!--nome-usuario-->
    </div><!--box-usuario-->
</div><!--menu-->

<header>
    <div class="center">
        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div><!--menu-btn-->
        <div class="Loggout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="fas fa-window-close"></i> <span>Sair</span><a>
        </div><!--loggout-->

        <div class="clear"></div>
    </div>
</header>

<div class="content">

    <div class="box-content left w100">

    </div><!--box-content-->

    <div class="box-content left w100">

    </div><!--box-content-->

    <div class="box-content left w50">

    </div><!--box-content-->

    <div class="box-content left w50">

    </div><!--box-content-->

    <div class="clear"></div>

</div><!--content-->
</body>
</html>