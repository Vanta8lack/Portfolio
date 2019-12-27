<? ob_start();
	include 'inc/head.php';
    $id = $_GET['id'];
    $meqale = mysqli_query($con, "select * from articles where id='$id'");
    $m_row = mysqli_fetch_array($meqale);
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
                        <h4 class="page_banner_title color_white text-uppercase"><marquee><? echo $m_row['a_name'];?></marquee></h4>
                        <div class="breadcrumbs m-auto d-inline-block">
                            <ul>
                                <li class="hover_gray"><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="color-default">Blog</li>
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
    					
    					<div class="blog_item mb_30 wow animated slideInUp">
							<div class="comments">
								
							</div>
							<div class="blog_img overlay_one"><img src="<? echo site_url.$m_row['foto'];?>" alt="image"></div>
							<div class="blog_content bg_white">
								<div class="blog_title">
									<h5><? echo $m_row['a_name'];?></h5>
								</div>
								<p class="mt_15 mb_30"><? echo $m_row['text'];?></p>
								
								<div class="admin">
									
									<span class="color_white">By - <? echo $m_row['author'];?></span>
								</div>
								<div class="date float-right color_primary"><? echo $m_row['article_date'];?></div>
							</div>
						</div>

    				</div>

                    <?
                        $coment = mysqli_query($con, "SELECT * FROM comments WHERE article_id='$id' ORDER BY id DESC");
                        while($com_row = mysqli_fetch_array($coment)){
                            $user_id = $com_row['user_id'];

                            $u = mysqli_query($con, "select * from user where id='$user_id'");
                            while($row_u = mysqli_fetch_array($u)){
                                echo "<b>".$row_u['user_name']."</b><br>".$com_row['content']."<br>".$com_row['c_date']."<br>";
                            }

                        }
                    ?>

                    <form action="" method="post">
                        <textarea name="comm"></textarea><br>
                        <input type="submit" name="insert">

                    </form>

                    <?
                   

                        if($_POST){

                            if($_SESSION['user']){
                                $user_check = $_SESSION['user'];
                                $users = mysqli_query($con, "select * from user where user_name='$user_check'");
                                $rows = mysqli_fetch_array($users);
                                $session_id = $rows['id'];
                            $comm = strip_tags($_POST['comm']);

                            $insert = mysqli_query($con, "insert into comments (article_id, user_id, content, c_date) values ('$id', '$session_id', '$comm', now())");

                                if($insert){
                                    header("Refresh:0");
                                }
                            }else{
                                echo "Comment yazmaq ucun qeydiyyatdan kecin...";
                            }
                        }
                        
                        
                    ?>
                    
    				
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