<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>{{$pagedata['title']}}</title>

  {{--  Datatables css  and java cript files include  --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/r-2.2.2/rg-1.1.0/rr-1.2.4/datatables.min.css"/>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> 
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/r-2.2.2/rg-1.1.0/rr-1.2.4/datatables.min.js"></script>
  {{--  Datatables css  and java cript files include  --}}


  <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/toggle/switchery.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/validation/form-validation.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/switch.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  @include('admin.admin_include.ad_navbar')
  @include('admin.admin_include.ad_sidebar')
  <div class="app-content content">
    <div class="content-wrapper">

      {{--  Page Title  --}}
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">{{$pagedata['pagename']}}</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ $pagedata['pageurl']}}">{{$pagedata['pagename']}}</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      {{--  Breadcrum starting  --}}
      <div class="content-body">
        
        @if (Session::has('Notify'))
            {!! session('Notify') !!}
        @endif


        <section class="input-validation">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  {{-- <h2> Welcome {{ Auth::user()->name}},</h2> --}}
                  <br/>
                  {{--  Line Change  --}}
                  <h4 class="card-title">Here are your details</h4>
                  {{--  {{$Categories}}  --}}
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="card-content collapse show">
                    {{--  Table start  --}}
                    <div class="card-body">

                            <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Post Title</th>
                                            <th>Post Status</th>
                                            <th>Created At</th>
                                            <th>Show page</th>
                                            {{-- <th>Delete</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @for ($i = 0; $i < count($page); $i++)
                                              <tr>
                                                <td>{{$page[$i]['post_title']}}</td>
                                                <td>
                                                  @if ($page[$i]['post_status'] == 0)
                                                  {{'Not published'}}
                                                  @else
                                                  {{'Published'}}
                                                  @endif
                                                </td>
                                                <td>{{$page[$i]['created_at']}}</td>
                                                <td>
                                                  <a  target="__blank" href="/pages/{{$page[$i]['post_slug']}}" >
                                                    <button type="button" class="btn btn-block btn-info round btn-min-width mr-1 mb-1">Show page</button>
                                                  </a>
                                                </td>
                                              </tr>
                                          @endfor
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Post Title</th>
                                            <th>Post Status</th>
                                            <th>Created At</th>
                                            <th>Show page</th>
                                            {{-- <th>Delete</th> --}}
                                        </tr>
                                    </tfoot>
                                </table>
                            {{--  Table End   --}}

                        </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
  <!-- BEGIN VENDOR JS-->
  {{--  <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>  --}}
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"
  type="text/javascript"></script>
  <script src="/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <script src="/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"
  type="text/javascript"></script>
  <script src="/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="/app-assets/js/scripts/forms/validation/form-validation.js"
  type="text/javascript"></script>

  <!-- END PAGE LEVEL JS-->
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );

</script>



</body>
</html>
