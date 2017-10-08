

<template>
  <div class="Wysiwyg">

               







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
							<li class="active">Wysiwyg &amp; Markdown</li>
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
							<h1>Wysiwyg &amp; Markdown Editor </h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<h4 class="header green clearfix">
									Bootstrap Lightweight Editor
									<span class="block pull-right">
										<small class="grey middle">Choose style: &nbsp;</small>

										<span class="btn-toolbar inline middle no-margin">
											<span data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow">
													1
													<input value="1" type="radio">
												</label>

												<label class="btn btn-sm btn-yellow active">
													2
													<input value="2" type="radio">
												</label>

												<label class="btn btn-sm btn-yellow">
													3
													<input value="3" type="radio">
												</label>
											</span>
										</span>
									</span>
								</h4>

								 <div class="wysiwyg-toolbar btn-toolbar center wysiwyg-style2"> <div class="btn-group">  <a class="btn btn-sm  dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="icon-font"></i><i class="icon-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light"> <li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li>  <li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li>  <li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li>  <li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li>  <li><a data-edit="fontName Open Sans" style="font-family:'Open Sans'">Open Sans</a></li>  <li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li>  <li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li>  </ul> </div> <div class="btn-group">  <a class="btn btn-sm  dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="icon-text-height"></i>&nbsp;<i class="icon-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light">  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>  </ul>  </div> <div class="btn-group">  <a class="btn btn-sm btn-info" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>  <a class="btn btn-sm btn-info" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>  <a class="btn btn-sm btn-info" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="icon-strikethrough"></i></a>  <a class="btn btn-sm btn-info" data-edit="underline" title="" data-original-title="Underline"><i class="icon-underline"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-success" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="icon-list-ul"></i></a>  <a class="btn btn-sm btn-success" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="icon-list-ol"></i></a>  <a class="btn btn-sm btn-purple" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>  <a class="btn btn-sm btn-purple" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="icon-indent-right"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-primary active" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>  <a class="btn btn-sm btn-primary" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>  <a class="btn btn-sm btn-primary" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>  <a class="btn btn-sm btn-inverse" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>  </div> <div class="btn-group">  <div class="inline position-relative"> <a class="btn btn-sm btn-pink dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="icon-link"></i></a>  <div class="dropdown-menu dropdown-caret pull-right">							<div class="input-group">								<input class="form-control" placeholder="URL" data-edit="createLink" type="text">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Add</button>								</span>							</div>						</div> </div> <a class="btn btn-sm btn-pink" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="icon-unlink"></i></a>  </div> <div class="btn-group">  <div class="inline position-relative"> <a class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Insert picture"><i class="icon-picture"></i></a>  <div class="dropdown-menu dropdown-caret pull-right">							<div class="input-group">								<input class="form-control" placeholder="Image URL" data-edit="insertImage" type="text">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Insert</button>								</span>							</div><div class="space-2"></div>							 <div class="center">								<button class="btn btn-sm btn-success wysiwyg-choose-file" type="button"><i class="icon-file"></i> Choose Image …</button>								<input data-edit="insertImage" type="file">							  </div> </div> </div> </div> <div class="btn-group">  <select class="hide wysiwyg_colorpicker" title="Change Color" style="display: none;">  <option value="#ac725e">#ac725e</option>  <option value="#d06b64">#d06b64</option>  <option value="#f83a22">#f83a22</option>  <option value="#fa573c">#fa573c</option>  <option value="#ff7537">#ff7537</option>  <option value="#ffad46">#ffad46</option>  <option value="#42d692">#42d692</option>  <option value="#16a765">#16a765</option>  <option value="#7bd148">#7bd148</option>  <option value="#b3dc6c">#b3dc6c</option>  <option value="#fbe983">#fbe983</option>  <option value="#fad165">#fad165</option>  <option value="#92e1c0">#92e1c0</option>  <option value="#9fe1e7">#9fe1e7</option>  <option value="#9fc6e7">#9fc6e7</option>  <option value="#4986e7">#4986e7</option>  <option value="#9a9cff">#9a9cff</option>  <option value="#b99aff">#b99aff</option>  <option value="#c2c2c2">#c2c2c2</option>  <option value="#cabdbf">#cabdbf</option>  <option value="#cca6ac">#cca6ac</option>  <option value="#f691b2">#f691b2</option>  <option value="#cd74e6">#cd74e6</option>  <option value="#a47ae2">#a47ae2</option>  <option value="#444444">#444444</option>  </select><div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorpicker" style="background-color:#ac725e" data-original-title="" title=""></span></a><ul class="dropdown-menu dropdown-caret pull-right"><li><a class="colorpick-btn selected" href="#" style="background-color:#ac725e;" data-color="#ac725e"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#d06b64;" data-color="#d06b64"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#f83a22;" data-color="#f83a22"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fa573c;" data-color="#fa573c"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#ff7537;" data-color="#ff7537"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#ffad46;" data-color="#ffad46"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#42d692;" data-color="#42d692"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#16a765;" data-color="#16a765"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#7bd148;" data-color="#7bd148"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fbe983;" data-color="#fbe983"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fad165;" data-color="#fad165"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#92e1c0;" data-color="#92e1c0"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#4986e7;" data-color="#4986e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9a9cff;" data-color="#9a9cff"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#b99aff;" data-color="#b99aff"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cabdbf;" data-color="#cabdbf"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cca6ac;" data-color="#cca6ac"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#f691b2;" data-color="#f691b2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cd74e6;" data-color="#cd74e6"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#a47ae2;" data-color="#a47ae2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#444444;" data-color="#444444"></a></li></ul></div>  <input style="display:none;" disabled="" class="hide" data-edit="foreColor" type="text">  </div> <div class="btn-group">  <a class="btn btn-sm btn-grey" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>  <a class="btn btn-sm btn-grey" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>  </div> </div> <div class="wysiwyg-editor" id="editor1" contenteditable="true"></div>

								<div class="hr hr-double dotted"></div>

								<div class="row">
									<div class="col-sm-6">
										<h4 class="header blue">Inside Widget</h4>

										<div class="widget-box">
											<div class="widget-header widget-header-small  header-color-green"> <div class="wysiwyg-toolbar btn-toolbar center inline"> <div class="btn-group">  <a class="btn btn-sm" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>  <a class="btn btn-sm" data-edit="italic" title="" data-original-title="Change Title!"><i class="icon-leaf"></i></a>  <a class="btn btn-sm" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="icon-strikethrough"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="icon-list-ul"></i></a>  <a class="btn btn-sm" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="icon-list-ol"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm  active" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>  <a class="btn btn-sm" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>  <a class="btn btn-sm" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>  </div> </div> 
												<div class="widget-toolbar inline">
													<a href="#" data-action="collapse">
														<i class="icon-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="wysiwyg-editor" id="editor2" style="height: 200px;" contenteditable="true"></div>
												</div>

												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<button class="btn btn-sm btn-grey">
															<i class="icon-remove bigger-125"></i>
															Cancel
														</button>
													</div>

													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-danger">
															<i class="icon-save bigger-125"></i>
															Save
														</button>

														<button class="btn btn-sm btn-success">
															<i class="icon-globe bigger-125"></i>

															Publish
															<i class="icon-arrow-right icon-on-right bigger-125"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<h4 class="header green">Markdown Editor</h4>

										<div class="widget-box">
											<div class="widget-header widget-header-small header-color-blue">  </div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="md-editor" id="1506567202639"><div class="md-header"><div class="btn-group"><button class="btn btn-small" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold"><i class="icon icon-bold"></i> </button><button class="btn btn-small" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic"><i class="icon icon-italic"></i> </button><button class="btn btn-small" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading"><i class="icon icon-font"></i> </button></div><div class="btn-group"><button class="btn btn-small" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl"><i class="icon icon-globe"></i> </button><button class="btn btn-small" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage"><i class="icon icon-picture"></i> </button></div><div class="btn-group"><button class="btn btn-small" title="List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList"><i class="icon icon-list"></i> </button></div><div class="btn-group"><button class="btn btn-inverse btn-small" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-toggle="button"><i class="icon icon-white icon-search"></i> Preview</button></div></div><textarea class="span12 md-input" name="content" data-provide="markdown" rows="10" style="resize: none;">**Markdown Editor** inside a *widget box*

- list item 1
- list item 2
- list item 3</textarea></div>
												</div>

												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<button class="btn btn-sm btn-info">
															<i class="icon-remove bigger-125"></i>
															Cancel
														</button>
													</div>

													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-purple">
															<i class="icon-save bigger-125"></i>
															Save
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>


</div>
</template>