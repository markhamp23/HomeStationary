<?php
include_once('../rss/rss_twitter.php');
include_once('../rss/rss_twitter_2.php');
session_start();
if(session_destroy()){
    header("Location: ../.././index.php"); // Redirecting To Home Page
}
?>