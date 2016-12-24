<?php
	session_start();
	include 'db_connect.php';
	
	include("header.php");
	include("header_navbar.php");
	include("menu_sidebar.php");
	
        function getParam($name){
                if(isset($_POST[$name])) {
                        return $_POST[$name];
                } elseif (isset($_GET[$name])){
                        return $_GET[$name];
                }
        }
        
        if(getParam("mod")=="")
        {
                include ("blank.php");
        }
        else if(getParam("mod")==$_GET['mod'])
        {
                include ($_GET['mod'].".php");
        }
        
	include "footer.php";
	
?>