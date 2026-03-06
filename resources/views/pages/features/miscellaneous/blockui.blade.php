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
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                fill="#000000" opacity="0.3" />
                            <path
                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
            <div class="alert-text">The jQuery BlockUI Plugin lets you simulate synchronous behavior when using AJAX,
                without locking the browser.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="http://jquery.malsup.com/block/" target="_blank">StickyJS Home</a>or
                <a class="font-weight-bold" href="https://github.com/malsup/blockui/" target="_blank">StickyJS Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Click below buttons to block below content area.</p>
                        <!--begin::Preview-->
                        <div class="example-preview" id="kt_blockui_content">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus litora venenatis ad: Ac
                            aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus.
                            Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.</div>
                        <div class="mt-5">
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_default">Default</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_overlay_color">Overlay color</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_custom_spinner">Custom spinner</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_custom_text_1">Custom text 1</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_custom_text_2">Custom text 2</button>
                        </div>
                        <!--begin::Code example-->
                        <div class="example-code mt-7">
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
<code class="language-html">
       &lt;div class="example-preview" id="kt_blockui_content"&gt;
       ...
       &lt;/div&gt;
             </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
       // default
       $('#kt_blockui_default').click(function() {
        KTApp.block('#kt_blockui_content', {});

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_content');
        }, 2000);
       });

       $('#kt_blockui_overlay_color').click(function() {
        KTApp.block('#kt_blockui_content', {
         overlayColor: 'red',
         opacity: 0.1,
         state: 'primary' // a bootstrap color
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_content');
        }, 2000);
       });

       $('#kt_blockui_custom_spinner').click(function() {
        KTApp.block('#kt_blockui_content', {
         overlayColor: '#000000',
         state: 'warning', // a bootstrap color
         size: 'lg' //available custom sizes: sm|lg
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_content');
        }, 2000);
       });

       $('#kt_blockui_custom_text_1').click(function() {
        KTApp.block('#kt_blockui_content', {
         overlayColor: '#000000',
         state: 'danger',
         message: 'Please wait...'
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_content');
        }, 2000);
       });

       $('#kt_blockui_custom_text_2').click(function() {
        KTApp.block('#kt_blockui_content', {
         overlayColor: '#000000',
         state: 'primary',
         message: 'Processing...'
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_content');
        }, 2000);
       });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Modal Blocking Examples</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Click below buttons to block modal.</p>
                        <div class="mt-5">
                            <button type="button" class="btn btn-light font-weight-bold" data-toggle="modal"
                                data-target="#kt_blockui_modal_default">Default</button>
                            <button type="button" class="btn btn-light font-weight-bold" data-toggle="modal"
                                data-target="#kt_blockui_modal_overlay_color">Overlay color</button>
                            <button type="button" class="btn btn-light font-weight-bold" data-toggle="modal"
                                data-target="#kt_blockui_modal_custom_spinner">Custom spinner</button>
                            <button type="button" class="btn btn-light font-weight-bold" data-toggle="modal"
                                data-target="#kt_blockui_modal_custom_text_1">Custom text 1</button>
                            <button type="button" class="btn btn-light font-weight-bold" data-toggle="modal"
                                data-target="#kt_blockui_modal_custom_text_2">Custom text 2</button>
                        </div>
                        <!--end::Preview-->
                        <!--begin::Code example-->
                        <div class="example-code mt-7">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_2_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_2_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_2_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-html">
       &lt;div class="modal fade" id="kt_blockui_modal_default" tabindex="-1" role="dialog"  aria-hidden="true"&gt;
       ...
       &lt;/div&gt;

       &lt;div class="modal fade" id="kt_blockui_modal_overlay_color" tabindex="-1" role="dialog"  aria-hidden="true"&gt;
       ...
       &lt;/div&gt;

       &lt;div class="modal fade" id="kt_blockui_modal_custom_spinner" tabindex="-1" role="dialog"  aria-hidden="true"&gt;
       ...
       &lt;/div&gt;

       &lt;div class="modal fade" id="kt_blockui_modal_custom_text_1" tabindex="-1" role="dialog"  aria-hidden="true"&gt;
       ...
       &lt;/div&gt;

       &lt;div class="modal fade" id="kt_blockui_modal_custom_text_2" tabindex="-1" role="dialog"  aria-hidden="true"&gt;
       ...
       &lt;/div&gt;
             </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_2_js">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-js">
       // default
       $('#kt_blockui_modal_default_btn').click(function() {
        KTApp.block('#kt_blockui_modal_default .modal-dialog', {});

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_modal_default .modal-content');
        }, 2000);
       });

       $('#kt_blockui_modal_overlay_color_btn').click(function() {
        KTApp.block('#kt_blockui_modal_overlay_color .modal-content', {
         overlayColor: 'red',
         opacity: 0.1,
         state: 'primary' // a bootstrap color
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_modal_overlay_color .modal-content');
        }, 2000);
       });

       $('#kt_blockui_modal_custom_spinner_btn').click(function() {
        KTApp.block('#kt_blockui_modal_custom_spinner .modal-content', {
         overlayColor: '#000000',
         state: 'warning', // a bootstrap color
         size: 'lg' //available custom sizes: sm|lg
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_modal_custom_spinner .modal-content');
        }, 2000);
       });

       $('#kt_blockui_modal_custom_text_1_btn').click(function() {
        KTApp.block('#kt_blockui_modal_custom_text_1 .modal-content', {
         overlayColor: '#000000',
         state: 'danger',
         message: 'Please wait...'
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_modal_custom_text_1 .modal-content');
        }, 2000);
       });

       $('#kt_blockui_modal_custom_text_2_btn').click(function() {
        KTApp.block('#kt_blockui_modal_custom_text_2 .modal-content', {
         overlayColor: '#000000',
         state: 'primary',
         message: 'Processing...'
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_modal_custom_text_2 .modal-content');
        }, 2000);
       });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact" id="kt_blockui_card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Blocking Examples</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Click below buttons to block this card.</p>
                        <div class="mt-5">
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_card_default">Default</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_card_overlay_color">Overlay color</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_card_custom_spinner">Custom spinner</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_card_custom_text_1">Custom text 1</button>
                            <button type="button" class="btn btn-light font-weight-bold"
                                id="kt_blockui_card_custom_text_2">Custom text 2</button>
                        </div>
                        <!--begin::Code example-->
                        <div class="example-code mt-7">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_3_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_3_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_3_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
       &lt;div class="card card-custom gutter-b" id="kt_blockui_card"&gt;
       ...
       &lt;/div&gt;
             </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_3_js">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
       $('#kt_blockui_card_default').click(function() {
        KTApp.block('#kt_blockui_card');

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_card');
        }, 2000);
       });

       $('#kt_blockui_card_overlay_color').click(function() {
        KTApp.block('#kt_blockui_card', {
         overlayColor: 'red',
         opacity: 0.1,
         state: 'primary' // a bootstrap color
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_card');
        }, 2000);
       });

       $('#kt_blockui_card_custom_spinner').click(function() {
        KTApp.block('#kt_blockui_card', {
         overlayColor: '#000000',
         state: 'warning', // a bootstrap color
         size: 'lg' //available custom sizes: sm|lg
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_card');
        }, 2000);
       });

       $('#kt_blockui_card_custom_text_1').click(function() {
        KTApp.block('#kt_blockui_card', {
         overlayColor: '#000000',
         state: 'danger',
         message: 'Please wait...'
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_card');
        }, 2000);
       });

       $('#kt_blockui_card_custom_text_2').click(function() {
        KTApp.block('#kt_blockui_card', {
         overlayColor: '#000000',
         state: 'primary',
         message: 'Processing...'
        });

        setTimeout(function() {
         KTApp.unblock('#kt_blockui_card');
        }, 2000);
       });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Page Blocking Examples</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic mb-5">
                            <p>Click below buttons to block this page.</p>
                            <div class="mt-5">
                                <button type="button" class="btn btn-light font-weight-bold"
                                    id="kt_blockui_page_default">Default</button>
                                <button type="button" class="btn btn-light font-weight-bold"
                                    id="kt_blockui_page_overlay_color">Overlay color</button>
                                <button type="button" class="btn btn-light font-weight-bold"
                                    id="kt_blockui_page_custom_spinner">Custom spinner</button>
                                <button type="button" class="btn btn-light font-weight-bold"
                                    id="kt_blockui_page_custom_text_1">Custom text 1</button>
                                <button type="button" class="btn btn-light font-weight-bold"
                                    id="kt_blockui_page_custom_text_2">Custom text 2</button>
                            </div>
                            <!--end::Preview-->
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example-code mt-7">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_4_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_4_js" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
       $('#kt_blockui_page_default').click(function() {
        KTApp.blockPage();

        setTimeout(function() {
         KTApp.unblockPage();
        }, 2000);
       });

       $('#kt_blockui_page_overlay_color').click(function() {
        KTApp.blockPage({
         overlayColor: 'red',
         opacity: 0.1,
         state: 'primary' // a bootstrap color
        });

        setTimeout(function() {
         KTApp.unblockPage();
        }, 2000);
       });

       $('#kt_blockui_page_custom_spinner').click(function() {
        KTApp.blockPage({
         overlayColor: '#000000',
         state: 'warning', // a bootstrap color
         size: 'lg' //available custom sizes: sm|lg
        });

        setTimeout(function() {
         KTApp.unblockPage();
        }, 2000);
       });

       $('#kt_blockui_page_custom_text_1').click(function() {
        KTApp.blockPage({
         overlayColor: '#000000',
         state: 'danger',
         message: 'Please wait...'
        });

        setTimeout(function() {
         KTApp.unblockPage();
        }, 2000);
       });

       $('#kt_blockui_page_custom_text_2').click(function() {
        KTApp.blockPage({
         overlayColor: '#000000',
         state: 'primary',
         message: 'Processing...'
        });

        setTimeout(function() {
         KTApp.unblockPage();
        }, 2000);
       });
             </code>
</pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--begin::Modal-->
        <div class="modal fade" id="kt_blockui_modal_default" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="kt_blockui_modal_default_btn">Block
                            modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_blockui_modal_overlay_color" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="kt_blockui_modal_overlay_color_btn">Block
                            modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_blockui_modal_custom_spinner" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="kt_blockui_modal_custom_spinner_btn">Block
                            modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_blockui_modal_custom_text_1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="kt_blockui_modal_custom_text_1_btn">Block
                            modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_blockui_modal_custom_text_2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="kt_blockui_modal_custom_text_2_btn">Block
                            modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/miscellaneous/blockui.js') }}"></script>
@endsection
