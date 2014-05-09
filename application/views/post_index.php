<!DOCTYPE html>
<html>
	<head><title>CI Series</title>
	<meta content="charset=UTF-8">
	<style>
		body {background:#f2f2f2;}
		#wrapper {width:980px; margin:0 auto; background:#fff; padding:10px;}
		#container ul {padding-left:0; margin-left:0; background-color:#036; color:white; float:left; width:100%; font-family: sans-serif;}
		#container ul li {display:inline;}
		#container ul li a {padding:0.2em 1em; background-color:#036; color:white; text-decoration:none; float:left; border-right:1px solid #fff;}
		#container ul li a:hover {background-color:#369; color:#fff;}
		a:link, a:active, a:visited {text-decoration:underline; color:black;}
		a:hover {text-decoration:none; color:black;}
		#success {background:green; display:block; color:white; padding:10px;}
		#error {background:red; display:block; color:white; padding:10px;}
		#files {display:inline; clear:both;}
		#files li {list-style-type:none; float:left; padding-right:10px;}
	</style>
	</head>
	
	<body>
		<div id="wrapper">
			<h1>Arpad's Blog!</h1>
			<div id="container">
				<h1>Blog Posts</h1>
				<?php
					if(!isset($posts)){
				?>
				<p>There are currently no posts on my blog</p>
				<?php
					} else {
						foreach($posts as $row){
				?>
				<h2><a href="<?=base_url()?>posts/post/<?=$row['postID']?>"><?=$row['title']?></a> - <a href="<?base_url()?>/posts/editpost<?=$row['postID']?>">Edit</a> | <a href="<?base_url()?>/posts/deletepost<?=$row['postID']?>">Delete</a></h2>
				<p><?=substr(strip_tags($row['post']),0,200).".."?></p>
				<p><a href="<?= base_url()?>posts/post/<?=$row['postID']?>">Read More</a></p>
				<hr />
				<?php
						}
					}
				?>
			</div>
		</div>
	</body>
</html>
