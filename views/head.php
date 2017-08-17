<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Daniel Rocha Lopes - Rolha T19 - danirolopes@gmail.com">

    <title>Centro Educacional Santos Dumont</title>
    <link rel="shortcut icon" href="<?php echo URL;?>images/favicon.ico" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL;?>css/bootstrap.css" rel="stylesheet">

    <!-- Theme CSS -->
    <?php if($this->controller != 'admin') { ?>
    <link href="<?php echo URL;?>css/style.css" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'index') { ?>
    <link href="<?php echo URL;?>css/home.css" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'historia') { ?>
    <link href="<?php echo URL;?>css/historia.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'construcao') { ?>
    <link href="<?php echo URL;?>css/construcao.css" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'vestibulinho') { ?>
    <link href="<?php echo URL;?>css/vestibulinho.css" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'admin') { ?>
    <link href="<?php echo URL;?>css/admin.css" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'admin-login') { ?>
    <link href="<?php echo URL;?>css/admin-login.css" rel="stylesheet">
    <?php } ?>
    <?php if($this->controller == 'doador' || $this->controller == 'parceiro' || $this->controller == 'voluntario') { ?>
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="<?php echo URL;?>css/queroAjudar.css" rel="stylesheet">
    <?php } ?>


    <!-- Custom Fonts -->
    <link href="<?php echo URL;?>font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
