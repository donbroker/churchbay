    <div class="<?php echo adverts_css_classes( 'advert-item advert-item-col-'.(int)$columns, get_the_ID() ) ?>">

        <?php $image = adverts_get_main_image( get_the_ID() ) ?>
        <div class="advert-img">
            <?php if($image): ?>
                <img src="<?php esc_attr_e($image) ?>" alt="" class="advert-item-grow" />
            <?php endif; ?>
        </div>

        <div class="advert-post-title">
            <?php $id = get_the_ID();
            $stripe_id = get_post_meta( $id, "adverts_stripe_id", true);
            if($stripe_id) : echo '<b>(SOLD)</b>'; endif;
            ?>
            <span title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link"><?php the_title() ?></span>
            <a href="<?php the_permalink() ?>" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link-wrap"></a>
        </div>

        <div class="advert-published ">

            <span class="advert-date"><?php echo date_i18n( get_option( 'date_format' ), get_post_time( 'U', false, get_the_ID() ) ) ?></span>
            <span class="advert-item-col-1-only advert-location adverts-icon-location"><?php echo get_post_meta( get_the_ID(), "adverts_location", true ) ?></span>

            <?php $price = get_post_meta( get_the_ID(), "adverts_price", true ) ?>
            <?php if( $price ): ?>
            <div class="advert-price"><?php esc_html_e( adverts_price( get_post_meta( get_the_ID(), "adverts_price", true ) ) ) ?></div>
            <?php endif; ?>
        </div>
    </div>
