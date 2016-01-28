<div class="mdl-cell mdl-cell--12-col">
    <div class="mdl-card mdl-cell mdl-cell--12-col">
        <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>);">
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
            <?php the_content('Lire la suite...'); ?>
        </div>
        <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo" style="background-image: url(<?php echo get_avatar_url($post->post_author); ?>);"></div>
            <div>
                <strong><?php echo get_the_author_meta('display_name');?></strong>
                <span><?php the_time( get_option( 'date_format' ) ); ?></span>
            </div>
        </div>
    </div>
</div>