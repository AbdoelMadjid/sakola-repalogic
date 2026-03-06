@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/jstree/jstree.bundle.css') }}" rel="stylesheet" type="text/css" />
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
            <div class="alert-text">jsTree is jquery plugin, that provides interactive trees.
                <br />For more info please visit
                <a class="font-weight-bold" href="https://www.jstree.com/demo/" target="_blank">jsTree's Home</a>or
                <a class="font-weight-bold" href="https://github.com/vakata/jstree" target="_blank">jsTree's Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Basic Tree</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_tree_1" class="tree-demo">
                            <ul>
                                <li>Root node 1
                                    <ul>
                                        <li data-jstree='{ "selected" : true }'>
                                            <a href="javascript:;">Initially selected</a>
                                        </li>
                                        <li data-jstree='{ "icon" : "flaticon2-gear text-success " }'>custom icon URL</li>
                                        <li data-jstree='{ "opened" : true }'>initially open
                                            <ul>
                                                <li data-jstree='{ "disabled" : true }'>Disabled Node</li>
                                                <li data-jstree='{ "type" : "file" }'>Another node</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "icon" : "flaticon2-rectangular text-danger" }'>Custom icon class
                                            (bootstrap)</li>
                                    </ul>
                                </li>
                                <li data-jstree='{ "type" : "file" }'>
                                    <a href="http://www.keenthemes.com">Clickable link node</a>
                                </li>
                            </ul>
                        </div>
                        <div class="alert alert-custom alert-light-primary font-weight-bold my-10">
                            <div class="alert-text">Note! Opened and selected nodes will be saved in the user's browser, so
                                when returning to the same tree the previous state will be restored.</div>
                        </div>
                        <!--begin::Code example-->
                        <div class="example-code">
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
        &lt;div id="kt_tree_1" class="tree-demo"&gt;
            &lt;ul&gt;
                &lt;li&gt;
                    Root node 1
                    &lt;ul&gt;
                        &lt;li data-jstree='{ "selected" : true }'&gt;
                            &lt;a href="javascript:;"&gt;
                            Initially selected &lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li data-jstree='{ "icon" : "flaticon2-gear text-success " }'&gt;
                            custom icon URL
                        &lt;/li&gt;
                        &lt;li data-jstree='{ "opened" : true }'&gt;
                            initially open
                            &lt;ul&gt;
                                &lt;li data-jstree='{ "disabled" : true }'&gt;
                                    Disabled Node
                                &lt;/li&gt;
                                &lt;li data-jstree='{ "type" : "file" }'&gt;
                                    Another node
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li data-jstree='{ "icon" : "flaticon2-rectangular text-danger" }'&gt;
                            Custom icon class (bootstrap)
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li data-jstree='{ "type" : "file" }'&gt;
                    &lt;a href="http://www.keenthemes.com"&gt;
                    Clickable link node &lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-js">
        $("#kt_tree_1").jstree({
            "core": {
                "themes": {
                    "responsive": false
                }
            },
            "types": {
                "default": {
                    "icon": "fa fa-folder"
                },
                "file": {
                    "icon": "fa fa-file"
                }
            },
            "plugins": ["types"]
        });
        </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Custom Icons &amp; Clickable Nodes</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_tree_2" class="tree-demo">
                            <ul>
                                <li>Root node 1
                                    <ul>
                                        <li data-jstree='{ "selected" : true }'>
                                            <a href="javascript:;">Initially selected</a>
                                        </li>
                                        <li data-jstree='{ "icon" : "flaticon2-analytics text-success " }'>custom icon URL
                                        </li>
                                        <li data-jstree='{ "opened" : true }'>initially open
                                            <ul>
                                                <li data-jstree='{ "disabled" : true }'>Disabled Node</li>
                                                <li data-jstree='{ "type" : "file" }'>Another node</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{ "icon" : "flaticon2-user text-danger" }'>Custom icon class
                                            (bootstrap)</li>
                                    </ul>
                                </li>
                                <li data-jstree='{ "type" : "file" }'>
                                    <a href="https://keenthemes.com/">Clickable link node</a>
                                </li>
                            </ul>
                        </div>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
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
                                        <pre>
