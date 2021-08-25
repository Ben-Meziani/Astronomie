<?php
if (isset($viewVars['images'])) {
    $images = $viewVars['images'];
}
$videos = $viewVars['videos'];
$explanation = $viewVars['explanation'];
$title = $viewVars['title'];
?>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h1 class="section-heading mb-5">
                        <span class="section-heading-upper">
                            <?php if (isset($images)) {
                                echo 'Photo du jour :';
                            } elseif (isset($videos)) {
                                echo 'Video du jour :';
                            } ?></span>
                    </h1>
                    <h3 class="section-heading mb-5">
                        Titre : <?= $title ?>
                    </h3>
                    <ul class="list-unstyled list-hours mb-5 text-center mx-auto">
                        <li>
                            <?php
                            if (isset($images)) {
                                echo '<img src="' . $images . '" alt="" style="width: 250px; height: 250px">';
                            } else {
                                echo '<iframe src="' . $videos . '" alt="" style="width: 500px; height: 500px"></iframe>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4  text-center">
                            <span class="section-heading-upper">
                                <?php if (isset($images)) {
                                    echo 'Description de la photo du jour';
                                } elseif (isset($videos)) {
                                    echo 'Description de la video du jour';
                                } ?></span>
                        </h2>
                        <?php
                        echo '<p>' . $explanation . '</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>