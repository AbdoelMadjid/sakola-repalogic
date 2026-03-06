@extends('layouts.index')
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
                Icons
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
									<div class="alert-text">Socicon is a social icons font with more than 170 icons from all major services. Socicon is free and easy to use. For more info please visit
									<a class="font-weight-bold" href="http://www.socicon.com" target="_blank">Socicon's Home</a>.</div>
								</div>
								<!--end::Notice-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Base Examples</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Example-->
												<div class="example">
													<p>
													<code>Socicon</code>icons can be used as through class names as shown below.</p>
													<div class="example-preview">
														<i class="socicon-vimeo mr-5"></i>
														<i class="socicon-telegram mr-5"></i>
														<i class="socicon-facebook mr-5"></i>
														<i class="socicon-android mr-5"></i>
														<i class="socicon-amazon mr-5"></i>
														<i class="socicon-google"></i>
													</div>
													<div class="example-code">
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
														<div class="example-highlight">
															<pre>
<code class="language-html">
                        &lt;i class="socicon-vimeo mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-telegram mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-facebook mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-amazon mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-google"&gt;&lt;/i&gt;
                        </code>
</pre>
														</div>
													</div>
												</div>
												<!--end::Example-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-xl-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Color Options</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Example-->
												<div class="example">
													<p>Use
													<code>.text-{light|secondary|success|info|primary|warning|danger|white|dark|dark-75|dark-50|dark-25}</code>class format to set different colors.</p>
													<div class="example-preview">
														<i class="socicon-vimeo text-success mr-5"></i>
														<i class="socicon-telegram text-primary mr-5"></i>
														<i class="socicon-facebook text-danger mr-5"></i>
														<i class="socicon-android text-warning mr-5"></i>
														<i class="socicon-amazon text-info mr-5"></i>
														<i class="socicon-google text-dark"></i>
													</div>
													<div class="example-code">
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
														<div class="example-highlight">
															<pre>
<code class="language-html">
                        &lt;i class="socicon-vimeo text-success mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-telegram text-primary mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-facebook text-danger mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android text-warning mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-amazon text-info mr-5"&gt;&lt;/i&gt;
                        &lt;i class="socicon-google text-dark"&gt;&lt;/i&gt;
                        </code>
</pre>
														</div>
													</div>
												</div>
												<!--end::Example-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Sizes</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Example-->
												<div class="example">
													<p>Use
													<code>.icon-{size}</code>class format to set different sizes.</p>
													<div class="example-preview">
														<i class="socicon-android icon-xs mr-5"></i>
														<i class="socicon-android icon-sm mr-5"></i>
														<i class="socicon-android icon-nm mr-5"></i>
														<i class="socicon-android icon-md mr-5"></i>
														<i class="socicon-android icon-lg mr-5"></i>
														<i class="socicon-android icon-xl mr-5"></i>
														<i class="socicon-android icon-2x mr-5"></i>
														<i class="socicon-android icon-3x mr-5"></i>
														<i class="socicon-android icon-4x mr-5"></i>
														<i class="socicon-android icon-5x mr-5"></i>
														<i class="socicon-android icon-6x mr-5"></i>
														<i class="socicon-android icon-7x mr-5"></i>
														<i class="socicon-android icon-8x mr-5"></i>
														<i class="socicon-android icon-9x mr-5"></i>
														<i class="socicon-android icon-10x mr-5"></i>
													</div>
													<div class="example-code">
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
														<div class="example-highlight">
															<pre style="height:150px">
<code class="language-html">
                        &lt;i class="socicon-android icon-xs"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-sm"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-nm"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-md"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-lg"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-xl"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-2x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-3x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-4x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-5x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-6x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-7x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-8x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-9x"&gt;&lt;/i&gt;
                        &lt;i class="socicon-android icon-10x"&gt;&lt;/i&gt;
                        </code>
