<?php

namespace JustLimitLargeImages\Controller;

class LimitImageSizeController {

    /**
     * Lock to prevent infinite recursion when filtering the default image.
     * @var bool
     */
    protected $lock = false;

    const LIMIT_FULL_SIZE_TO     = 'large';
    const LIMIT_FEATURED_SIZE_TO = 'medium';

    public function __construct() {
    
        add_filter( 'wp_get_attachment_image_src', [ $this, 'limit_thumbnail_size' ], -1, 4 );

    }

    public function limit_thumbnail_size( $image, $attachment_id, $size, $icon ) {

        if ( ! $this->lock ) {
            $this->lock = true;

            if ( 'full' === $size ) {
                $image = wp_get_attachment_image_src( $attachment_id, self::LIMIT_FULL_SIZE_TO );
            }

            if ( 'post-thumbnail' === $size ) {
                $image = wp_get_attachment_image_src( $attachment_id, self::LIMIT_FEATURED_SIZE_TO );
            }

            $this->lock = false;
        }

        return $image;

    }

}
