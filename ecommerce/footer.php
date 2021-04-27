<footer>  
  <div class="footer"> 
  <div class="container cst-container">
  <p>© 2020 Demo. All Rights Reserved</p>
  </div> 
  </div> 
</footer>
</body>
<script>
$(document).ready(function()
               {
	               $("#category").change(function()
	               {
	               
	               	$("#brand").html('"<option>Select Brand</option>"');
						var category_id=$(this).val();
						var post_id = 'id='+ category_id;
						$.ajax({
						   type: "POST",
						   url: "brandajax.php",
						   data: post_id,
						   success: function(brands)
						   {
						   	console.log("brands", brands);
						   	$("#brand").html(brands);
						   } 
					    });
	                 });
                  });

  $(function(){
  $("#example").dataTable();
  });

</script>