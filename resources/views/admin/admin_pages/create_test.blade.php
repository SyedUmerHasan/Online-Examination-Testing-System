<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>{{config('app.name')}}</title>
  <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  @include('admin.admin_include.ad_navbar')
  @include('admin.admin_include.ad_sidebar',['testresult' => $testresult])
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        {{--  Page Title  --}}
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Create Test</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Create Test</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        {{--  Page Title  --}}
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
            id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item"
              href="component-buttons-extended.html">Buttons</a></div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic section start -->
        <section id="form-repeater">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form form-horizontal form-bordered" class="repeater" method="POST" action="{{ url('/admin/addposts') }}">
                                    {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-2 label-control" for="TestTitle">Test Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="TestTitle" class="form-control border-primary" placeholder="Test Title" name="TestTitle" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row last">
                                                <label class="col-md-2 label-control" for="TestStatus">Test Status</label>
                                                <div class="col-md-10">
                                                    <select name="TestStatus" id="TestStatus" class="form-control border-primary">
                                                        <option value="0" selected>Choose here</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row last">
                                                <label class="col-md-2 label-control" for="TestCategory">Test Category</label>
                                                <div class="col-md-10">
                                                    <select name="TestCategory" id="TestCategory" class="form-control border-primary">
                                                        <option value="0" selected>Choose here</option>
                                                        @foreach ($options as $item)
                                                        <option value="{{$item->category_text}}">{{$item->category_text}}</option>   
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--  Repeater  --}}
                                    <div class="repeater-default">
                                        <div data-repeater-list="results">
                                            <div data-repeater-item="">
                                                <form class="form row">
                                                    <div class="row">
                                                        <div class="form-group col-2 align-self-center">
                                                            <input type="radio" class="state iradio_square radiouncheck form-control" id="answers" name="answers">
                                                        </div>
                                                        
                                                        <div class="form-group col-6">
                                                            <input type="text" class="form-control" id="answerstext" name="answerstext">
                                                        </div>
                                                        
                                                        <div class="form-group col-3 text-center">
                                                            <button type="button" class="btn btn-danger" data-repeater-delete> <i class="ft-x"></i> Delete</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group overflow-hidden">
                                            <div class="col-12">
                                                <button data-repeater-create type="button" class="btn btn-primary">
                                                    <i class="ft-plus"></i> Add
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="ft-save"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  Repeater  --}}                                    
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
      $(document).on('click','.radiouncheck',function(){
          $('.radiouncheck').prop('checked',false);
          $(this).prop('checked',true);
      });
  </script>
  <!-- BEGIN VENDOR JS-->
  <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/forms/form-repeater.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
</body>
</html>