</pre>
														</div>
													</div>
												</div>
												<!--end::Example-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-xl-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b card-stretch">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Integration</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Example-->
												<div class="example">
													<p>You can use Flaticons literally with any element within Metronic.</p>
													<div class="example-preview">
														<a href="#" class="btn btn-success font-weight-bold mr-2">
														<i class="socicon-foursquare"></i>Button</a>
														<a href="#" class="btn btn-light-danger font-weight-bold mr-2">
														<i class="socicon-skype"></i>Button 2</a>
														<div class="dropdown dropdown-inline">
															<a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															<i class="socicon-airbnb"></i>Dropdown</a>
															<div class="dropdown-menu dropdown-menu-md py-5" style="">
																<ul class="navi navi-hover">
																	<li class="navi-item">
																		<a class="navi-link" href="#">
																			<span class="navi-icon">
																				<i class="socicon-chrome text-danger"></i>
																			</span>
																			<span class="navi-text">Messages</span>
																			<span class="label label-light-danger font-weight-bold label-inline">new</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a class="navi-link" href="#">
																			<span class="navi-icon">
																				<i class="socicon-dribbble text-warning"></i>
																			</span>
																			<span class="navi-text">Settings</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a class="navi-link" href="#">
																			<span class="navi-icon">
																				<i class="socicon-apple text-success"></i>
																			</span>
																			<span class="navi-text">Tasks</span>
																			<span class="navi-label">
																				<span class="label label-warning label-rounded">5</span>
																			</span>
																		</a>
																	</li>
																	<li class="navi-item">
																		<a class="navi-link" href="#">
																			<span class="navi-icon">
																				<i class="socicon-envato text-primary"></i>
																			</span>
																			<span class="navi-text">Orders</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="example-code">
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
														<div class="example-highlight">
															<pre style="height:400px">
<code class="language-html">
                        &lt;a href="#" class="btn btn-success font-weight-bold mr-2"&gt;
                            &lt;i class="socicon-foursquare"&gt;&lt;/i&gt; Button example
                        &lt;/a&gt;

                        &lt;a href="#" class="btn btn-light-danger font-weight-bold mr-2"&gt;
                            &lt;i class="socicon-skype"&gt;&lt;/i&gt; Button example 2
                        &lt;/a&gt;

                        &lt;div class="dropdown dropdown-inline"&gt;
                            &lt;a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-expanded="false"&gt;
                                &lt;i class="socicon-airbnb"&gt;&lt;/i&gt; Dropdown example
                            &lt;/a&gt;
                            &lt;div class="dropdown-menu dropdown-menu-md py-5" style=""&gt;
                                &lt;ul class="navi navi-hover"&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="socicon-chrome text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                            &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="socicon-dribbble text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="socicon-apple text-success"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                            &lt;span class="navi-label"&gt;
                                                &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                            &lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class="navi-item"&gt;
                                        &lt;a class="navi-link" href="#"&gt;
                                            &lt;span class="navi-icon"&gt;&lt;i class="socicon-envato text-primary"&gt;&lt;/i&gt;&lt;/span&gt;
                                            &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                        &lt;/a&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        </code>
