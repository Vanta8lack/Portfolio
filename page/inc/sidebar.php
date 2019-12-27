<div class="col-md-5 col-lg-4">
    				<div class="blog_sidebar">
						<?php 
    							$folow = mysqli_query($con, 'select * from folow_me');
    							while($folowme = mysqli_fetch_array($folow)) { ?>

    					<div class="widget mb_60 d-inline-block p_30 bg_white full_row wow animated slideInUp">
    						<h3 class="widget_title mb_30 text-capitalize"><?php echo $folowme['folow']; ?></h3>
    					
    						<div class="socal_media">
								<ul>
									<li><a href=""><?php echo $folowme['facebook']; ?></a></li>
									<li><a href=""><?php echo $folowme['twitter']; ?></a></li>
									<li><a href=""><?php echo $folowme['google_plus']; ?></a></li>
									<li><a href=""><?php echo $folowme['linked_in']; ?></a></li>
									<li><a href=""><?php echo $folowme['instagram']; ?></a></li>
								</ul>
							</div>
    					</div>

    					<?php  
    					} 
    					?>
    					<div class="widget mb_60 d-inline-block p_30 primary_link bg_white full_row wow animated slideInUp">
    						<h3 class="widget_title mb_30 text-capitalize">Search</h3>
    						<div class="category_sidebar">
    							<input class="form-control mr-sm-2" type="search" id="search" placeholder="Search" aria-label="Search" autocomplete="off">
    							<div class="recent_post" id="feedback">
    							</div>
    						</div>
    					</div>


    					<div class="widget mb_60 d-inline-block p_30 primary_link bg_white full_row wow animated slideInUp">
    						<h3 class="widget_title mb_30 text-capitalize">Category</h3>
    						<div class="category_sidebar">
								<ul>
									<?

										$sql_say = mysqli_query($con, "SELECT *, COUNT(articles.cat_id) AS say FROM cat INNER JOIN articles ON cat.id=articles.cat_id GROUP BY articles.cat_id");

										while($row = mysqli_fetch_array($sql_say)){
											if($row['active'] == 1){
										 ?>

											<li><a href="index.php?page=cat&id=<? echo $row['id'];?>"><? echo $row['name'];?>

												
											</a><span>(<? echo $row['say'];?>)</span></li>
									<?
										}
									}
									?>
									
									
								</ul>
							</div>
    					</div>
    					<div class="widget mb_60 d-inline-block p_30 primary_link bg_white full_row wow animated slideInUp">
    						<h3 class="widget_title mb_30 text-capitalize">Recent Post</h3>
    						<div class="recent_post">
								<ul>
									<li class="mb_30">
										
												<?
						    						$post_article = mysqli_query($con, "select * from recent_post order by id desc limit 4");
						    						while ($recent_post = mysqli_fetch_array($post_article)){
						    							$post_id = $recent_post['id'];
						    					?>
						    					<a href="#">

											<div class="post_img"><img src="<?echo site_url.$recent_post['photo'];?>" alt="image"></div>
											<div class="recent_post_content">
												<h6><? echo $recent_post['name'];?></h6>
												<span class="color_gray"><?echo $recent_post['date'];?></span>
											</div>
											</a>
											<?	
    										}
    											?>
    					
										
									</li>
								</ul>
							</div>
    					</div>
    					<div class="widget mb_60 d-inline-block p_30 bg_white primary_link full_row wow animated slideInUp">
    						<h3 class="widget_title mb_30 text-capitalize">Archives</h3>
    						<div class="archives">
								<ul>
									<li><a href="#">December</a></li>
									<li><a href="#">November</a></li>
									<li><a href="#">October</a></li>
									<li><a href="#">September</a></li>
									<li><a href="#">August</a></li>
									<li><a href="#">July</a></li>
								</ul>
							</div>
    					</div>
    				</div>
    			</div>