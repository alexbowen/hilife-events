<?php
$wp_footer = @json_decode(file_get_contents(WP_BASE_URL . '/wp-json/hilife/v1/footer'), true);
echo $wp_footer['html'] ?? '';
?>