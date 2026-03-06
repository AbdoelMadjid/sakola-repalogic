@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Crud
            @endslot
            @slot('li_2')
                Forms
            @endslot
            @slot('li_3')
                Controls
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic Examples</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Default Switch</label>
                                <div class="col-3">
                                    <span class="switch">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Unchecked State</label>
                                <div class="col-3">
                                    <span class="switch">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-icon">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Disabled State</label>
                                <div class="col-3">
                                    <span class="switch">
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-icon">
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Default Switch&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-icon"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Unchecked State&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch"&gt;
          &lt;label&gt;
           &lt;input type="checkbox"  name=""/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-icon"&gt;
          &lt;label&gt;
           &lt;input type="checkbox"  name=""/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Disabled State&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" disabled="disabled"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-icon"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" disabled="disabled"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/form&gt;
     </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <h3 class="card-title">Sizing</h3>
                    </div>
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="mb-3 font-weight-bold font-size-lg">Large size:</div>
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Default Switch</label>
                                <div class="col-3">
                                    <span class="switch switch-lg">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-lg switch-icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Unchecked State</label>
                                <div class="col-3">
                                    <span class="switch switch-lg">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-lg switch-icon">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Disabled State</label>
                                <div class="col-3">
                                    <span class="switch switch-lg">
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-lg switch-icon">
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin: Example Code-->
                        <div class="example example-compact mt-2 mb-10">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;form class="form"&gt;
        &lt;div class="form-group row"&gt;
         &lt;label class="col-3 col-form-label"&gt;Default Switch&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-lg"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" checked="checked" name="select"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-lg switch-icon"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" checked="checked" name="select"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
         &lt;label class="col-3 col-form-label"&gt;Unchecked State&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-lg"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" name="select" /&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-lg switch-icon"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" name="select" /&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
         &lt;label class="col-3 col-form-label"&gt;Disabled State&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-lg"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" disabled="disabled"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-lg switch-icon"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" disabled="disabled"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end: Example Code-->
                        <div class="mb-3 font-weight-bold font-size-lg">Small size:</div>
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Default Switch</label>
                                <div class="col-3">
                                    <span class="switch switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-sm switch-icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Unchecked State</label>
                                <div class="col-3">
                                    <span class="switch switch-sm">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-sm switch-icon">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Disabled State</label>
                                <div class="col-3">
                                    <span class="switch switch-sm">
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">With Icon</label>
                                <div class="col-3">
                                    <span class="switch switch-sm switch-icon">
                                        <label>
                                            <input type="checkbox" disabled="disabled" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin: Example Code-->
                        <div class="example example-compact mt-2">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;form class="form"&gt;
        &lt;div class="form-group row"&gt;
         &lt;label class="col-3 col-form-label"&gt;Default Switch&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-sm"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" checked="checked" name="select"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-sm switch-icon"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" checked="checked" name="select"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
         &lt;label class="col-3 col-form-label"&gt;Unchecked State&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-sm"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" name="select" /&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-sm switch-icon"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" name="select" /&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
         &lt;label class="col-3 col-form-label"&gt;Disabled State&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-sm"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" disabled="disabled"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;label class="col-3 col-form-label"&gt;With Icon&lt;/label&gt;
         &lt;div class="col-3"&gt;
          &lt;span class="switch switch-sm switch-icon"&gt;
           &lt;label&gt;
            &lt;input type="checkbox" disabled="disabled"/&gt;
            &lt;span&gt;&lt;/span&gt;
           &lt;/label&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end: Example Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Solid Style</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Success</label>
                                <div class="col-3">
                                    <span class="switch switch-success">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">Primary</label>
                                <div class="col-3">
                                    <span class="switch switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Info</label>
                                <div class="col-3">
                                    <span class="switch switch-info">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">Danger</label>
                                <div class="col-3">
                                    <span class="switch switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Brand</label>
                                <div class="col-3">
                                    <span class="switch switch-brand">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">Dark</label>
                                <div class="col-3">
                                    <span class="switch switch-dark">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Success&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-success"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;Primary&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-primary"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Info&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-info"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;Danger&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-danger"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Brand&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-brand"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;Dark&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-dark"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/form&gt;
                    </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Outline Style</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Success</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-success">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">Warning</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-warning">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Info</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-info">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">Danger</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Primary</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                                <label class="col-3 col-form-label">Brand</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-brand">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Dark</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-dark">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Success&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-success"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;Warning&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-warning"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Info&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-info"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;Danger&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-danger"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Primary&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-primary"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
        &lt;label class="col-3 col-form-label"&gt;Brand&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-brand"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row"&gt;
        &lt;label class="col-3 col-form-label"&gt;Dark&lt;/label&gt;
        &lt;div class="col-3"&gt;
         &lt;span class="switch switch-outline switch-icon switch-dark"&gt;
          &lt;label&gt;
           &lt;input type="checkbox" checked="checked" name="select"/&gt;
           &lt;span&gt;&lt;/span&gt;
          &lt;/label&gt;
         &lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/form&gt;
                    </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
