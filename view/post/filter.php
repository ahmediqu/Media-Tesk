<?php
	include('view/partials/header.php');
	if($_GET['id']){
		echo "dsfl";
	}
?>
		<div class="container p-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<img src="images.jpg" class="img-thumbnail" alt="" style="width: 100%;">
					<ul class="nav nav-tabs mt-3 justify-content-center" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Filter</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Adjust</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Crop</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">

						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row my-3">
								<div class="col-md-4 my-3">
									<img src="images.jpg " class="img-thumbnail " alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg " class="img-thumbnail grayscale" alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg" class="img-thumbnail sepia" alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg" class="img-thumbnail invert" alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg" class="img-thumbnail duotone" alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg" class="img-thumbnail warm" alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg" class="img-thumbnail cool" alt="" style="width: 100%;">
								</div>
								<div class="col-md-4 my-3">
									<img src="images.jpg" class="img-thumbnail dramatic" alt="" style="width: 100%;">
								</div>
							</div>	
						</div>

						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Exposure</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Tint</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Contrast</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Highlight</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Saturation</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Shadow</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
								<div class="col-md-6 my-3">
									<div class="form-group">
									    <label for="formGroupExampleInput">Warmth</label>
									    <input type="range" max="100" value="0" step="1" data-filter="blur" data-scale="px"> 
									  </div>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row my-3">
								<div class="col-md-3">
									<p>Flip</p>
								</div>
								<div class="col-md-3">
									<button class="btn btn-outline-info">None</button>
								</div>
								<div class="col-md-3">
									<button class="btn btn-outline-info">Flip Horizontally</button>
								</div>
								<div class="col-md-3">
									<button class="btn btn-outline-info">Flip Vertically</button>
								</div>
							</div>
							<div class="row my-3">
								<div class="col-md-2">
									<p>Rotate</p>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">0 Deg</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">30 Deg</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">60 Deg</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">90 Deg</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">180 Deg</button>
								</div>
							</div>
							<div class="row my-3">
								<div class="col-md-2">
									<p>Ratio</p>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">16:9</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">10:7</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">7:5</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">4:3</button>
								</div>
								<div class="col-md-2">
									<button class="btn btn-outline-info">3:2</button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
<?php
include('view/partials/footer.php');
?>