<?php
/**
 * Main index page
 *
 * @category
 * @package   Las-Util-Php
 * @author    DC Slagel <dcs@mailworks.org>
 * @copyright 2019 DC Slagel
 * @license   MIT
 */

/**
 * Change to the project root so that all pathing is relative to it.
 */
chdir(dirname(__DIR__));
require_once dirname(__DIR__).'/config/config.php';
?>

<!doctype html>
<html>
<head>
  <title>Las Util</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
<div class="container" style="margin-top:30px">
<!-- Header Section -->
<header class="jumbotron text-center row" style="margin-bottom:2px; background:pale; padding:20px;">
    <?php include('templates/header-for-template.php'); ?>
</header>

<!-- Body Section -->
    <div class="row" style="padding-left: 0px">
        <!-- Left-side column Menu Section -->
        <?php include('templates/nav.php'); ?>

        <!-- Center Column Content Section -->
        <div class="col-sm-8">
            <?php
            // Grabs the URI and breaks in apart in case we have querystring stuff
            $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

            $host = $_SERVER['HTTP_HOST'];
            // Route it up!
            switch ($request_uri[0]) {
                case '/upload':
                    require 'templates/upload.php';
                    break;
                case '/about':
                    require 'src/about.php';
                    break;
                case '/receive':
                    require 'src/receive-file.php';
                    break;
                case '/display':
                    require 'src/display.php';
                    break;
            }
            ?>
        </div>
        
        <!-- Right-side Column Content Section -->
        <aside class="col-sm-2">
            <?php include('templates/info-col.php'); ?>
        </aside>
    </div>
    <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
        <?php include('templates/footer.php'); ?>
    </footer>
</div>
</body>
</html>

