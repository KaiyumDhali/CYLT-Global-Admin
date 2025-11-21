<?php
$target = $_SERVER['DOCUMENT_ROOT'] . '/setting/storage/app/public';
$link   = $_SERVER['DOCUMENT_ROOT'] . '/setting/public/storage';

if (!file_exists($link)) {
    if (symlink($target, $link)) {
        echo "Symlink created successfully!";
    } else {
        echo "Failed to create symlink!";
    }
} else {
    echo "Symlink already exists.";
}
?>
