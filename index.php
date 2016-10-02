<?php
$max = 5;
if(isset($_GET['max'])){
  $max = ($_GET['max'] > 0 ? $_GET['max'] : 5);
}
?>

<html>
<head>
<title>
  World Maker - PHP
</title>
<link rel="stylesheet" href="assets/foundation.min.css"/>
<link rel="stylesheet" href="assets/style.css"/>
</head>
<body>
<div class="row">
<div class="small-12 medium-6 columns">
  <h1>PHP WorldMaker</h1>
</div>
</div>

<div class="row">
  <div id="title" class="small-12 medium-4 columns category-wrap">
    <img src="assets/img/refresh.png" id="title-regenerate" class='float-right turnable'>
    <h3>Title</h3>
    <ul id="title-list">
    </ul>
  </div>

  <div id="name" class="small-12 medium-4 columns category-wrap">
    <img src="assets/img/refresh.png" id="name-regenerate" class='float-right turnable'>
    <h3>Name</h3>
    <ul id="name-list">
    </ul>
  </div>

  <div id="plot" class="small-12 medium-4 columns category-wrap">
    <img src="assets/img/refresh.png" id="plot-regenerate" class='float-right turnable'>
    <h3>Plot</h3>
    <ul id="plot-list">
    </ul>
  </div>
</div>

<div class="row">
  <div id="armor" class="small-12 medium-4 columns category-wrap">
    <img src="assets/img/refresh.png" id="armor-regenerate" class='float-right turnable'>
    <h3>Armor</h3>
    <ul id="armor-list">
    </ul>
  </div>

  <div id="weapon" class="small-12 medium-4 columns category-wrap">
    <img src="assets/img/refresh.png" id="weapon-regenerate" class='float-right turnable'>
    <h3>Weapon</h3>
    <ul id="weapon-list">
    </ul>
  </div>

  <div id="planet" class="small-12 medium-4 columns category-wrap">
    <img src="assets/img/refresh.png" id="planet-regenerate" class='float-right turnable'>
    <h3>Planet</h3>
    <ul id="planet-list">
    </ul>
  </div>
</div>

<footer class="row">
  <div class="small-12 medium-4 columns">
    <div class="copyright">
      <small>Original application created by: /u/Nextmastermind over on Reddit.</small>
    </div>
  </div>
  <div class="small-12 medium-4 columns">
    <small>PHP Port by Erus.me, find me on Github @ <a href="http://github.com/jkesselring" rel="nofollow" target="_blanket">jkesselring</a></small>
  </div>
  <div class="small-12 medium-4 columns">
    <small>Icon made by <a href="http://www.flaticon.com/authors/gregor-cresnar" rel="nofollow" target="_blank">http://www.flaticon.com/authors/gregor-cresnar</a> from <a href="http://www.flaticon.com" rel="nofollow" target="_blank">www.flaticon.com</a></small>
  </div>
</footer>

<script src="assets/js/page.js"></script>
<script>
window.onload = function () {
  regenerate(<?php echo isset($_GET['max']) && $_GET['max'] > 0 ? $_GET['max'] : 5 ?>);
};
</script>
</body>
</html>