<?php

session_start(); // memulai session
session_destroy(); // menghapus semua data session

// redirect ke halaman login
header("Location: ../login/login.php");
exit();
