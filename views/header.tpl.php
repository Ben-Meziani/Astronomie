<?php
if (isset($viewVars['images'])) {
    $images = $viewVars['images'];
} elseif(isset($viewVars['videos'])) {
    $videos = $viewVars['videos'];
}
if (isset($viewVars['explanation'])) {
  $explanation = $viewVars['explanation'];
}
if (isset($viewVars['title'])) {
  $title = $viewVars['title'];
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomie</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body style="background-color: grey;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Astronomie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item <?php if($page == "map"){ echo "active"; } ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="dailyPicture">Picture of the day</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mars" tabindex="-1" aria-disabled="true">Mars</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>