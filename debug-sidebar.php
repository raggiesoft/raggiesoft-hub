<?php
$request_uri = '/raggiesoft-books/books/rachel/b015/c003/p001';
$cdnBaseUrl = 'https://assets.raggiesoft.com';
$config = ['sequenceName' => 'Test'];
ob_start();
include 'includes/components/sidebars/raggiesoft-books/sidebar-book.php';
$out = ob_get_clean();
echo $out;
