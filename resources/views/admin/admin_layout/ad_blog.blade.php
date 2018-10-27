
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  {{--  Meta Tags  --}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
  {{--  Meta Tags  --}}

  {{--  Title Tags  --}}
    <title>@yield('title')</title>
  {{--  Title Tags  --}}
  
  {{--  CSS files  --}}
  @include('admin.admin_include.ad_style')
  {{--  CSS files  --}}
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">


{{--  Navbar  --}}
  @include('admin.admin_include.ad_navbar')
{{--  Navbar  --}}

{{--  SideBar  --}}
  @include('admin.admin_include.ad_sidebar')
{{--  SideBar  --}}

  <!-- fixed-top-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
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
        {{--  Page Title  --}}
        {{--  Setting button  --}}
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
        <!-- Basic CKEditor start -->
        <section id="basic">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Basic CKEditor</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                                        <form class="form form-horizontal form-bordered" method="POST" action="{{ url('/admin/AddCategory') }}">
                      {{csrf_field()}}
                      <div class="form-body">
                        <h4 class="form-section"><i class="la la-eye"></i> Category Details</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="CategoryName">CategoryName</label>
                              <div class="col-md-9">
                                <input type="text" id="CategoryName" class="form-control border-primary" placeholder="Category Name"
                                name="CategoryName" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="userinput2">Last Name</label>
                              <div class="col-md-9">
                                <input type="text" id="userinput2" class="form-control border-primary" placeholder="Last Name"
                                name="lastname">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="userinput3">Username</label>
                              <div class="col-md-9">
                                <input type="text" id="userinput3" class="form-control border-primary" placeholder="Username"
                                name="username">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="userinput4">Nick Name</label>
                              <div class="col-md-9">
                                <input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name"
                                name="nickname">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="userinput5">Email</label>
                              <div class="col-md-9">
                                <input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="userinput6">URL</label>
                              <div class="col-md-9">
                                <input class="form-control border-primary" type="url" placeholder="http://" id="URL" name="URL" required>
                              </div>
                            </div>
                            <div class="form-group row last">
                              <label class="col-md-3 label-control">Contact Number</label>
                              <div class="col-md-9">
                                <input class="form-control border-primary" type="tel" placeholder="Contact Number"
                                id="userinput7">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="userinput8">Product Detail</label>
                              <div class="col-md-9">
                                <textarea id="ProductDetail" rows="6" class="form-control border-primary" name="ProductDetail"
                                placeholder="Product Detail" required></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="userinput8">Product Detail</label>
                              <div class="col-md-9">
                                <textarea id="ProductDetail" rows="6" class="form-control border-primary" name="ProductDetail"
                                placeholder="Product Detail" required></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <textarea name="ckeditor" id="ckeditor" cols="30" rows="15" class="ckeditor"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>


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

  @include('admin.admin_include.ad_footer')
  @include('admin.admin_include.ad_scripts')
</body>
</html>












*