<?
	include 'inc/head.php';
?>

<body id="top" class="page-load">
	<!--	Start Back to top
	=================================================-->
	<a href="#" id="scroll" style="display: none;"><span></span></a>
    <!--    End Back to top
    ==================================================-->

    
<!-- Wrapper Start 
==================================================-->
<div id="page_wrapper">
	<div class="row">
    <!-- Start Nav Menu 
	==============================================-->
	 <? include 'inc/header.php';?>
	<!-- End Nav Menu
	==================================================-->
    <!--    Page Banner Start
    ==================================================-->
    <section class="banner background9 overlay_three full_row">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="banner_text text-center">
                        <h1 class="page_banner_title color_white text-uppercase">Gallery</h1>
                        <div class="breadcrumbs m-auto d-inline-block">
                            <ul>
                                <li class="hover_gray"><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>  
                                <li class="color-default">Gallery</li>                          
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--    Page Banner End
    ==================================================-->
     <!--    Blog Post Start
    ==================================================-->
    <section class="blog_area py_80 bg_secondery full_row">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-7 col-lg-8">
    				<div class="blog_list mb_60">
    					<?
    						$article = mysqli_query($con, "select * from articles order by id desc limit 6");
    						while ($r_article = mysqli_fetch_array($article)){
    							$art_id = $r_article['id'];

    							$comm = mysqli_query($con,"select * from comments where article_id='$art_id'");
    							$say = mysqli_num_rows($comm); 
    							?>

    					<div class="blog_item mb_30 wow animated slideInUp">
							<div class="comments">
								<i class="fa fa-comment" aria-hidden="true"></i>
						
								<span class="color_white"><? echo $say;?></span>
							</div>
							<div class="blog_img overlay_one"><img src="<? echo site_url.$r_article['foto'];?>" alt="image"></div>
							<div class="blog_content bg_white">
								<div class="blog_title">
									<a class="color_primary" href="index.php?page=blog_details&id=<? echo $r_article['id'];?>"><h5><? echo $r_article['a_name'];?></h5></a>
								</div>
								<p class="mt_15 mb_30"><? echo substr($r_article['text'],0,195);?>.....</p>
								
								<div class="admin">
									
									<span class="color_white">By - <? echo $r_article['author'];?></span>
								</div>
								<div class="date float-right color_primary"><? echo $r_article['article_date'];?></div>
							</div>
						</div>

    					<?	
    				}
    					?>
    					
						
						
    				</div>
    				<nav>
					  <ul class="pagination wow animated slideInUp full_row">
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
					    </li>
					  </ul>
					</nav>
    			</div>
    			<? include 'inc/sidebar.php';?>
    		</div>
    	</div>
    </section>
     <!--    Blog Post End
    ==================================================-->

    <!--    Start Footer
    ===================================================-->
   <? include 'inc/footer.php';?>
    <!--    End Footer
    ===================================================-->
	</div>
</div>
<!--	Wrapper End
=======================================================-->
    <!--    Js Links
    ===================================================-->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
   </body>

<!-- Mirrored from themetrading.com/html/runaway/template/regular/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 11:03:06 GMT -->
</html>