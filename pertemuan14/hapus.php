<?php

// menjalankan session
session_start();

// jika tidak ada session login maka akan berpindah ke halaman login
if( !isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
}

// menghubungkan ke functions.php
require 'functions.php';

$id = $_GET["id"];

if(delete($id)>0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'index.php';
    </script>
    ";
}