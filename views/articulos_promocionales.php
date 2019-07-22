<!doctype html>
<html lang="en">

<?php include("header.php")  ?>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    UEES REQUERIMIENTOS
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="instrucciones.php">
                            <i class="material-icons">dashboard</i>
                            <p>Instrucciones</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artes.php">
                            <i class="material-icons">collections</i>
                            <p>Artes</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="articulos_promocionales.php">
                            <i class="material-icons">card_giftcard</i>
                            <p>Artículos Promocionales</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="campana_publicitaria.php">
                            <i class="material-icons">radio</i>
                            <p>Campaña Publicitaria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="campana_pautada.php">
                            <i class="material-icons">thumb_up_alt</i>
                            <p>Campañas Pautadas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailing.php">
                            <i class="material-icons">contact_mail</i>
                            <p>Mails Automaricos - CRM</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="señaletica_stand.php">
                            <i class="material-icons">calendar_today</i>
                            <p>Señalética / Stands</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="otros.php">
                            <i class="material-icons">fiber_new</i>
                            <p>Otros</p>
                        </a>
                    </li>
                    <!-- your sidebar here -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">Universidad Espíritu Santo</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="material-icons">notifications</i>
                                    <p class="d-lg-none d-md-block">
                                        Notifications
                                    </p>
                                </a>
                            </li>
                            <!-- your navbar here -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <!-- your content here -->
                </div>
            </div>
            <?php include("firma.php") ?>
        </div>
    </div>
    <?php include("footer.php")  ?>
</body>

</html>