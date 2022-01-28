<?php

// Premiere ligne
session_start();
$_SESSION['couleur'] = 'white';

if (isset($_POST['submit'])) {
    $_SESSION['couleur'] = $_POST['color'];
}

$color = $_SESSION['couleur'];

require __DIR__ . '/home.php';