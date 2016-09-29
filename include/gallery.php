<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style>
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<h2>Myndasafn</h2>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/fjords.jpg">
      <img src="img/fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Flott mynd af firði.</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/forest.jpg">
      <img src="img/forest.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Flott mynd af skógi.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/lights.jpg">
      <img src="img/lights.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Hér sjást norðurljósin.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/mountains.jpg">
      <img src="img/mountains.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Fjöll</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland.jpg">
      <img src="img/iceland.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Annað fjall.</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland2.jpg">
      <img src="img/iceland2.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Ísland.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland3.jpg">
      <img src="img/iceland3.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Foss.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland4.jpg">
      <img src="img/iceland4.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Annar foss.</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland5.jpg">
      <img src="img/iceland5.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Önnur mynd af fjöllum.</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland6.jpg">
      <img src="img/iceland6.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Klettar.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/iceland7.jpg">
      <img src="img/iceland7.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Norðurljós.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/nature.jpg">
      <img src="img/nature.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Tré.</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
 
</div>
</body>
</html>