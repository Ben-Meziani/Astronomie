<?php
$images = $viewVars['image'];
$title = $viewVars['title'];
?>
<div class="container-fluid text-center">
<div class="row">
    <div class="col-lg-10">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php $i = 0;
                foreach ($images as $key => $row) {
                    foreach ($row as $k => $r) {
                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        }
                ?>

                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i; ?>" class="<?= $actives; ?>" aria-current="true" aria-label="Slide 1"></button>
                <?php $i++;
                    }
                } ?>
            </div>
            <div class="carousel-inner">
                <?php $i = 0;
                foreach ($images as $key => $row) {
                    echo "{$key} => {$row} ";
                    foreach ($row as $k => $r) {

                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        }
                ?>
                        <div class="carousel-item <?= $actives; ?>" data-bs-interval="10000">
                            <img src="<?= $r['img_src']; ?>" width=500px>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                    <?php $i++;
                    }
                } ?>
                        </div>
            </div>
            <button class="carousel-control-prev text-primary" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style="color: white" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" style="color: white" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
</div>
