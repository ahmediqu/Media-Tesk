		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/dropzone.js"></script>
		<script src="assets/js/dropzone-configuration.js"></script>
		<script>

</script>
 <script type="text/javascript">
       $(function(){
    $("#big_image img:eq(0)").nextAll().hide();
    $(".small_images img").click(function(e){
        var index = $(this).index();
        $("#big_image img").eq(index).show().siblings().hide();
    });
});
       function grayscale(){
       	document.getElementById("myImg").style.filter = "grayscale(100%)";
       }
       function sepia(){
       	document.getElementById("myImg").style.filter = "sepia(100%)";
       }

       // var filter_image = document.getElementById('#myImg');
       // var filterControls = document.querySelectorAll('input[type=range]');
       // function applyFilter(){
       // 	var computedFilters = '';
       // 	filterControls.forEach(function(item,index){
       // 		filterControls += item.getAttribute('data-filter') + '(' + item.value + item.getAttribute('data-scale') + ')';
       // 	});
       // 	filter_image.style.filter = computedFilters;
       // }

     </script>
     <script type="text/javascript">
		var image = document.getElementById('#myImg');
		var filterControls = document.querySelectorAll('input[type=range]');
		function applyFilter() {
			var computedFilters = '';
			filterControls.forEach(function(item, index) {
				computedFilters += item.getAttribute('data-filter') + '(' + item.value + item.getAttribute('data-scale') + ') ';
			});
				document.getElementById("myImg").style.filter = computedFilters;
		};
	</script>
	</body>
</html>