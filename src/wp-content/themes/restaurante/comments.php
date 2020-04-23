<?php

function comments_number( $zero = false, $one = false, $more = false, $post_id = 0 ) {
   echo get_comments_number_text( $zero, $one, $more, $post_id );

}