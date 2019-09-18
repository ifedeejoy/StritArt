<?php 
    header('Cache-Control: max-age='.(5184000 * 3).', must-revalidate');
    $lastModified=filemtime($_SERVER['SCRIPT_FILENAME']);
    //get a unique hash of this file (etag)
    $etagFile = md5_file($_SERVER['SCRIPT_FILENAME']);
    //get the HTTP_IF_MODIFIED_SINCE header if set
    $ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
    //get the HTTP_IF_NONE_MATCH header if set (etag: unique file hash)
    $etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);

    //set last-modified header
    header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
    //set etag-header
    header("Etag: $etagFile");
    //make sure caching is turned on
    header('Cache-Control: public');
    //check if page has changed. If not, send 304 and exit
    if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$lastModified || $etagHeader == $etagFile)
    {
           header("HTTP/1.1 304 Not Modified");
           exit;
    }
    session_start();
    include './functions/function.php';
    $navbar = 'scrolling-navbar';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo AppName();?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
    <link rel="apple-touch-startup-image" href="/img/icon.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#222835">
    <meta name="msapplication-TileColor" content="#222835">
    <meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple|3d|anaglyph|3d-float" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet">
    <link href="/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
        /* width */
        ::-webkit-scrollbar {
          width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px #1C2331; 
          border-radius: 10px;
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #0d58c8; 
          border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #1C2331; 
        }

        ::-moz-scrollbar {
          width: 5px;
        }

        /* Track */
        ::-moz-scrollbar-track {
          box-shadow: inset 0 0 5px #1C2331; 
          border-radius: 10px;
        }
         
        /* Handle */
        ::-moz-scrollbar-thumb {
          background: #0d58c8; 
          border-radius: 10px;
        }

        /* Handle on hover */
        ::-moz-scrollbar-thumb:hover {
          background: #1C2331; 
        }
    </style>
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>