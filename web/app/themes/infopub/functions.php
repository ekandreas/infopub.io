<?php
include 'globals.php';
include 'filters.php';

if (defined('WP_CLI') && WP_CLI) {
    include __DIR__ . '/forge.php';
}