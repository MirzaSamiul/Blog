<?php

 include("header.php");


 ?>

	<!-- ========== Main ========== -->

	<main class="blog-post">
			
		<div class="container">

			<article>
				
				<header class="entry-header">


					<?php
						include("connect/connection.php");

						if(isset($_GET['id'])){
						$id=$_GET['id'];

						$sql="SELECT*FROM product WHERE id='$id'";

						$result=mysqli_query($con,$sql);
						if(mysqli_num_rows($result)>0){
							while($row=mysqli_fetch_assoc($result)){
					
					?>



					<a href="#" class="entry-category">design</a>
					<h2 class="entry-title"><a href="blog-post.html"><?php echo $row['title']; ?></a></h2>
					<span class="posted-on">20.03.19</span>


					<figure class="entry-thumbnail">
		                <img src="<?php echo $row['image_name']; ?>" class="img-cover" alt="">
		            </figure>



				</header> <!-- /.entry-header -->

				<div class="entry-content">
					
					<p><?php echo $row['description']; ?></p>

					<blockquote>
						<p>Let a volume be opened at any place: there is the same good English, the same refined style, the same simplicity and truth.</p>
					</blockquote>



				</div> <!-- /.entry-content -->

			</article> <!-- /article -->




			<div class="leave-comment">
				
				<header><h2><a href="update.php?id=<?php echo $row['id']; ?>" style="color: red;">Update Blog</a></h2></header><br>

				<header><h2 style="background-color: red"><a href="delete.php?id=<?php echo $row['id']; ?>" style="color: white;">Delete Blog</a></h2></header>

			</div> <!-- /.leave-comment -->

					<?php }} } ?>

		</div> <!-- /.container -->
		
	</main> <!-- /.blog-post -->

	<footer class="footer-extended footer-bg-grey">

		<div class="info">

			<div class="container">
				
				<ul>
					<li>contact</li>
					<li><span class="mailaddress">satie-design@mail.com</span></li>
					<li>+3809812345</li>
				</ul>

				<ul>
					<li>links</li>
					<li><a href="about-us.html">about us</a></li>
					<li><a href="metro-01.html">works</a></li>
					<li><a href="blog-list.html">blog</a></li>
					<li><a href="contact.html">contact us</a></li>
				</ul>

				<ul>
					<li>address</li>
					<li>satie agency</li>
					<li>72 oak street</li>
					<li>london, UK</li>
				</ul>

				<ul>
					<li>follow us</li>
					<li><a href ="#">twitter</a></li>
					<li><a href ="#">instagram</a></li>
					<li><a href ="#">behance</a></li>
					<li><a href ="#">dribbble</a></li>
				</ul>

			</div> <!-- /.container -->

			<div class="clearfix"></div>

		</div><!-- /.info -->

		<div class="copyright-section">
			
			<div class="container">

				<p class="copyright"><i class="far fa-copyright"></i> Mirza Nuhash. all rights reserved</p>

			</div> <!-- /.container -->

		</div> <!-- /.copyright-section -->

	</footer> <!-- /.footer-extended -->

	<div class="full-screen-nav">
		
		<div class="container">
			
			<a href="#" class="nav-close"><i class="ti-close"></i></a>

			<nav>
				<ul class="collapsible-nav">
					<li>home
						<ul class="coll-nav-sub-item">
							<li><a href="index.html">modern agency</a></li>
							<li><a href="agency-minimal.html">agency minimal</a></li>
							<li><a href="interactive-links.html">interactive links</a></li>
							<li><a href="portfolio-cards.html">portfolio cards</a></li>
							<li><a href="metro-02.html">portfolio metro</a></li>
							<li><a href="personal-portfolio.html">personal portfolio</a></li>
						</ul>
					</li>
					<li>about
						<ul class="coll-nav-sub-item">
							<li><a href="about-us.html">about us</a></li>
							<li><a href="about-me.html">about me</a></li>
						</ul>
					</li>
					<li>works
						<ul class="coll-nav-sub-item">
							<li><a href="2-columns-grid.html">2 columns grid</a></li>
							<li><a href="3-columns-grid.html">3 columns grid</a></li>
							<li><a href="2-columns-grid-no-gap.html">2 columns grid no gap</a></li>
							<li><a href="3-columns-grid-no-gap.html">3 columns grid no gap</a></li>
							<li><a href="metro-01.html">metro 01</a></li>
							<li><a href="metro-02.html">metro 02</a></li>
							<li><a href="irregular-grid-01.html">irregular grid 01</a></li>
							<li><a href="irregular-grid-02.html">irregular grid 02</a></li>
							<li><a href="portfolio-cards.html">portfolio cards</a></li>
							<li><a href="interactive-links.html">interactive links</a></li>
						</ul>
					</li>
					<li><a href="blog-list.html">blog</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav> 

		</div> <!-- /.container -->

	</div> <!-- /.full-screen-nav -->




	<!-- Added JS File -->
	
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/main.js"></script>
	
	
</body>
</html>