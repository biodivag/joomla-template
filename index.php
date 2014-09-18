<?php
defined('_JEXEC') or die;

include_once JPATH_THEMES . '/' . $this->template . '/logic.php';
?><!doctype html>

<html lang="<?php echo $this->language; ?>">

    <head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')) . ' ' . $active->alias . ' ' . $pageclass; ?>" role="document">

    <!-- NAVBAR -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="biodivag-logo">
                        <a href="<?php echo JURI::base(); ?>" title="Biodiversity Home"><img src="templates/biodiversityag/images/biodivag-logo.jpg" alt="Biodiversity Logo" /></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-modules">
                            <span class="sr-only">Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-modules">
                        <jdoc:include type="modules" name="navbar" />
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container" id="main-container">
        <div class="row">
            <div class="col-sm-3">
                <div id="insidebar">
                    <jdoc:include type="modules" name="sidebar" style="none" />
                    <jdoc:include type="modules" name="latestnews" style="none" />
                </div>
            </div>

            <!-- content -->
            <div class="col-sm-9">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div> 
        </div>
    </div>

    <!-- FOOTER -->
    <div id="divider"></div>
    <footer>
        <div class="container" id="footer-container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="un-dekade">
                        <img src="templates/biodiversityag/images/un-dekade-2013.jpg" alt="UN-Dekade Logo" />
                    </div>
                </div>
                <div class="col-sm-9">
                    <h2>Ihre Ansprechpartner</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Prof. Dr. Heide-Rose Vatterrott</p>

                            <p>Hochschule Bremen<br>
                                Fakultät 4 Elektrotechnik und Informatik<br>
                            </p>
                            <p>
                                Flughafenallee 10<br>
                                28199 Bremen</p>
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i><a href="mailto:heide-rose.vatterrott@hs-bremen.de">heide-rose.vatterrott@hs-bremen.de</a><br>
                                <i class="glyphicon glyphicon-phone"></i>+49 (0) 421 5905 5434<br>
                                <i class="glyphicon glyphicon-print"></i>+49 (0) 421 5905 5484<br>
                            </p>
                            <p>&nbsp;</p>
                            <h5>Technischer Mitarbeiter:</h5>
                                <p>Martin Winkler (M.Sc.)</p>

                                <i class="glyphicon glyphicon-envelope"></i><a href="mailto:martin.winkler@hs-bremen.de">martin.winkler@hs-bremen.de</a><br>
                                <i class="glyphicon glyphicon-phone"></i>+49 (0) 421 5905 5096<br>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p>Prof. Dr. Heiko Brunken</p>

                            <p>Hochschule Bremen<br>
                                Fakultät 5 Natur und Technik<br>
                                Internationaler Studiengang Technische<br>
                                und Angewandte Biologie</p>
                            <p>
                                Neustadtswall 30<br>
                                28199 Bremen 
                            </p>
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i><a href="mailto:heiko.brunken@hs-bremen.de">heiko.brunken@hs-bremen.de</a><br>
                                <i class="glyphicon glyphicon-phone"></i>+49 (0) 421 5905 4280<br>
                                <i class="glyphicon glyphicon-print"></i>+49 (0) 421 5905 4250<br>
                            </p>
                        </div>
                    </div>
                    <div class="row hsb-logo">
                        <div class="col-sm-12">
                            <img src="templates/biodiversityag/images/hsb-logo-transparent.png" alt="Logo HS Bremen" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <p id="copyright">Copyright &copy; <?php echo date('Y'); ?> - <?php echo $app->getCfg('sitename'); ?></p>
    </footer>

<jdoc:include type="modules" name="debug" />
</body>

</html>