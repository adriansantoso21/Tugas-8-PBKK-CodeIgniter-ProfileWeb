<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Adrian's Blog</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.recipe, .pizza-box {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
}

.recipe .content{
	border: 2px solid #F2F2F2;
	border-radius: 8px;
	overflow: hidden;
    padding: 16px 32px;
	flex: 4 1 40ch;
}

.recipe .save{
	border: 2px solid #F2F2F2;
	border-radius: 8px;
	overflow: hidden;
    display: flex;
    align-items: center;
    padding: 6px 14px 6px 12px;
    border-radius: 4px;
    border: 2px solid currentColor;
    color: var(--primary);
    background: none;
    cursor: pointer;
    font-weight: bold;
}

.recipe .title{
	border: 2px solid #F2F2F2;
	border-radius: 8px;
	overflow: hidden;
	margin: 0;
    font-size: clamp(1.4em, 2.1vw, 2.1em);
    font-family: "Roboto Slab", Helvetica, Arial, sans-serif;
}

svg {
	margin-right: 6px;
}

/* Body Layout */
* {
	box-sizing: border-box;
}

body {
	--primary: #E05D26;
	--grey: #454545;
	--lightgrey: #666;
	
	color: var(--grey);
	line-height: 1.55;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	font-family: "Roboto", Helvetica, Arial, sans-serif;

    background-image: url('assets/img/bg2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
}

.big {
	width: clamp(320px, 65%, 65%);
	padding: 24px;
}

</style>
</head>

<body>
<div class="big" style="text-align: center;">
    <div class="mt-5 mb-5"  >
        <img src="assets/img/img2.jpg" alt="profile_photo" class="img-responsive img-circle mt-10" style="width:200px;">
    </div>
	 <article class="recipe">
        
		<div class="recipe content" style="text-align: justify;display:block;color:white">

			<h1 class="recipe title mb-2">Welcome to my Blog</h1>

			<p class="recipe">Hello my name is Adrian Santoso. This web is made to fulfill my PBKK task. So, I make a web that contain some my biography details.</p>
            <div class="list-group mb-3" >
                <a href="#" class="list-group-item list-group-item-action">Name : Adrian Santoso</a>
                <a href="#" class="list-group-item list-group-item-action">Birth date : 24 May 2001</a>
                <a href="#" class="list-group-item list-group-item-action">Email : mkadriansantoso@gmail.com</a>
                <a href="#" class="list-group-item list-group-item-action">Address : Surabaya, Jawa Timur, Indonesia</a>
                <a href="#" class="list-group-item list-group-item-action">Instagram : adriansantoso21</a>
            </div>
            <a class="btn btn-primary" href="http://localhost/profile_ci/index.php/welcome/about" role="button">About Me</a>
		</div>
        
	</article>
    
</div>

</body>
</html>