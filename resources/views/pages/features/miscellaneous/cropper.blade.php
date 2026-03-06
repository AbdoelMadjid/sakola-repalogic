@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/cropper/cropper.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
@slot('title')
    {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
@endslot
        @slot('breadcrumb')
            @slot('li_1')
                Features
            @endslot
            @slot('li_2')
                Miscellaneous
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
									<div class="alert-icon">
										<span class="svg-icon svg-icon-primary svg-icon-xl">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
													<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
									<div class="alert-text">Cropper.js is a JavaScript image cropper.
									<br />For more info please visit the plugin's
									<a class="font-weight-bold" href="https://fengyuanchen.github.io/cropperjs/" target="_blank">Demo Page</a>or
									<a class="font-weight-bold" href="https://github.com/fengyuanchen/cropperjs" target="_blank">GitHub</a>.</div>
								</div>
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom gutter-b example example-compact">
									<div class="card-header">
										<div class="card-title">
											<h3 class="card-label">Cropper.js</h3>
										</div>
										<div class="card-toolbar">
											<div class="example-tools justify-content-center">
												<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-9">
												<div class="mb-3">
													<img id="image" src="assets/media/stock-600x600/img-9.jpg" alt="" />
												</div>
												<div id="cropper-buttons">
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="setDragMode" data-option="move" title="Move">
															<span data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
																<span class="fa fa-arrows-alt"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="setDragMode" data-option="crop" title="Crop">
															<span data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
																<span class="fa fa-crop-alt"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="zoom" data-option="0.1" title="Zoom In">
															<span data-toggle="tooltip" title="cropper.zoom(0.1)">
																<span class="fa fa-search-plus"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="zoom" data-option="-0.1" title="Zoom Out">
															<span title="cropper.zoom(-0.1)">
																<span class="fa fa-search-minus"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
															<span data-toggle="tooltip" title="cropper.move(-10, 0)">
																<span class="fa fa-arrow-left"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="move" data-option="10" data-second-option="0" title="Move Right">
															<span data-toggle="tooltip" title="cropper.move(10, 0)">
																<span class="fa fa-arrow-right"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
															<span data-toggle="tooltip" title="cropper.move(0, -10)">
																<span class="fa fa-arrow-up"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="move" data-option="0" data-second-option="10" title="Move Down">
															<span data-toggle="tooltip" title="cropper.move(0, 10)">
																<span class="fa fa-arrow-down"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="rotate" data-option="-45" title="Rotate Left">
															<span data-toggle="tooltip" title="cropper.rotate(-45)">
																<span class="fa fa-undo-alt"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="rotate" data-option="45" title="Rotate Right">
															<span data-toggle="tooltip" title="cropper.rotate(45)">
																<span class="fa fa-redo-alt"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="scaleX" data-option="-1" title="Flip Horizontal">
															<span data-toggle="tooltip" title="cropper.scaleX(-1)">
																<span class="fa fa-arrows-alt-h"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="scaleY" data-option="-1" title="Flip Vertical">
															<span data-toggle="tooltip" title="cropper.scaleY(-1)">
																<span class="fa fa-arrows-alt-v"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="crop" title="Crop">
															<span data-toggle="tooltip" title="cropper.crop()">
																<span class="fa fa-check"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="clear" title="Clear">
															<span data-toggle="tooltip" title="cropper.clear()">
																<span class="fa fa-times"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="disable" title="Disable">
															<span data-toggle="tooltip" title="cropper.disable()">
																<span class="fa fa-lock"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="enable" title="Enable">
															<span data-toggle="tooltip" title="cropper.enable()">
																<span class="fa fa-unlock"></span>
															</span>
														</button>
													</div>
													<div class="btn-group">
														<button type="button" class="btn btn-primary mb-3" data-method="reset" title="Reset">
															<span data-toggle="tooltip" title="cropper.reset()">
																<span class="fa fa-sync-alt"></span>
															</span>
														</button>
														<button class="btn btn-primary btn-upload mb-3" title="Upload image file">
															<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*" />
															<span class="kt-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
																<span class="fa fa-upload"></span>
															</span>
														</button>
														<button type="button" class="btn btn-primary mb-3" data-method="destroy" title="Destroy">
															<span data-toggle="tooltip" title="cropper.destroy()">
																<span class="fa fa-power-off"></span>
															</span>
														</button>
													</div>
													<div class="btn-group btn-group-crop">
														<button type="button" data-toggle="modal" data-target="#getCroppedCanvasModal" class="btn btn-success mb-3" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 540, &quot;maxHeight&quot;: 260 }">
															<span data-toggle="tooltip" title="cropper.getCroppedCanvas({ maxWidth: 540, maxHeight: 260 })">Get Cropped Canvas</span>
														</button>
														<button type="button" data-toggle="modal" data-target="#getCroppedCanvasModal" class="btn btn-success mb-3" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
															<span data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 160, height: 90 })">160×90</span>
														</button>
														<button type="button" data-toggle="modal" data-target="#getCroppedCanvasModal" class="btn btn-success mb-3" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
															<span data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 320, height: 180 })">320×180</span>
														</button>
													</div>
													<!-- Show the cropped image in modal -->
													<div class="modal fade cropper-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
																</div>
																<div class="modal-body"></div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<!-- /.modal -->
													<button type="button" class="btn btn-secondary mb-3" data-method="getData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.getData()">Get Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="setData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.setData(data)">Set Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="getContainerData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.getContainerData()">Get Container Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="getImageData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.getImageData()">Get Image Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="getCanvasData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.getCanvasData()">Get Canvas Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="setCanvasData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.setCanvasData(data)">Set Canvas Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="getCropBoxData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.getCropBoxData()">Get Crop Box Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="setCropBoxData" data-target="#putData">
														<span data-toggle="tooltip" title="cropper.setCropBoxData(data)">Set Crop Box Data</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="moveTo" data-option="0">
														<span data-toggle="tooltip" title="cropper.moveTo(0)">Move to [0,0]</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="zoomTo" data-option="1">
														<span data-toggle="tooltip" title="cropper.zoomTo(1)">Zoom to 100%</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="rotateTo" data-option="180">
														<span data-toggle="tooltip" title="cropper.rotateTo(180)">Rotate 180°</span>
													</button>
													<button type="button" class="btn btn-secondary mb-3" data-method="scale" data-option="-2" data-second-option="-1">
														<span data-toggle="tooltip" title="cropper.scale(-2, -1)">Scale (-2, -1)</span>
													</button>
													<label for="putData"></label>
													<textarea class="form-control" id="putData" placeholder="Get data to here or set data with this value"></textarea>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="cropper-preview clearfix mb-3">
													<div id="cropper-preview-lg" class="img-preview preview-lg img-fluid mb-3" style="width: 256px; height: 160px; overflow: hidden; background-color: #f7f7f7;"></div>
													<div id="cropper-preview-md" class="img-preview preview-md float-left" style="width: 128px; height: 80px; overflow: hidden; background-color: #f7f7f7;"></div>
													<div id="cropper-preview-sm" class="img-preview preview-sm float-left ml-3" style="width: 64px; height: 40px; overflow: hidden; background-color: #f7f7f7;"></div>
													<div id="cropper-preview-xs" class="img-preview preview-xs float-left ml-3" style="width: 32px; height: 20px; overflow: hidden; background-color: #f7f7f7;"></div>
												</div>
												<!-- <h3>Data:</h3> -->
												<div id="cropper-data">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataX">X</label>
															</div>
															<input type="text" class="form-control" id="dataX" placeholder="x" />
															<div class="input-group-append">
																<span class="input-group-text">px</span>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataY">Y</label>
															</div>
															<input type="text" class="form-control" id="dataY" placeholder="y" />
															<div class="input-group-append">
																<span class="input-group-text">px</span>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataWidth">Width</label>
															</div>
															<input type="text" class="form-control" id="dataWidth" placeholder="width" />
															<div class="input-group-append">
																<span class="input-group-text">px</span>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataHeight">Height</label>
															</div>
															<input type="text" class="form-control" id="dataHeight" placeholder="height" />
															<div class="input-group-append">
																<span class="input-group-text">px</span>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataRotate">Rotate</label>
															</div>
															<input type="text" class="form-control" id="dataRotate" placeholder="rotate" />
															<div class="input-group-append">
																<span class="input-group-text">deg</span>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataScaleX">ScaleX</label>
															</div>
															<input type="text" class="form-control" id="dataScaleX" placeholder="scaleX" />
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-prepend">
																<label class="input-group-text" for="dataScaleY">ScaleY</label>
															</div>
															<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY" />
														</div>
													</div>
												</div>
												<div class="btn-group d-flex flex-nowrap" data-toggle="buttons" id="setAspectRatio">
													<label class="btn btn-primary active">
														<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777" />
														<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">16:9</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333" />
														<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">4:3</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1" />
														<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">1:1</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666" />
														<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">2:3</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN" />
														<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">Free</span>
													</label>
												</div>
												<div class="btn-group d-flex flex-nowrap" data-toggle="buttons" id="viewMode">
													<label class="btn btn-primary active">
														<input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked="checked" />
														<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">VM0</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1" />
														<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">VM1</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2" />
														<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">VM2</span>
													</label>
													<label class="btn btn-primary">
														<input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3" />
														<span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">VM3</span>
													</label>
												</div>
												<div class="btn-group d-flex flex-nowrap" id="toggleOptionButtons">
													<div class="dropdown" style="width: 100%;">
														<button class="btn btn-brand dropdown-toggle" style="width: 100%;" type="button" id="toggleOption" data-toggle="dropdown">Toggle options</button>
														<ul class="dropdown-menu" aria-labelledby="toggleOption">
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="responsive" checked="checked" />
																<span></span>responsive</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="restore" checked="checked" />
																<span></span>restore</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="checkCrossOrigin" checked="checked" />
																<span></span>checkCrossOrigin</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="checkOrientation" checked="checked" />
																<span></span>checkOrientation</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="modal" checked="checked" />
																<span></span>modal</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="guides" checked="checked" />
																<span></span>guides</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="center" checked="checked" />
																<span></span>center</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="highlight" checked="checked" />
																<span></span>highlight</label>
															</li>
															<li class="dropdown-item">
																<label class="data-toggle=" tooltip="">
																<input type="checkbox" name="background" checked="checked" />
																<span></span>background</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="autoCrop" checked="checked" />
																<span></span>autoCrop</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="movable" checked="checked" />
																<span></span>movable</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="rotatable" checked="checked" />
																<span></span>rotatable</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="scalable" checked="checked" />
																<span></span>scalable</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="zoomable" checked="checked" />
																<span></span>zoomable</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="zoomOnTouch" checked="checked" />
																<span></span>zoomOnTouch</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="zoomOnWheel" checked="checked" />
																<span></span>zoomOnWheel</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="cropBoxMovable" checked="checked" />
																<span></span>cropBoxMovable</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="cropBoxResizable" checked="checked" />
																<span></span>cropBoxResizable</label>
															</li>
															<li class="dropdown-item">
																<label class="checkbox">
																<input type="checkbox" name="toggleDragModeOnDblclick" checked="checked" />
																<span></span>toggleDragModeOnDblclick</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!--begin::Code example-->
										<div class="example-code mt-10">
											<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
												</li>
											</ul>
											<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
											<div class="tab-content">
												<div class="tab-pane active" id="example_code_html" role="tabpanel">
													<div class="example-highlight">
														<pre>
<code class="language-html">&lt;!-- Wrap the image or canvas element with a block element (container) --&gt;
&lt;div&gt;
  &lt;img id="image" src="picture.jpg" alt=""/&gt;
&lt;/div&gt;</code>
</pre>
													</div>
												</div>
												<div class="tab-pane" id="example_code_js">
													<div class="example-highlight">
														<pre style="height:500px">
<code class="language-js">// import 'cropperjs/dist/cropper.css';
import Cropper from 'cropperjs';

const image = document.getElementById('image');
const cropper = new Cropper(image, {
  aspectRatio: 16 / 9,
  crop(event) {
    console.log(event.detail.x);
    console.log(event.detail.y);
    console.log(event.detail.width);
    console.log(event.detail.height);
    console.log(event.detail.rotate);
    console.log(event.detail.scaleX);
    console.log(event.detail.scaleY);
  },
});</code>
</pre>
													</div>
												</div>
											</div>
										</div>
										<!--end::Code example-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						@endsection
                        @section('scripts')

		<script src="{{ asset('assets/plugins/custom/cropper/cropper.bundle.js')}}"></script>
		<script src="{{ asset('assets/js/pages/features/miscellaneous/cropper.js')}}"></script>
@endsection



