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
                <div class="col-sm-3"></div>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>

            <!-- content -->
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div> 

            <div class="col-md-1 col-lg-1"></div>

            <!-- sidebar -->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" id="sidebar">
                <div id="insidebar">
                    <jdoc:include type="modules" name="sidebar" style="well" />
                </div>
            </div>

            <div class="col-lg-1"></div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="container footer">
        <p><br />Copyright &copy; <?php echo date('Y'); ?> - <?php echo $app->getCfg('sitename'); ?></p>
    </div>


    <!-- 
            YOUR CODE HERE
    -->

<jdoc:include type="modules" name="debug" />
</body>

</html>