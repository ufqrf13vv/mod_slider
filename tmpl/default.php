<?php
defined('_JEXEC') or die;
?>
<div class="main-slider-1">
    <?php foreach ($images as $image) { ?>
        <div class="main-slide">
            <?php
            if ($image->href) { ?>
            <a href="<?php echo $image->href; ?>">
                <?php } ?>
                <img src="<?php echo $image->src; ?>" alt="<?php echo $image->title; ?>">
                <?php if ($image->title) { ?>
                    <div class="main-slider__title">
                        <?php echo $image->title; ?>
                    </div>
                <?php } ?>
                <?php if ($image->subtitle) { ?>
                    <div class="main-slider__subtitle">
                        <?php echo $image->subtitle; ?>
                    </div>
                <?php } ?>
                <?php
                if ($image->href) {
                    echo '</a>';
                } ?>
        </div>
        <?php
    }
    ?>
</div>