</pre>
														</div>
													</div>
												</div>
												<!--end::Example-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<!--end::Row-->
								<div class="row">
									<div class="col-md-12">
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Socicons</h3>
												</div>
												<div class="card-toolbar">
													<span class="text-muted font-size-sm" id="soc_count_text">Klik icon untuk copy snippet</span>
												</div>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-modelmayhem"></i>
															</div>
															<div class="text-muted">socicon-modelmayhem</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-mixcloud"></i>
															</div>
															<div class="text-muted">socicon-mixcloud</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-drupal"></i>
															</div>
															<div class="text-muted">socicon-drupal</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-swarm"></i>
															</div>
															<div class="text-muted">socicon-swarm</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-istock"></i>
															</div>
															<div class="text-muted">socicon-istock</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-yammer"></i>
															</div>
															<div class="text-muted">socicon-yammer</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-ello"></i>
															</div>
															<div class="text-muted">socicon-ello</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-stackoverflow"></i>
															</div>
															<div class="text-muted">socicon-stackoverflow</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-persona"></i>
															</div>
															<div class="text-muted">socicon-persona</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-triplej"></i>
															</div>
															<div class="text-muted">socicon-triplej</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-houzz"></i>
															</div>
															<div class="text-muted">socicon-houzz</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-rss"></i>
															</div>
															<div class="text-muted">socicon-rss</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-paypal"></i>
															</div>
															<div class="text-muted">socicon-paypal</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-odnoklassniki"></i>
															</div>
															<div class="text-muted">socicon-odnoklassniki</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-airbnb"></i>
															</div>
															<div class="text-muted">socicon-airbnb</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-periscope"></i>
															</div>
															<div class="text-muted">socicon-periscope</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-outlook"></i>
															</div>
															<div class="text-muted">socicon-outlook</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-coderwall"></i>
															</div>
															<div class="text-muted">socicon-coderwall</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-tripadvisor"></i>
															</div>
															<div class="text-muted">socicon-tripadvisor</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-appnet"></i>
															</div>
															<div class="text-muted">socicon-appnet</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-goodreads"></i>
															</div>
															<div class="text-muted">socicon-goodreads</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-tripit"></i>
															</div>
															<div class="text-muted">socicon-tripit</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-lanyrd"></i>
															</div>
															<div class="text-muted">socicon-lanyrd</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-slideshare"></i>
															</div>
															<div class="text-muted">socicon-slideshare</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-buffer"></i>
															</div>
															<div class="text-muted">socicon-buffer</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-disqus"></i>
															</div>
															<div class="text-muted">socicon-disqus</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-vkontakte"></i>
															</div>
															<div class="text-muted">socicon-vkontakte</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-whatsapp"></i>
															</div>
															<div class="text-muted">socicon-whatsapp</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-patreon"></i>
															</div>
															<div class="text-muted">socicon-patreon</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-storehouse"></i>
															</div>
															<div class="text-muted">socicon-storehouse</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-pocket"></i>
															</div>
															<div class="text-muted">socicon-pocket</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-mail"></i>
															</div>
															<div class="text-muted">socicon-mail</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-blogger"></i>
															</div>
															<div class="text-muted">socicon-blogger</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-technorati"></i>
															</div>
															<div class="text-muted">socicon-technorati</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-reddit"></i>
															</div>
															<div class="text-muted">socicon-reddit</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-dribbble"></i>
															</div>
															<div class="text-muted">socicon-dribbble</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-stumbleupon"></i>
															</div>
															<div class="text-muted">socicon-stumbleupon</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-digg"></i>
															</div>
															<div class="text-muted">socicon-digg</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-envato"></i>
															</div>
															<div class="text-muted">socicon-envato</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-behance"></i>
															</div>
															<div class="text-muted">socicon-behance</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-delicious"></i>
															</div>
															<div class="text-muted">socicon-delicious</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-deviantart"></i>
															</div>
															<div class="text-muted">socicon-deviantart</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-forrst"></i>
															</div>
															<div class="text-muted">socicon-forrst</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-play"></i>
															</div>
															<div class="text-muted">socicon-play</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-zerply"></i>
															</div>
															<div class="text-muted">socicon-zerply</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-wikipedia"></i>
															</div>
															<div class="text-muted">socicon-wikipedia</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-apple"></i>
															</div>
															<div class="text-muted">socicon-apple</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-flattr"></i>
															</div>
															<div class="text-muted">socicon-flattr</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-github"></i>
															</div>
															<div class="text-muted">socicon-github</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-renren"></i>
															</div>
															<div class="text-muted">socicon-renren</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-friendfeed"></i>
															</div>
															<div class="text-muted">socicon-friendfeed</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-newsvine"></i>
															</div>
															<div class="text-muted">socicon-newsvine</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-identica"></i>
															</div>
															<div class="text-muted">socicon-identica</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-bebo"></i>
															</div>
															<div class="text-muted">socicon-bebo</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-zynga"></i>
															</div>
															<div class="text-muted">socicon-zynga</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-steam"></i>
															</div>
															<div class="text-muted">socicon-steam</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-xbox"></i>
															</div>
															<div class="text-muted">socicon-xbox</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-windows"></i>
															</div>
															<div class="text-muted">socicon-windows</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-qq"></i>
															</div>
															<div class="text-muted">socicon-qq</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-douban"></i>
															</div>
															<div class="text-muted">socicon-douban</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-meetup"></i>
															</div>
															<div class="text-muted">socicon-meetup</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-playstation"></i>
															</div>
															<div class="text-muted">socicon-playstation</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-android"></i>
															</div>
															<div class="text-muted">socicon-android</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-snapchat"></i>
															</div>
															<div class="text-muted">socicon-snapchat</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-twitter"></i>
															</div>
															<div class="text-muted">socicon-twitter</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-facebook"></i>
															</div>
															<div class="text-muted">socicon-facebook</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-googleplus"></i>
															</div>
															<div class="text-muted">socicon-googleplus</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-pinterest"></i>
															</div>
															<div class="text-muted">socicon-pinterest</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-foursquare"></i>
															</div>
															<div class="text-muted">socicon-foursquare</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-yahoo"></i>
															</div>
															<div class="text-muted">socicon-yahoo</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-skype"></i>
															</div>
															<div class="text-muted">socicon-skype</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-yelp"></i>
															</div>
															<div class="text-muted">socicon-yelp</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-feedburner"></i>
															</div>
															<div class="text-muted">socicon-feedburner</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-linkedin"></i>
															</div>
															<div class="text-muted">socicon-linkedin</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-viadeo"></i>
															</div>
															<div class="text-muted">socicon-viadeo</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-xing"></i>
															</div>
															<div class="text-muted">socicon-xing</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-myspace"></i>
															</div>
															<div class="text-muted">socicon-myspace</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-soundcloud"></i>
															</div>
															<div class="text-muted">socicon-soundcloud</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-spotify"></i>
															</div>
															<div class="text-muted">socicon-spotify</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-grooveshark"></i>
															</div>
															<div class="text-muted">socicon-grooveshark</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-lastfm"></i>
															</div>
															<div class="text-muted">socicon-lastfm</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-youtube"></i>
															</div>
															<div class="text-muted">socicon-youtube</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-vimeo"></i>
															</div>
															<div class="text-muted">socicon-vimeo</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-dailymotion"></i>
															</div>
															<div class="text-muted">socicon-dailymotion</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-vine"></i>
															</div>
															<div class="text-muted">socicon-vine</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-flickr"></i>
															</div>
															<div class="text-muted">socicon-flickr</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-500px"></i>
															</div>
															<div class="text-muted">socicon-500px</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-wordpress"></i>
															</div>
															<div class="text-muted">socicon-wordpress</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-tumblr"></i>
															</div>
															<div class="text-muted">socicon-tumblr</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-twitch"></i>
															</div>
															<div class="text-muted">socicon-twitch</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-8tracks"></i>
															</div>
															<div class="text-muted">socicon-8tracks</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-amazon"></i>
															</div>
															<div class="text-muted">socicon-amazon</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-icq"></i>
															</div>
															<div class="text-muted">socicon-icq</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-smugmug"></i>
															</div>
															<div class="text-muted">socicon-smugmug</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-ravelry"></i>
															</div>
															<div class="text-muted">socicon-ravelry</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-weibo"></i>
															</div>
															<div class="text-muted">socicon-weibo</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-baidu"></i>
															</div>
															<div class="text-muted">socicon-baidu</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-angellist"></i>
															</div>
															<div class="text-muted">socicon-angellist</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-ebay"></i>
															</div>
															<div class="text-muted">socicon-ebay</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-imdb"></i>
															</div>
															<div class="text-muted">socicon-imdb</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-stayfriends"></i>
															</div>
															<div class="text-muted">socicon-stayfriends</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-residentadvisor"></i>
															</div>
															<div class="text-muted">socicon-residentadvisor</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-google"></i>
															</div>
															<div class="text-muted">socicon-google</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-yandex"></i>
															</div>
															<div class="text-muted">socicon-yandex</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-sharethis"></i>
															</div>
															<div class="text-muted">socicon-sharethis</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-bandcamp"></i>
															</div>
															<div class="text-muted">socicon-bandcamp</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-itunes"></i>
															</div>
															<div class="text-muted">socicon-itunes</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-deezer"></i>
															</div>
															<div class="text-muted">socicon-deezer</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-telegram"></i>
															</div>
															<div class="text-muted">socicon-telegram</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-openid"></i>
															</div>
															<div class="text-muted">socicon-openid</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-amplement"></i>
															</div>
															<div class="text-muted">socicon-amplement</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-viber"></i>
															</div>
															<div class="text-muted">socicon-viber</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-zomato"></i>
															</div>
															<div class="text-muted">socicon-zomato</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-draugiem"></i>
															</div>
															<div class="text-muted">socicon-draugiem</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-endomodo"></i>
															</div>
															<div class="text-muted">socicon-endomodo</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-filmweb"></i>
															</div>
															<div class="text-muted">socicon-filmweb</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-stackexchange"></i>
															</div>
															<div class="text-muted">socicon-stackexchange</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-wykop"></i>
															</div>
															<div class="text-muted">socicon-wykop</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-teamspeak"></i>
															</div>
															<div class="text-muted">socicon-teamspeak</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-teamviewer"></i>
															</div>
															<div class="text-muted">socicon-teamviewer</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-ventrilo"></i>
															</div>
															<div class="text-muted">socicon-ventrilo</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-younow"></i>
															</div>
															<div class="text-muted">socicon-younow</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-raidcall"></i>
															</div>
															<div class="text-muted">socicon-raidcall</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-mumble"></i>
															</div>
															<div class="text-muted">socicon-mumble</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-medium"></i>
															</div>
															<div class="text-muted">socicon-medium</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-bebee"></i>
															</div>
															<div class="text-muted">socicon-bebee</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-hitbox"></i>
															</div>
															<div class="text-muted">socicon-hitbox</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-reverbnation"></i>
															</div>
															<div class="text-muted">socicon-reverbnation</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-formulr"></i>
															</div>
															<div class="text-muted">socicon-formulr</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-instagram"></i>
															</div>
															<div class="text-muted">socicon-instagram</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-battlenet"></i>
															</div>
															<div class="text-muted">socicon-battlenet</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-chrome"></i>
															</div>
															<div class="text-muted">socicon-chrome</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-discord"></i>
															</div>
															<div class="text-muted">socicon-discord</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-issuu"></i>
															</div>
															<div class="text-muted">socicon-issuu</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-macos"></i>
															</div>
															<div class="text-muted">socicon-macos</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-firefox"></i>
															</div>
															<div class="text-muted">socicon-firefox</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-opera"></i>
															</div>
															<div class="text-muted">socicon-opera</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-keybase"></i>
															</div>
															<div class="text-muted">socicon-keybase</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-alliance"></i>
															</div>
															<div class="text-muted">socicon-alliance</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-livejournal"></i>
															</div>
															<div class="text-muted">socicon-livejournal</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-googlephotos"></i>
															</div>
															<div class="text-muted">socicon-googlephotos</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-horde"></i>
															</div>
															<div class="text-muted">socicon-horde</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-etsy"></i>
															</div>
															<div class="text-muted">socicon-etsy</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-zapier"></i>
															</div>
															<div class="text-muted">socicon-zapier</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-google-scholar"></i>
															</div>
															<div class="text-muted">socicon-google-scholar</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-researchgate"></i>
															</div>
															<div class="text-muted">socicon-researchgate</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-wechat"></i>
															</div>
															<div class="text-muted">socicon-wechat</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-strava"></i>
															</div>
															<div class="text-muted">socicon-strava</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-line"></i>
															</div>
															<div class="text-muted">socicon-line</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-lyft"></i>
															</div>
															<div class="text-muted">socicon-lyft</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-uber"></i>
															</div>
															<div class="text-muted">socicon-uber</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-songkick"></i>
															</div>
															<div class="text-muted">socicon-songkick</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-viewbug"></i>
															</div>
															<div class="text-muted">socicon-viewbug</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-googlegroups"></i>
															</div>
															<div class="text-muted">socicon-googlegroups</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-quora"></i>
															</div>
															<div class="text-muted">socicon-quora</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-diablo"></i>
															</div>
															<div class="text-muted">socicon-diablo</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-blizzard"></i>
															</div>
															<div class="text-muted">socicon-blizzard</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-hearthstone"></i>
															</div>
															<div class="text-muted">socicon-hearthstone</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-heroes"></i>
															</div>
															<div class="text-muted">socicon-heroes</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-overwatch"></i>
															</div>
															<div class="text-muted">socicon-overwatch</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-warcraft"></i>
															</div>
															<div class="text-muted">socicon-warcraft</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-starcraft"></i>
															</div>
															<div class="text-muted">socicon-starcraft</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-beam"></i>
															</div>
															<div class="text-muted">socicon-beam</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-curse"></i>
															</div>
															<div class="text-muted">socicon-curse</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-player"></i>
															</div>
															<div class="text-muted">socicon-player</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-streamjar"></i>
															</div>
															<div class="text-muted">socicon-streamjar</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-nintendo"></i>
															</div>
															<div class="text-muted">socicon-nintendo</div>
														</div>
													</div>
													<div class="col-md-2 d-flex align-items-stretch">
														<div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x la text-dark-50 socicon-hellocoton"></i>
															</div>
															<div class="text-muted">socicon-hellocoton</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						@endsection

