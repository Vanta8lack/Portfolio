 <?php
		include 'config/config.php';

        $s = $_GET['usearch'];
        $rs = mysqli_query($con,"SELECT * FROM articles WHERE a_name OR author OR article_date LIKE '%$s%'");

       if ($_GET['usearch']) {
        	while ($rw = mysqli_fetch_array($rs)) {?>
        	<a href="index.php?page=blog_details&id=<? echo $rw['id'];?>">
        		<div class="post_img">
        			<img src="<?echo site_url.$rw['foto'];?>" alt="image">
        		</div> 
        		<div class="recent_post_content">
					<h6><? echo substr($rw['a_name'],0,45);?></h6>
				</div>
           	</a>	 
      	 <? }
   		 }
?>
