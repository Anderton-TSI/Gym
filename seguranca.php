<?php
session_start();
require_once('Academia.php');

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    return;
}