@section('scripts')
	<script>
		(function() {
			function initIconTools(options) {
				var listContainer = options.container;
				var cardHeader = options.header;
				if (!listContainer || !cardHeader) {
					return;
				}

				var toolbar = document.createElement('div');
				toolbar.className = 'mb-8';
				toolbar.innerHTML =
					'<div class="row align-items-end">' +
					'<div class="col-md-5 mb-4 mb-md-0"><label class="font-weight-bold mb-2 d-block">Pencarian Icon</label><input type="text" id="' + options.prefix + '_search_input" class="form-control" placeholder="' + options.searchPlaceholder + '" autocomplete="off"></div>' +
					'<div class="col-md-3 col-sm-6 mb-4 mb-md-0"><label class="font-weight-bold mb-2 d-block">Ukuran Icon</label><select id="' + options.prefix + '_size_input" class="form-control"><option value="12">12</option><option value="16">16</option><option value="20">20</option><option value="24" selected>24</option><option value="28">28</option><option value="32">32</option><option value="40">40</option><option value="48">48</option><option value="56">56</option><option value="64">64</option></select></div>' +
					'<div class="col-md-2 col-sm-6 mb-4 mb-md-0"><label class="font-weight-bold mb-2 d-block">Warna Icon</label><input type="color" id="' + options.prefix + '_color_input" class="form-control p-1" value="#000000" style="height:38px;"></div>' +
					'<div class="col-md-2 d-flex justify-content-md-end"><button type="button" id="' + options.prefix + '_reset_btn" class="btn btn-light-dark w-100">Reset</button></div>' +
					'</div>';

				var snippetPanel = document.createElement('div');
				snippetPanel.className = 'mb-8 p-5 rounded';
				snippetPanel.style.background = '#F4F6FA';
				snippetPanel.innerHTML =
					'<div class="row align-items-start">' +
					'<div class="col-lg-3 mb-4 mb-lg-0"><label class="font-weight-bold mb-2 d-block">Preview</label><div class="d-flex align-items-center justify-content-center rounded" style="min-height:94px;background:#fff;border:1px dashed #d9dee7;"><i id="' + options.prefix + '_preview_icon"></i></div></div>' +
					'<div class="col-lg-6 mb-4 mb-lg-0"><label class="font-weight-bold mb-2 d-block">Hasil Copy Snippet</label><textarea id="' + options.prefix + '_snippet_code" class="form-control font-size-sm" rows="3" readonly style="height:94px;resize:none;"></textarea></div>' +
					'<div class="col-lg-3 d-flex flex-column"><label class="font-weight-bold mb-2 d-block">Aksi</label><div class="d-flex w-100"><button type="button" id="' + options.prefix + '_copy_snippet_btn" class="btn btn-primary flex-fill mr-2" disabled>Copy</button><button type="button" id="' + options.prefix + '_clear_selected_btn" class="btn btn-light-danger flex-fill" disabled>Reset</button></div><div class="mt-3 text-center" style="min-height:22px;"><span id="' + options.prefix + '_copy_status" class="text-muted small"></span></div><div class="mt-2 d-flex justify-content-center" style="min-height:32px;"><span id="' + options.prefix + '_icon_badge" class="label label-inline label-light-primary font-weight-bold" style="visibility:hidden;"></span></div></div>' +
					'</div>';

				listContainer.insertBefore(snippetPanel, listContainer.firstChild);
				listContainer.insertBefore(toolbar, listContainer.firstChild);

				var countText = document.getElementById(options.prefix + '_count_text');
				var searchInput = document.getElementById(options.prefix + '_search_input');
				var sizeInput = document.getElementById(options.prefix + '_size_input');
				var colorInput = document.getElementById(options.prefix + '_color_input');
				var resetBtn = document.getElementById(options.prefix + '_reset_btn');
				var previewIcon = document.getElementById(options.prefix + '_preview_icon');
				var iconBadge = document.getElementById(options.prefix + '_icon_badge');
				var snippetCode = document.getElementById(options.prefix + '_snippet_code');
				var copySnippetBtn = document.getElementById(options.prefix + '_copy_snippet_btn');
				var clearSelectedBtn = document.getElementById(options.prefix + '_clear_selected_btn');
				var copyStatus = document.getElementById(options.prefix + '_copy_status');

				var iconCards = Array.prototype.slice.call(listContainer.querySelectorAll('.col-md-2.d-flex.align-items-stretch'));
				var compactRow = document.createElement('div');
				compactRow.className = 'row';
				for (var c = 0; c < iconCards.length; c++) {
					compactRow.appendChild(iconCards[c]);
				}
				listContainer.innerHTML = '';
				listContainer.appendChild(toolbar);
				listContainer.appendChild(snippetPanel);
				listContainer.appendChild(compactRow);

				var totalIcons = iconCards.length;
				var currentQuery = '';
				var defaultSize = 24;
				var defaultColor = '#000000';
				var currentSize = defaultSize;
				var currentColor = defaultColor;
				var selectedIconClass = '';
				var selectedIconLabel = '';

				function normalizeSize(value) {
					var parsed = parseInt(value, 10);
					var allowedSizes = [12, 16, 20, 24, 28, 32, 40, 48, 56, 64];
					return allowedSizes.indexOf(parsed) !== -1 ? parsed : defaultSize;
				}

				for (var idx = 0; idx < iconCards.length; idx++) {
					var nameEl = iconCards[idx].querySelector('.text-muted');
					var iconName = nameEl ? nameEl.textContent.trim() : '';
					var iconEl = iconCards[idx].querySelector('i');
					var iconRenderClass = iconEl ? iconEl.className : '';
					iconRenderClass = iconRenderClass.replace(/\bicon-\S+\b/g, '').replace(/\btext-\S+\b/g, '').replace(/\bla\b/g, '').replace(/\s+/g, ' ').trim();
					iconCards[idx].setAttribute('data-icon-name', iconName.toLowerCase());
					iconCards[idx].setAttribute('data-icon-label', iconName);
					iconCards[idx].setAttribute('data-icon-class', iconRenderClass || iconName);
					iconCards[idx].style.cursor = 'pointer';
				}

				function applyIconAppearance() {
					for (var i = 0; i < iconCards.length; i++) {
						var iconEl = iconCards[i].querySelector('i');
						if (!iconEl) continue;
						iconEl.style.setProperty('font-size', currentSize + 'px', 'important');
						iconEl.style.setProperty('color', currentColor, 'important');
					}
					if (selectedIconClass) {
						previewIcon.style.setProperty('font-size', '64px', 'important');
						previewIcon.style.setProperty('color', currentColor, 'important');
					}
				}

				function highlightSelectedCard() {
					for (var i = 0; i < iconCards.length; i++) {
						var card = iconCards[i].querySelector('.bg-hover-light');
						if (!card) continue;
						if (iconCards[i].getAttribute('data-icon-label') === selectedIconLabel) {
							card.classList.add('bg-light-primary');
							card.style.setProperty('border', '1px solid #3699ff');
						} else {
							card.classList.remove('bg-light-primary');
							card.style.removeProperty('border');
						}
					}
				}

				function clearCopiedBadges() {
					for (var i = 0; i < iconCards.length; i++) {
						var badge = iconCards[i].querySelector('.' + options.prefix + '-copied-badge');
						if (badge) badge.remove();
					}
				}

				function getCurrentSnippet() {
					if (!selectedIconClass) return '';
					return '<i class="' + selectedIconClass + '" style="font-size: ' + currentSize + 'px; color: ' + currentColor + ';"></i>';
				}

				function updateSnippetPanel() {
					if (!selectedIconClass) {
						previewIcon.className = '';
						iconBadge.textContent = '';
						iconBadge.style.visibility = 'hidden';
						snippetCode.value = '';
						copySnippetBtn.disabled = true;
						clearSelectedBtn.disabled = true;
						return;
					}
					previewIcon.className = selectedIconClass;
					iconBadge.textContent = selectedIconLabel;
					iconBadge.style.visibility = 'visible';
					snippetCode.value = getCurrentSnippet();
					copySnippetBtn.disabled = false;
					clearSelectedBtn.disabled = false;
				}

				function clearSelection() {
					selectedIconClass = '';
					selectedIconLabel = '';
					copyStatus.textContent = '';
					clearCopiedBadges();
					highlightSelectedCard();
					updateSnippetPanel();
				}

				function showCopiedBadgeOnSelectedCard() {
					if (!selectedIconClass) return;
					clearCopiedBadges();
					for (var i = 0; i < iconCards.length; i++) {
						if (iconCards[i].getAttribute('data-icon-label') !== selectedIconLabel) continue;
						var card = iconCards[i].querySelector('.bg-hover-light');
						if (!card) continue;
						card.style.position = 'relative';
						var badge = document.createElement('span');
						badge.className = options.prefix + '-copied-badge';
						badge.textContent = 'Copied';
						badge.style.cssText = 'position:absolute;top:6px;right:6px;background:#1BC5BD;color:#fff;padding:2px 8px;border-radius:999px;font-size:11px;font-weight:700;line-height:1.4;';
						card.appendChild(badge);
						break;
					}
				}

				function showCopyToast(message) {
					var toast = document.getElementById(options.prefix + '_copy_toast');
					if (!toast) {
						toast = document.createElement('div');
						toast.id = options.prefix + '_copy_toast';
						toast.style.cssText = 'position:fixed;top:20px;right:20px;z-index:2000;background:#1BC5BD;color:#fff;padding:10px 14px;border-radius:6px;font-weight:600;font-size:12px;box-shadow:0 4px 12px rgba(0,0,0,.2);opacity:0;transform:translateY(-8px);transition:all .2s ease;';
						document.body.appendChild(toast);
					}
					toast.textContent = message;
					toast.style.opacity = '1';
					toast.style.transform = 'translateY(0)';
					clearTimeout(toast._timer);
					toast._timer = setTimeout(function() {
						toast.style.opacity = '0';
						toast.style.transform = 'translateY(-8px)';
					}, 1400);
				}

				function render() {
					var filteredCards = iconCards.filter(function(card) {
						var iconName = card.getAttribute('data-icon-name') || '';
						return iconName.indexOf(currentQuery) !== -1;
					});
					for (var i = 0; i < iconCards.length; i++) {
						iconCards[i].style.setProperty('display', 'none', 'important');
					}
					for (var j = 0; j < filteredCards.length; j++) {
						filteredCards[j].style.setProperty('display', 'flex', 'important');
					}
					countText.textContent = 'Menampilkan ' + filteredCards.length + ' dari ' + totalIcons + ' icon';
				}

				searchInput.addEventListener('input', function(e) {
					currentQuery = (e.target.value || '').toLowerCase().trim();
					render();
				});

				sizeInput.addEventListener('change', function(e) {
					currentSize = normalizeSize(e.target.value);
					sizeInput.value = currentSize;
					applyIconAppearance();
					updateSnippetPanel();
				});

				colorInput.addEventListener('input', function(e) {
					currentColor = e.target.value || defaultColor;
					applyIconAppearance();
					updateSnippetPanel();
				});

				resetBtn.addEventListener('click', function() {
					searchInput.value = '';
					sizeInput.value = defaultSize;
					colorInput.value = defaultColor;
					currentQuery = '';
					currentSize = defaultSize;
					currentColor = defaultColor;
					clearSelection();
					applyIconAppearance();
					render();
				});

				clearSelectedBtn.addEventListener('click', function() {
					clearSelection();
				});

				for (var clickIdx = 0; clickIdx < iconCards.length; clickIdx++) {
					iconCards[clickIdx].addEventListener('click', function() {
						selectedIconClass = this.getAttribute('data-icon-class') || '';
						selectedIconLabel = this.getAttribute('data-icon-label') || '';
						copyStatus.textContent = '';
						highlightSelectedCard();
						updateSnippetPanel();
						applyIconAppearance();
						showCopiedBadgeOnSelectedCard();
						var top = cardHeader.getBoundingClientRect().top + window.pageYOffset - 120;
						window.scrollTo({ top: Math.max(top, 0), behavior: 'smooth' });
					});
				}

				copySnippetBtn.addEventListener('click', function() {
					var snippet = getCurrentSnippet();
					if (!snippet) return;
					if (navigator.clipboard && navigator.clipboard.writeText) {
						navigator.clipboard.writeText(snippet).then(function() {
							copyStatus.textContent = 'Snippet copied';
							showCopyToast('Snippet copied');
						});
						return;
					}
					snippetCode.select();
					document.execCommand('copy');
					copyStatus.textContent = 'Snippet copied';
					showCopyToast('Snippet copied');
				});

				applyIconAppearance();
				updateSnippetPanel();
				render();
			}

			function initSociconsPage() {
				var cardLabel = null;
				var labels = document.querySelectorAll('.card.card-custom .card-label');
				for (var i = 0; i < labels.length; i++) {
					if ((labels[i].textContent || '').trim() === 'Socicons') {
						cardLabel = labels[i];
						break;
					}
				}
				if (!cardLabel) return;
				var header = cardLabel.closest('.card-header');
				var body = header ? header.nextElementSibling : null;
				if (!body) return;
				initIconTools({
					container: body,
					header: header,
					prefix: 'soc',
					defaultPrefixClass: '',
					searchPlaceholder: 'Cari icon, contoh: socicon-facebook'
				});
			}

			if (document.readyState === 'loading') {
				document.addEventListener('DOMContentLoaded', initSociconsPage);
			} else {
				initSociconsPage();
			}
		})();
	</script>
@endsection



