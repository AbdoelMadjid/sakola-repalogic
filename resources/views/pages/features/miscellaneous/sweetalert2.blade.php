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
            <div class="alert-text">A beautiful, responsive, customizable, accessible (wai-aria) replacement for
                javascript's popup boxes.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold mr-1" href="https://sweetalert2.github.io/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/sweetalert2/sweetalert2" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin: Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Basic alert.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_1">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_1").click(function(e) {
                            Swal.fire("Good job!");
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Alert title and text.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_2">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_2").click(function(e) {
                            Swal.fire("Here's the title!", "...and here's the text!");
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">State Icons</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Enable
                                <code>warning</code>,
                                <code>error</code>,
                                <code>success</code>,
                                <code>info</code>and
                                <code>question</code>state icons
                            </p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-warning font-weight-bold"
                                    id="kt_sweetalert_demo_3_1">Warning</button>
                                <button type="button" class="btn btn-light-danger font-weight-bold"
                                    id="kt_sweetalert_demo_3_2">Error</button>
                                <button type="button" class="btn btn-light-success font-weight-bold"
                                    id="kt_sweetalert_demo_3_3">Success</button>
                                <button type="button" class="btn btn-light-info font-weight-bold"
                                    id="kt_sweetalert_demo_3_4">Info</button>
                                <button type="button" class="btn btn-light-dark font-weight-bold"
                                    id="kt_sweetalert_demo_3_5">Question</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_3_1").click(function(e) {
                            Swal.fire("Good job!", "You clicked the button!", "warning");
                        });

                        $("#kt_sweetalert_demo_3_2").click(function(e) {
                            Swal.fire("Good job!", "You clicked the button!", "error");
                        });

                        $("#kt_sweetalert_demo_3_3").click(function(e) {
                            Swal.fire("Good job!", "You clicked the button!", "success");
                        });

                        $("#kt_sweetalert_demo_3_4").click(function(e) {
                            Swal.fire("Good job!", "You clicked the button!", "info");
                        });

                        $("#kt_sweetalert_demo_3_5").click(function(e) {
                            Swal.fire("Good job!", "You clicked the button!", "question");
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Customization Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Change confirm button text and class.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_4">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
      $("#kt_sweetalert_demo_4").click(function (e) {
       Swal.fire({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Confirm me!",
        customClass: {
         confirmButton: "btn btn-primary"
        }
       });
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Custom button with icon.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_5">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
      $("#kt_sweetalert_demo_5").click(function (e) {
       Swal.fire({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "&lt;i class='la la-headphones'&gt;&lt;/i&gt; I am game!",
        showCancelButton: true,
        cancelButtonText: "&lt;i class='la la-thumbs-down'&gt;&lt;/i&gt; No, thanks",
        customClass: {
         confirmButton: "btn btn-danger",
         cancelButton: "btn btn-default"
        }
       });
      });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>A custom positioned dialog with timer to auto close.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_6">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_6").click(function(e) {
                            Swal.fire({
                                position: "top-right",
                                icon: "success",
                                title: "Your work has been saved",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        });
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
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Customization Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>jQuery HTML with custom
                                <a href="https://animate.style/" target="_blank" class="mr-2">animate.css</a>animation.
                            </p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_7">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
      $('#kt_sweetalert_demo_7').click(function (e) {
       Swal.fire({
        title: 'jQuery HTML example',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
          },
          hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
          }
         });
      });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>A warning message, with a function attached to the confirm button.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_8">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_8").click(function(e) {
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You won"t be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Yes, delete it!"
                            }).then(function(result) {
                                if (result.value) {
                                    Swal.fire(
                                        "Deleted!",
                                        "Your file has been deleted.",
                                        "success"
                                    )
                                }
                            });
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>By passing a parameter, you can execute something else for cancel.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_9">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_9").click(function(e) {
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You won"t be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Yes, delete it!",
                                cancelButtonText: "No, cancel!",
                                reverseButtons: true
                            }).then(function(result) {
                                if (result.value) {
                                    Swal.fire(
                                        "Deleted!",
                                        "Your file has been deleted.",
                                        "success"
                                    )
                                    // result.dismiss can be "cancel", "overlay",
                                    // "close", and "timer"
                                } else if (result.dismiss === "cancel") {
                                    Swal.fire(
                                        "Cancelled",
                                        "Your imaginary file is safe :)",
                                        "error"
                                    )
                                }
                            });
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>A message with a custom image and CSS animation disabled.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_10">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_10").click(function(e) {
                            Swal.fire({
                                title: "Sweet!",
                                text: "Modal with a custom image.",
                                imageUrl: "https://unsplash.it/400/200",
                                imageWidth: 400,
                                imageHeight: 200,
                                imageAlt: "Custom image",
                                animation: false
                            });
                        });
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>A message with auto close timer.</p>
                            <div class="example-preview">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    id="kt_sweetalert_demo_11">Show me</button>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
                        $("#kt_sweetalert_demo_11").click(function(e) {
                            Swal.fire({
                                title: "Auto close alert!",
                                text: "I will close in 5 seconds.",
                                timer: 5000,
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            }).then(function(result) {
                                if (result.dismiss === "timer") {
                                    console.log("I was closed by the timer")
                                }
                            })
                        });
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
        <!--end: Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/miscellaneous/sweetalert2.js') }}"></script>
@endsection
