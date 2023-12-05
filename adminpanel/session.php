<?php
session_start();
if ($_SESSION['login'] == false) {
    header('location: login.php');
    exit(); // Pastikan untuk keluar setelah mengarahkan pengguna ke halaman login
}
?>