<code class="language-html">
       &lt;div id="kt_tree_2" class="tree-demo"&gt;
        &lt;ul&gt;
         &lt;li&gt;
          Root node 1
          &lt;ul&gt;
           &lt;li data-jstree='{ "selected" : true }'&gt;
            &lt;a href="javascript:;"&gt;
            Initially selected &lt;/a&gt;
           &lt;/li&gt;
           &lt;li data-jstree='{ "icon" : "flaticon2-analytics text-success " }'&gt;
            custom icon URL
           &lt;/li&gt;
           &lt;li data-jstree='{ "opened" : true }'&gt;
            initially open
            &lt;ul&gt;
             &lt;li data-jstree='{ "disabled" : true }'&gt;
              Disabled Node
             &lt;/li&gt;
             &lt;li data-jstree='{ "type" : "file" }'&gt;
              Another node
             &lt;/li&gt;
            &lt;/ul&gt;
           &lt;/li&gt;
           &lt;li data-jstree='{ "icon" : "flaticon2-user text-danger" }'&gt;
            Custom icon class (bootstrap)
           &lt;/li&gt;
          &lt;/ul&gt;
         &lt;/li&gt;
         &lt;li data-jstree='{ "type" : "file" }'&gt;
          &lt;a href="https://keenthemes.com/"&gt;
          Clickable link node &lt;/a&gt;
         &lt;/li&gt;
        &lt;/ul&gt;
       &lt;/div&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_2_js">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-js">
       $('#kt_tree_2').jstree({
           "core": {
               "themes": {
                   "responsive": false
               }
           },
           "types": {
               "default": {
                   "icon": "fa fa-folder text-warning"
               },
               "file": {
                   "icon": "fa fa-file  text-warning"
               }
           },
           "plugins": ["types"]
       });

       // handle link clicks in tree nodes(support target="_blank" as well)
       $('#kt_tree_2').on('select_node.jstree', function(e, data) {
           var link = $('#' + data.selected).find('a');
           if (link.attr("href") != "#" &amp;&amp; link.attr("href") != "javascript:;" &amp;&amp; link.attr("href") != "") {
               if (link.attr("target") == "_blank") {
                   link.attr("href").target = "_blank";
               }
               document.location.href = link.attr("href");
               return false;
           }
       });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Checkable Tree</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_tree_3" class="tree-demo"></div>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
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
       &lt;div id="kt_tree_3" class="tree-demo"&gt;
       &lt;/div&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_3_js">
                                    <div class="example-highlight">
                                        <pre style="height:500px">
<code class="language-js">
       $('#kt_tree_3').jstree({
        "plugins": ["wholerow", "checkbox", "types"],
        "core": {
            "themes": {
                "responsive": false
            },
            "data": [{
                   "text": "Same but with checkboxes",
                    "children": [{
                        "text": "initially selected",
                        "state": {
                            "selected": true
                        }
                    }, {
                        "text": "custom icon",
                        "icon": "fa fa-warning text-danger"
                    }, {
                        "text": "initially open",
                        "icon": "fa fa-folder text-default",
                        "state": {
                            "opened": true
                        },
                        "children": ["Another node"]
                    }, {
                        "text": "custom icon",
                        "icon": "fa fa-warning text-waring"
                    }, {
                        "text": "disabled node",
                        "icon": "fa fa-check text-success",
                        "state": {
                            "disabled": true
                        }
                    }]
                },
                "And wholerow selection"
            ]
        },
        "types": {
            "default": {
                "icon": "fa fa-folder text-warning"
            },
            "file": {
                "icon": "fa fa-file  text-warning"
            }
        },
       });
       </code>
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
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Contextual Menu</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_tree_4" class="tree-demo"></div>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_4_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_4_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_4_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
       &lt;div id="kt_tree_4" class="tree-demo"&gt;
       &lt;/div&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_4_js">
                                    <div class="example-highlight">
                                        <pre style="height:500px">
<code class="language-js">
       $("#kt_tree_4").jstree({
           "core": {
               "themes": {
                   "responsive": false
               },
               // so that create works
               "check_callback": true,
               "data": [{
                       "text": "Parent Node",
                       "children": [{
                           "text": "Initially selected",
                           "state": {
                               "selected": true
                           }
                       }, {
                           "text": "Custom Icon",
                           "icon": "flaticon2-hourglass-1 text-danger"
                       }, {
                           "text": "Initially open",
                           "icon": "fa fa-folder text-success",
                           "state": {
                               "opened": true
                           },
                           "children": [{
                               "text": "Another node",
                               "icon": "fa fa-file text-waring"
                           }]
                       }, {
                           "text": "Another Custom Icon",
                           "icon": "flaticon2-drop text-waring"
                       }, {
                           "text": "Disabled Node",
                           "icon": "fa fa-check text-success",
                           "state": {
                               "disabled": true
                           }
                       }, {
                           "text": "Sub Nodes",
                           "icon": "fa fa-folder text-danger",
                           "children": [{
                                   "text": "Item 1",
                                   "icon": "fa fa-file text-waring"
                               },
                               {
                                   "text": "Item 2",
                                   "icon": "fa fa-file text-success"
                               },
                               {
                                   "text": "Item 3",
                                   "icon": "fa fa-file text-default"
                               },
                               {
                                   "text": "Item 4",
                                   "icon": "fa fa-file text-danger"
                               },
                               {
                                   "text": "Item 5",
                                   "icon": "fa fa-file text-info"
                               }
                           ]
                       }]
                   },
                   "Another Node"
               ]
           },
           "types": {
               "default": {
                   "icon": "fa fa-folder text-primary"
               },
               "file": {
                   "icon": "fa fa-file  text-primary"
               }
           },
           "state": {
               "key": "demo2"
           },
           "plugins": ["contextmenu", "state", "types"]
       });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Drag &amp; Drop</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_tree_5" class="tree-demo"></div>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_5_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_5_js">JS</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_5_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
       &lt;div id="kt_tree_5" class="tree-demo"&gt;
       &lt;/div&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_5_js">
                                    <div class="example-highlight">
                                        <pre style="height:500px">
