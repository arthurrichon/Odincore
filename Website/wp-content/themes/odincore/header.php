<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Odincore</title>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css"/>

    <!-- BOOTSTRAP -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!--SCROLL HORIZONTALE-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.js"></script>
    <script>
        $(function(){
            $("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
            $(".post").wrap("<td></td>");
            $("body").mousewheel(function(event, delta) {
                this.scrollLeft -= (delta * 30);
                event.preventDefault();
            });
        });
    </script>

</head>
<body>

<!--NAV-->

<!--<nav class="navbar navbar-default">-->
<!--    <div class="container-fluid">-->
<!--        <!-- Brand and toggle get grouped for better mobile display -->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="#">Brand</a>-->
<!--        </div>-->
<!---->
<!--        <!-- Collect the nav links, forms, and other content for toggling -->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            --><?php
//            wp_nav_menu( array(
//                    'theme_location'    => 'primary',
//                    'menu_class'        => 'nav navbar-nav',
//                    'walker'            => new wp_bootstrap_navwalker())
//            );
//            ?>
<!--        </div><!-- /.navbar-collapse -->
<!--    </div><!-- /.container-fluid -->
<!--</nav>-->