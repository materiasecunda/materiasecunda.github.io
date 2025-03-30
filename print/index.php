<?php
$files = scandir('.');
echo '<h1>Directory Listing</h1>';
echo '<ul>';
foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    echo '<li><a href="' . htmlspecialchars($file) . '">' . htmlspecialchars($file) . '</a></li>';
}
echo '</ul>';
?>