<code class="language-js">
       $("#kt_tree_5").jstree({
           "core": {
               "themes": {
                   "responsive": false
               },
               // so that create works
               "check_callback": true,
               "data": [{
                       "text": "Parent Node",
                       "children": [{
                           "text": "Initially selected",
                           "state": {
                               "selected": true
                           }
                       }, {
                           "text": "Custom Icon",
                           "icon": "flaticon2-warning text-danger"
                       }, {
                           "text": "Initially open",
                           "icon": "fa fa-folder text-success",
                           "state": {
                               "opened": true
                           },
                           "children": [{
                               "text": "Another node",
                               "icon": "fa fa-file text-waring"
                           }]
                       }, {
                           "text": "Another Custom Icon",
                           "icon": "flaticon2-bell-5 text-waring"
                       }, {
                           "text": "Disabled Node",
                           "icon": "fa fa-check text-success",
                           "state": {
                               "disabled": true
                           }
                       }, {
                           "text": "Sub Nodes",
                           "icon": "fa fa-folder text-danger",
                           "children": [{
                                   "text": "Item 1",
                                   "icon": "fa fa-file text-waring"
                               },
                               {
                                   "text": "Item 2",
                                   "icon": "fa fa-file text-success"
                               },
                               {
                                   "text": "Item 3",
                                   "icon": "fa fa-file text-default"
                               },
                               {
                                   "text": "Item 4",
                                   "icon": "fa fa-file text-danger"
                               },
                               {
                                   "text": "Item 5",
                                   "icon": "fa fa-file text-info"
                               }
                           ]
                       }]
                   },
                   "Another Node"
               ]
           },
           "types": {
               "default": {
                   "icon": "fa fa-folder text-success"
               },
               "file": {
                   "icon": "fa fa-file  text-success"
               }
           },
           "state": {
               "key": "demo2"
           },
           "plugins": ["dnd", "state", "types"]
       });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Ajax Data</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_tree_6" class="tree-demo"></div>
                        <div class="alert alert-custom alert-light-primary my-10">
                            <div class="alert-text">Note! The tree nodes are loaded from server side demo script via ajax.
                            </div>
                        </div>
                        <!--begin::Code example-->
                        <div class="example-code">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_6_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_6_js">JS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_6_json">JSON</a>
                                </li>
                            </ul>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_6_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
       &lt;div id="kt_tree_6" class="tree-demo"&gt;
       &lt;/div&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_6_js">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-js">
       $("#kt_tree_6").jstree({
           "core": {
               "themes": {
                   "responsive": false
               },
               // so that create works
               "check_callback": true,
               "data": {
                   "url": function(node) {
                       return HOST_URL + "api/jstree/ajax_data.php";
                   },
                   "data": function(node) {
                       return {
                           "parent": node.id
                       };
                   }
               }
           },
           "types": {
               "default": {
                   "icon": "fa fa-folder text-primary"
               },
               "file": {
                   "icon": "fa fa-file  text-primary"
               }
           },
           "state": {
               "key": "demo3"
           },
           "plugins": ["dnd", "state", "types"]
       });
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_6_json">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-js">
       [{
           "id": "node_158179869559930",
           "icon": "fa fa-folder icon-lg text-warning",
           "text": "Node 1581798695",
           "children": false
       }, {
           "id": "node_15817986951142",
           "icon": "fa fa-folder icon-lg text-success",
           "text": "Node 1581798695",
           "children": false
       }, {
           "id": "node_158179869568539",
           "icon": "fa fa-file icon-lg text-warning",
           "text": "Node 1581798695",
           "children": true
       }]
       </code>
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
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/jstree/jstree.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/features/miscellaneous/treeview.js') }}"></script>
@endsection
