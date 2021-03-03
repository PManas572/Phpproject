<?php

?>
<html>
<head>
	<title>The BookStore</title>
</head>
<style type="text/css">
	body {
		background-image: url("book.jpg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #333;
	}

	li {
	  float: left;
	}

	li a {
	  display: block;
	  color: orangered;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	/* Change the link color to #111 (black) on hover */
	li a:hover {
	  background-color: #111;
	}
	.active {
		background-color: orange;
	}
	p {
		margin: 0 10%;
		font-weight: bold;
        font-style: italic;
		padding-right: 35%;
	}
</style>
<body>
	<ul>
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="store.php">BookStore</a></li>
		<li><a href="checkout.php">Checkout</a></li>
	</ul>
<h1>Welcome to the BookStore</h1>
<p>Find Your Favourites here...</p>
</body>
</html>