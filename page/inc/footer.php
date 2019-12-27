 <script>
 	$('#search').keyup(function(){
	var s = $('#search').val();

	$.ajax({
		url:'ajax.php',
		data:'usearch='+s,
		success:function(data){
			$('#feedback').html(data);
			}
		});
	});

 </script>



 <footer class="p_20 color_primary bg_secondery full_row text-center wow animated slideInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="copyright"><p>Runaway @ 2019. All Right Reserved.</p></div>
                </div>
            </div>
        </div>
 </footer>