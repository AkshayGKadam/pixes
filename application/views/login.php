<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PIXES - Login</title>
    
    <!-- Meta Started -->
    <meta name="description" content="Pixes is a photo and video sharing social networking service. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers." />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://www.letschat.cu.ma/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pixes" />
    <meta property="og:description" content="Pixes is a photo and video sharing social networking service. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers." />
    <meta property="og:url" content="https://letschat.cu.ma/" />
    <meta property="og:site_name" content="India" />
    <meta property="article:modified_time" content="2023-01-07T22:00:00+00:00" />
    <meta property="og:image" content="https://letschat.cu.ma/assets/assets/images/logo.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://letschat.cu.ma/assets/assets/images/logo.png" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://letschat.cu.ma/#website","url":"https://letschat.cu.ma/","name":"India","description":"The Real Flow","potentialAction":[{"@type":"SearchAction","target":"https://letschat.cu.ma/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://letschat.cu.ma/#primaryimage","inLanguage":"en-US","url":"https://letschat.cu.ma/assets/assets/images/logo.png","width":1200,"height":630},{"@type":"WebPage","@id":"https://letschat.cu.ma/#webpage","url":"https://letschat.cu.ma/","name":"Pixes","isPartOf":{"@id":"https://letschat.cu.ma/#website"},"primaryImageOfPage":{"@id":"https://letschat.cu.ma/#primaryimage"},"datePublished":"2018-03-20T23:59:18+00:00","dateModified":"2022-10-08T22:43:45+00:00","description":"Pixes is a photo and video sharing social networking service. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers.","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://letschat.cu.ma/"]}]}]}</script>
    <!-- Meta Ended -->
    
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <!-- <img src="assets/assets/images/login.jpg" alt="login" class="login-card-img"> -->
            <div class="img-block">
                <img src="assets/assets/images/login1.jpg" class="login1-img" alt="login">
                <img src="assets/assets/images/login2.jpg" class="login2-img" alt="login">
            </div>
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/assets/images/logo.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action="#" id="login_form" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="btnLogin" class="btn btn-block login-btn mb-4" type="button" value="Login">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="<?php echo base_url(); ?>signup" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/assets/js/api.js'); ?>"></script>
</body>
</html>
