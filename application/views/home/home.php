<section class="slider">		
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators visible-xs">
                <?php if (isset($event_images) && is_array($event_images)): ?>
                    <?php foreach ($event_images as $key => $event_image): ?>
                        <li data-target="#carousel-slider" data-slide-to="<?= $key ?>" class="<?= !$key ? 'active' : '' ?>"></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                    <li data-target="#carousel-slider" data-slide-to="3"></li>
                    <li data-target="#carousel-slider" data-slide-to="4"></li>
                <?php endif; ?>
            </ol>
            <div class="carousel-inner" style="max-height: 1000px;">
                <?php if (isset($event_images) && is_array($event_images)): ?>
                    <?php foreach ($event_images as $key => $event_image): ?>
                        <div class="item <?= !$key ? 'active' : '' ?>">
                            <img src="<?= $event_image->url ?>" alt="<?= $event_image->name ?>" class="img-responsive">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="item active">						
                        <img src="<?= img_url() ?>/one.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= img_url() ?>/two.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= img_url() ?>/three.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= img_url() ?>/four.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= img_url() ?>/five.jpg" class="img-responsive" alt="">
                    </div>
                <?php endif; ?>
            </div>
            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i> 
            </a>
            <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i> 
            </a>
        </div>
    </div>
</section>