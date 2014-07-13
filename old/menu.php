<!DOCTYPE html>

<html>
<head>
	<title>Cascading Menus</title>
	<meta charset="utf-8">
	
	<style>
	* {
		margin: 0px;
		padding: 0px;
	}
	body {
		font-family:verdana;
		background-color: #ABC;
		padding: 50px;
	}
	h1 {
		text-align: center;
		border-bottom: 2px solid #009;
		margin-bottom: 50px;
	}
	
	ul#navmenu, ul.sub1, ul.sub2 {
		list-style-type: none;
	}
	
	ul#navmenu li {
		outline: 1px solid red;
		width: 125px;
		text-align: center;
		position: relative;
		float: left;
		margin-right: 4px;
	}
	
	ul#navmenu a {
		text-decoration: none;
		display: block;
		width: 125px;
		height:25px;
		line-height: 25px;
		background-color: #FFF;
		border-radius: 5px;
	}
	
	</style>
</head>
<body>

<h1>Navigation Menu</h1>

<ul id="navmenu">
	<li><a href="#">hyperlink 1</a></li>
	<li><a href="#">hyperlink 2</a>
		<ul class="sub1">
			<li><a href="#">hyperlink 2.1</a></li>
			<li><a href="#">hyperlink 2.2</a></li>
			<li><a href="#">hyperlink 2.3</a></li>
		</ul>
	</li>
	<li><a href="#">hyperlink 3</a></li>
	<li><a href="#">hyperlink 4</a>
		<ul class="sub1">
			<li><a href="#">hyperlink 4.1</a></li>
			<li><a href="#">hyperlink 4.2</a></li>
			<li><a href="#">hyperlink 4.3</a>
				<ul class="sub2">
					<li><a href="#">hyperlink 4.3.1</a></li>
					<li><a href="#">hyperlink 4.3.2</a></li>
					<li><a href="#">hyperlink 4.3.3</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#">hyperlink 5</a></li>
</ul>

</body>
</html>