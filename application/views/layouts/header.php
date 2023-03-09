<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <meta name="theme-color" content="#000" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PIXES</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    
    <!-- Meta Started -->
    <meta name="description" content="Pixes is a photo and video sharing social networking service. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers." />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://www.letschat.cu.ma/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if(!empty($title)){ echo $title; } else { echo "Pixes"; } ?>" />
    <meta property="og:description" content="Pixes is a photo and video sharing social networking service. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers." />
    <meta property="og:url" content="https://letschat.cu.ma/" />
    <meta property="og:site_name" content="India" />
    <meta property="article:modified_time" content="2023-01-07T22:00:00+00:00" />
    <meta property="og:image" content="https://letschat.cu.ma/assets/assets/images/logo.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://letschat.cu.ma/assets/assets/images/logo.png" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://letschat.cu.ma/#website","url":"https://letschat.cu.ma/","name":"India","description":"The Real Flow","potentialAction":[{"@type":"SearchAction","target":"https://letschat.cu.ma/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://letschat.cu.ma/#primaryimage","inLanguage":"en-US","url":"https://letschat.cu.ma/assets/assets/images/logo.png","width":1200,"height":630},{"@type":"WebPage","@id":"https://letschat.cu.ma/#webpage","url":"https://letschat.cu.ma/","name":"Pixes","isPartOf":{"@id":"https://letschat.cu.ma/#website"},"primaryImageOfPage":{"@id":"https://letschat.cu.ma/#primaryimage"},"datePublished":"2018-03-20T23:59:18+00:00","dateModified":"2022-10-08T22:43:45+00:00","description":"Pixes is a photo and video sharing social networking service. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers.","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://letschat.cu.ma/"]}]}]}</script>
    <!-- Meta Ended -->
    
    <link rel="stylesheet" href="assets/assets/css/style-starter.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="manifest" href="https://letschat.cu.ma//manifest.webmanifest">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <i class="fas fa-camera"></i>PIXES
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <!-- <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <!-- <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul> -->
                </div>
                <!-- search button -->
                <!-- <div class="search-right ml-lg-3">
                    <div class="search-container">
                        <form action="/search" method="get">
                            <input class="search expandright" id="searchright" type="search" name="q"
                                placeholder="Search">
                            <label class="button searchbutton" for="searchright"><i class="fas fa-search"></i></label>
                        </form>
                    </div>
                </div> -->
                <div class="search-right ml-lg-3 custome-right">
                    <a href="<?php echo base_url()."showprofile/".session_usercode; ?>">
                        <div class="mode-container">
                            <i class="fab fa-facebook-messenger"></i>
                        </div>
                    </a>
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->