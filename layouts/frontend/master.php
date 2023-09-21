<?php include "header.php"; ?>

<body>
	<div class="headersection templete clear">
		<a href="#">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2>Website Title</h2>
				<p>Our website description</p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="" method="post">
				<input type="text" name="keyword" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a id="active" href="index.html">Home</a></li>
		<li><a href="about.html">About</a></li>	
		<li><a href="contact.html">Contact</a></li>
	</ul>
</div>

	
<div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="This is slider one Title or Description" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="This is slider three Title or Description" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="This is slider four Title or Description" /></a>
        </div>

</div>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="samepost clear">
				<h2><a href="">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				 <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="post.html">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
				<h2><a href="">Our post title here</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
				 <img src="images/post2.png" alt="post image"/>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="post.html">Read More</a>
				</div>
			</div>



<?php 

include "sidebar.php";
include "footer.php";

?>