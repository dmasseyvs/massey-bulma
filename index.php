<!DOCTYPE html>
<html>
<head>
    <?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://football-web-pages1.p.rapidapi.com/appearances.json?comp=1&team=1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: football-web-pages1.p.rapidapi.com",
		"x-rapidapi-key: 4de0d24ca3mshe5ec51d97772493p14e231jsndb5d636c12be"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Massey Web Design</title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://kit.fontawesome.com/1f20637714.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="hero is-primary is-fullheight">
  <!-- Hero head: will stick at the top -->
 <?php
 if ($err) {
     echo "cURL Error #:" . $err;
 } else {
     echo $response;
 }?>
 ?>
  <div class="hero-head">
    <nav class="navbar data-sticky">
      <div class="container">
        <div class="navbar-brand">
          <a href="/" class="logo navbar-item is-family-primary has-text-link-light is-size-3">m@ssNet</a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item">
              About
            </a>
            <a class="navbar-item">
              Work
            </a>
            <a class="navbar-item">
              Blog
            </a>
            <a class="navbar-item is-active">
              Contact
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="timeline is-centered">
        <header class="timeline-header">
          <span class="tag is-medium">2002</span>
        </header>
        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <p class="heading">September 2002</p>
            <p>Teesside University - Web Development</p>
          </div>
        </div>
        <header class="timeline-header">
          <span class="tag">2005</span>
        </header>
        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content">
            <p class="heading">September 2005</p>
            <p>Freelance - Front End Developer</p>
          </div>
        </div>
        <!--<div class="timeline-item">-->
          <!--<div class="timeline-marker is-image is-32x32">-->
            <!--<img src="https://bulma.io/images/placeholders/32x32.png">-->
          <!--</div>-->
          <!--<div class="timeline-content">-->
            <!--<p class="heading">February 2016</p>-->
            <!--<p>Timeline content - Can include any HTML element</p>-->
          <!--</div>-->
        <!--</div>-->
        <header class="timeline-header">
          <span class="tag">2014</span>
        </header>
        <div class="timeline-item">
          <div class="timeline-marker is-icon">
            <i class="fa fa-flag"></i>
          </div>
          <div class="timeline-content">
            <p class="heading">December 2014</p>
            <p>Visualsoft - Front End Developer</p>
          </div>
        </div>
        <header class="timeline-header">
          <span class="tag is-medium">Present</span>
        </header>
      </div>
    </div>
  </div>
</section>
<section></section>
<!--<section>-->
  <!--<div class="tile is-ancestor">-->
    <!--<div class="tile is-vertical is-8">-->
      <!--<div class="tile">-->
        <!--<div class="tile is-parent is-vertical">-->
          <!--<article class="tile is-child notification is-primary">-->
            <!--<p class="title">Vertical...</p>-->
            <!--<p class="subtitle">Top tile</p>-->
          <!--</article>-->
          <!--<article class="tile is-child notification is-warning">-->
            <!--<p class="title">...tiles</p>-->
            <!--<p class="subtitle">Bottom tile</p>-->
          <!--</article>-->
        <!--</div>-->
        <!--<div class="tile is-parent">-->
          <!--<article class="tile is-child notification is-info">-->
            <!--<p class="title">Middle tile</p>-->
            <!--<p class="subtitle">With an image</p>-->
            <!--<figure class="image is-4by3">-->
              <!--<img src="https://bulma.io/images/placeholders/640x480.png">-->
            <!--</figure>-->
          <!--</article>-->
        <!--</div>-->
      <!--</div>-->
      <!--<div class="tile is-parent">-->
        <!--<article class="tile is-child notification is-danger">-->
          <!--<p class="title">Wide tile</p>-->
          <!--<p class="subtitle">Aligned with the right tile</p>-->
          <!--<div class="content">-->
            <!--&lt;!&ndash; Content &ndash;&gt;-->
          <!--</div>-->
        <!--</article>-->
      <!--</div>-->
    <!--</div>-->
    <!--<div class="tile is-parent">-->
      <!--<article class="tile is-child notification is-success">-->
        <!--<div class="content">-->
          <!--<p class="title">Tall tile</p>-->
          <!--<p class="subtitle">With even more content</p>-->
          <!--<div class="content">-->
            <!--&lt;!&ndash; Content &ndash;&gt;-->
          <!--</div>-->
        <!--</div>-->
      <!--</article>-->
    <!--</div>-->
  <!--</div>-->
<!--</section>-->
<script type="text/javascript" src="lib/main.js"></script>
</body>
</html>
