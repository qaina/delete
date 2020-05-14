<?php
function seo() {
    global $page, $paged, $post;
    $output = '';
    $output.= "Breaking News Updates";
    return $output;
}
function social_share() {
    global $page, $paged, $post;
    $output = '';
    if (is_404()) {
        $canonical = 'https://ml.qaina.net/';
    } else {
        $canonical = 'https://ml.qaina.net/' . ltrim(esc_url($_SERVER['REQUEST_URI']), '/');
    };
    $output.= '<div class="icon-bar">' . "\n";
    $output.= '<a href="https://www.facebook.com/sharer/sharer.php?&app_id=300243467237669&display=popup&u=' . $canonical . '&redirect_uri=' . $canonical . '&quote=' . esc_attr($content) . '" class="share-icon icon-facebook"><em class="qi qi-facebook-1"></em></a>' . "\n";
    $output.= '</div>' . "\n";
    return $output;
}
