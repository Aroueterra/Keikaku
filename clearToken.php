<?php
session_start();
unset($_SESSION['fb_access_token']);
unset($_SESSION['DETAILS']);
header('Location: ' . $_SERVER['HTTP_REFERER']);