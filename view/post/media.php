<?php
	include_once("vendor/autoload.php");
	date_default_timezone_set('Asia/Dhaka');
	use App\Admin\Post;
	$post = new Post;
	$showdata = $post->getData();
?>
<div class="container py-5">
	
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="media-library">
				<div class="row">
				<?php
					if(isset($showdata)){
			$sl = 0;
			foreach($showdata as $r){
				$sl++;
?>
<div class="col-md-4 py-3">
	<a href="filter.php?id=<?php echo $r['id'];?>">
<img src="media/<?php echo $r['image'];?>" alt="" style="width: 100%;"  class="img-thumbnail">
</a>
</div>
<?php
			} }

				?>
			</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<form class="form" enctype="multipart/form-data" method="post" action="store.php?&page=fileupload">
				
				<div class="input-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
						<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
					</div>
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" name="upload" id="inputGroupFileAddon04">Button</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>