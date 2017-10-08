<template>
  <div class="Dropzone">


<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Forms</a>
							</li>
							<li class="active">Dropzone File Upload</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Dropzone.js
								<small>
									<i class="icon-double-angle-right"></i>
									Drag &amp; drop file upload with image preview
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="alert alert-info">
									<i class="icon-hand-right"></i>

									Please note that demo server is not configured to save uploaded files, therefore you may get an error message.
									<button class="close" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>
								</div>

								<div id="dropzone">
									<form action="//dummy.html" class="dropzone dz-clickable">
										
									<div class="dz-default dz-message"><span><span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Drop files</span> to upload 				<span class="smaller-80 grey">(or click)</span> <br> 				<i class="upload-icon icon-cloud-upload blue icon-3x"></i></span></div></form>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>



	
</div>
</template>