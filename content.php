<div class="mdl-cell mdl-cell--12-col">
    <div <?php post_class("mdl-card mdl-cell mdl-cell--12-col"); ?>>
        <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
            <?php the_content('Lire la suite...'); ?>
        </div>
        <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo"></div>
            <div>
                <strong><?php echo get_the_author_meta('display_name');?></strong>
                <span><?php the_date(); ?></span>
            </div>
        </div>
    </div>
</div>