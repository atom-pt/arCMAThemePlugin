<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture() ?>" dir="<?php echo sfCultureInfo::getInstance($sf_user->getCulture())->direction ?>">
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="<?php echo public_path('favicon.ico') ?>"/>
  <?php include_stylesheets() ?>
  <?php include_component_slot('css') ?>
  <?php if ($sf_context->getConfiguration()->isDebug()): ?>
    <script type="text/javascript" charset="utf-8">
    less = { env: 'development', optimize: 0, relativeUrls: true };
    </script>
  <?php endif; ?>
  <?php include_javascripts() ?>
</head>
<body class="yui-skin-sam <?php echo $sf_context->getModuleName() ?> <?php echo $sf_context->getActionName() ?>">

  <?php echo get_partial('header') ?>

  <?php include_slot('pre') ?>

  <div id="wrapper" class="container" role="main">

    <?php echo get_component('default', 'alerts') ?>

    <div class="row">

      <div class="span3">

        <div id="sidebar">

          <?php include_slot('sidebar') ?>

        </div>

      </div>

      <div class="span9">

        <div id="main-column">


          <?php include_slot('title') ?>

          <?php include_slot('before-content') ?>

          <?php if (!include_slot('content')): ?>
            <div id="content">

              <!-- INSERI ESTE BLOCO AQUI PQ ASSIM O CAROUSSEL DESAPARECE NAS OUTRAS PAGINAS -->
              <h2>Carousel Example</h2>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="/plugins/arCmaThemePlugin/images/Bordalo_Pinheiro.png" alt="Zé Povinho" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="/plugins/arCmaThemePlugin/images/Bordalo_Pinheiro.png" alt="Zé Povinho" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="/plugins/arCmaThemePlugin/images/Bordalo_Pinheiro.png" alt="Zé Povinho" style="width:100%;">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <?php echo $sf_content ?>
            </div>
          <?php endif; ?>

          <?php include_slot('after-content') ?>



        </div>

      </div>

    </div>

  </div>

  <?php include_slot('post') ?>

  <?php echo get_partial('footer') ?>

</body>
</html>
