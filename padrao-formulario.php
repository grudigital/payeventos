<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html class="loading" lang="pt-BR" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include 'includes/head.php'; ?>
</head>


<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">


<?php include 'includes/topo.php'; ?>


<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->

<?php include 'includes/menu.php'; ?>


<!-- BEGIN: Main Menu-->


<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Input</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                </li>
                                <li class="breadcrumb-item active">Input
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Inputs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Basic Input</label>
                                                <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="helpInputTop">Input text with help</label>
                                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                                <input type="text" class="form-control" id="helpInputTop">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Disabled Input</label>
                                                <input type="text" class="form-control" id="disabledInput" disabled>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="helperText">With Helper Text</label>
                                                <input type="text" id="helperText" class="form-control" placeholder="Name">
                                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Readonly Input</label>
                                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't update me :P">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Static Text</label>
                                                <p class="form-control-static" id="staticInput">email@pixinvent.com</p>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Inputs end -->

            <!-- Input Style start -->
            <section id="input-style">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Styles</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>To set rounded border to input box, use <code>.round</code> class and
                                                to set square border to input box, use <code>.sqaure</code> class alongwith <code>.form-control</code> class.</p>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="roundText">Rounded Input</label>
                                                <input type="text" id="roundText" class="form-control round" placeholder="Rounded Input">
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="squareText">Square Input</label>
                                                <input type="text" id="squareText" class="form-control square" placeholder="square Input">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Style end -->

            <!-- Floating Label Inputs start -->
            <section id="floating-label-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating Label Inputs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>For Flating Label Inputs, need to use <code>.form-label-group</code> class & add attribute <code>disabled</code> for disabled Floating Label Input.</p>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="floating-label1" placeholder="Label-placeholder">
                                                <label for="floating-label1">Label-placeholder</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="floating-label-disable" placeholder="Label-placeholder" disabled>
                                                <label for="floating-label-disable">Disabled-placeholder</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Floating Label Inputs end -->

            <!-- Basic File Browser start -->
            <section id="input-file-browser">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <label class="card-title">File input</label>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <fieldset class="form-group">
                                                <label for="basicInputFile">Simple File Input</label>
                                                <input type="file" class="form-control-file" id="basicInputFile">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <fieldset class="form-group">
                                                <label for="basicInputFile">With Browse button</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="basic-textarea">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>To add a Textarea we have the component <code>textarea</code>.</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Textarea end -->

            <!-- Floating Label Textarea start -->
            <section class="floating-label-textarea">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating Label</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="mb-2">Use <code>.form-label-group</code> to add a Floating Label with Textarea.</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-label-group">
                                                <textarea class="form-control" id="label-textarea" rows="3" placeholder="Label in Textarea"></textarea>
                                                <label for="label-textarea">Label in Textarea</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Floating Label Textarea end -->

            <!-- Counter Textarea start -->
            <section class="counter-textarea">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Counter</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="mb-2">There are times when we need the user to only enter a certain number of characters for it, we have the property counter, the value is a number and determines the maximum. Use <code>.char-textarea</code> with <code>&lt;textarea&gt;</code>tag for counting text-length.</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-label-group mb-0">
                                                <textarea data-length=20 class="form-control char-textarea" id="textarea-counter" rows="3" placeholder="Counter"></textarea>
                                                <label for="textarea-counter">Counter</label>
                                            </fieldset>
                                            <small class="counter-value float-right"><span class="char-count">0</span> / 20 </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic File Browser end -->

            <!-- validations start -->
            <section class="validations" id="validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Validation States</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>You can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <label for="valid-state">Valid State</label>
                                            <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid" value="Valid" required>
                                            <div class="valid-feedback">
                                                This is valid state.
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <label for="invalid-state">Invalid State</label>
                                            <input type="text" class="form-control is-invalid" id="invalid-state" placeholder="Invalid" value="Invalid" required>
                                            <div class="invalid-feedback">
                                                This is invalid state.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- validations end -->

            <!-- Tooltip validations start -->
            <section class="tooltip-validations" id="tooltip-validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Validation States with Tootltips</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p><code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 col-12 mb-3">
                                                <label for="validationTooltip01">First name</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <label for="validationTooltip02">Last name</label>
                                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <label for="validationTooltip03">City</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tooltip validations end -->

            <!-- Input with Icons start -->
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input with Icons</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>For Input Box with left side icon, use class <code>.has-icon-left</code> and for use divider between icon and input text box use <code>.input-divider-left</code> or <code>.input-divider-right</code> for left and right divider respectively.</p>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Left Icon
                                            </div>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="iconLeft1" placeholder="Icon Left, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-phone"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Right Icon
                                            </div>
                                            <fieldset class="form-group position-relative">
                                                <input type="text" class="form-control" id="iconLeft2" placeholder="Icon Right, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-file"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Left Icon with Divider
                                            </div>
                                            <fieldset class="form-group position-relative has-icon-left input-divider-left">
                                                <input type="text" class="form-control" id="iconLeft3" placeholder="Icon Left, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-phone"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Right Icon with divider
                                            </div>
                                            <fieldset class="form-group position-relative input-divider-right">
                                                <input type="text" class="form-control" id="iconLeft4" placeholder="Icon Right, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-file"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Floating Label Input with Icons</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-2">
                                                Left Icon
                                            </div>
                                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="iconLabelLeft" placeholder="Icon Left, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-phone"></i>
                                                </div>
                                                <label for="iconLabelLeft">Icon Left, Default Input</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-2">
                                                Right Icon
                                            </div>
                                            <fieldset class="form-label-group form-group position-relative">
                                                <input type="text" class="form-control" id="iconLabelRight" placeholder="Icon Right, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-file"></i>
                                                </div>
                                                <label for="iconLabelRight">Icon Right, Default Input</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-2">
                                                Left Icon with Divider
                                            </div>
                                            <fieldset class="form-label-group form-group position-relative has-icon-left input-divider-left">
                                                <input type="text" class="form-control" id="iconLeftDivider" placeholder="Icon Left, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-phone"></i>
                                                </div>
                                                <label for="iconLeftDivider">Icon Left, Default Input</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="text-bold-600 font-medium-2 mb-2">
                                                Right Icon with divider
                                            </div>
                                            <fieldset class="form-label-group form-group position-relative input-divider-right">
                                                <input type="text" class="form-control" id="iconRightDivider" placeholder="Icon Right, Default Input">
                                                <div class="form-control-position">
                                                    <i class="feather icon-file"></i>
                                                </div>
                                                <label for="iconRightDivider">Icon Right, Default Input</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input with Icons end -->

            <!-- Input Sizing start -->
            <section id="input-sizing">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Control Sizing Option</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp; <code>.form-control-sm</code> for Large, Small input box.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Large
                                            </div>
                                            <input class="form-control form-control-lg" type="text" placeholder="Large Input">
                                        </div>
                                        <div class="col-12">
                                            <div class="text-bold-600 font-medium-2 my-2">
                                                Default
                                            </div>
                                            <input class="form-control" type="text" placeholder="Default Input">
                                        </div>
                                        <div class="col-12">
                                            <div class="text-bold-600 font-medium-2 my-2">
                                                Small
                                            </div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Small Input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Label Control Sizing Option</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp; <code>.form-control-sm</code> for Large, Small input box.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Large
                                            </div>
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control form-control-lg" id="label-large" placeholder="Large Input">
                                                <label for="label-large">Large Input</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Default
                                            </div>
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="label-default" placeholder="Default Input">
                                                <label for="label-default">Default Input</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-bold-600 font-medium-2 mb-1">
                                                Small
                                            </div>
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control form-control-sm" id="label-small" placeholder="Small Input">
                                                <label for="label-small">Small Input</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Sizing end -->

        </div>
    </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">Copyright &copy; 2020<a
                class="text-bold-800 grey darken-2" href="https://www.payevents.com" target="_blank">Payevents,</a>Todos os direitos reservados</span><span
            class="float-md-right d-none d-md-block">Desenvolvido com <i class="feather icon-heart pink"></i> por <a
                href="http://www.grudigital.com.br">Grudigital</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>