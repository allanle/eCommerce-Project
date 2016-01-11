<?php
$objBusiness = new Business();
$business = $objBusiness->getBusiness();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml`/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1991/xhtml">
<head>
    <meta http-equib="Content-Type" content="text/html; charset=UTF-8" />
    <title>eCommerce</title>
    <meta name="description" content="eCommerce website project" />
    <meta name="keywords" content="eCommerce website project" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link href="/css/core.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="header">
        <div id="header_in">
            <h5><a href="/"><?php echo $business['name']; ?></a></h5>
        </div>
    </div>
    
    <div id="outer">
        <div id="wrapper">
            <div id="left">
                <h2>Categories</h2>
                <ul id="navigation">
                    <li><a href="#">link</a></li>
                </ul>
            </div>
            
            <div id="right">