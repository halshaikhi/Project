<?php
error_reporting('E_ALL & ~E_Notice');
include_once 'connect.php';


$getData = "SELECT * FROM siteDesc ORDER BY id";
$getDataQuery = mysql_query($getData);
$getRow       = mysql_fetch_array($getDataQuery);



$getLogo = "SELECT * FROM siteimage WHERE img_type='logo'";
$getLogoQuery = mysql_query($getLogo);
$getLogoRow       = mysql_fetch_array($getLogoQuery);



$getPost = "SELECT * FROM sitepost WHERE post_type='news' ORDER BY id DESC";
$getPostQuery = mysql_query($getPost);



$g_f_desc_sql = "SELECT post_content FROM sitepost WHERE post_type='f_desc'";
$g_f_desc_query = mysql_query($g_f_desc_sql) or die(mysql_error());
$g_f_desc_row = mysql_fetch_array($g_f_desc_query);


$g_f_post_sql = "SELECT * FROM sitepost WHERE post_type='features' ORDER BY id DESC";
$g_f_post_query = mysql_query($g_f_post_sql) or die(mysql_error());

?>