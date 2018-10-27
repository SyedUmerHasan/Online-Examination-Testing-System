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
  <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/ui/prism.min.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/tags/tagging.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
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
  @include('admin.admin_include.ad_sidebar')
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
                  <h4 class="card-title">Fill this form to create a web page using CMS</h4>
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
                    <form class="form form-horizontal form-bordered" method="POST" action="{{ url('/admin/addpages') }}">
                      {{csrf_field()}}
                      <div class="form-body">
                        <h4 class="form-section"><i class="la la-eye"></i> Create Page</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="PostTitle">Page Title</label>
                              <div class="col-md-9">
                                <input type="text" id="PostTitle" class="form-control border-primary" placeholder="Post Title"
                                name="PostTitle" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="userinput4">Page Status</label>
                              <div class="col-md-9">
                                <select name="PostStatus" id="PostStatus" class="form-control border-primary">
                                  <option value="1" default>Published</option>
                                  <option value="0">Not Published</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="PostTagline">Page Tagline</label>
                              <div class="col-md-9">
                                <input type="text" id="PostTagline" class="form-control border-primary" placeholder="Post Tagline"
                                name="PostTagline" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="PageCrousel">Page Crousel</label>
                              <div class="col-md-9">
                                <select name="PageCrousel" id="PageCrousel" class="form-control border-primary">
                                  <option value="0" selected>Choose here</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="PageNavigationBar">Page Navigation bar</label>
                              <div class="col-md-9">
                                <select name="PageNavigationBar" id="PageNavigationBar" class="form-control border-primary">
                                  <option value="0" selected>Choose here</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="PageSideBar">Page Side Bar</label>
                              <div class="col-md-9">
                                <select name="PageSideBar" id="PageSideBar" class="form-control border-primary">
                                  <option value="0" selected>Choose here</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="PageFooter">Page Footer</label>
                              <div class="col-md-9">
                                <select name="PageFooter" id="PageFooter" class="form-control border-primary">
                                  <option value="0" selected>Choose here</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="PageHomePriority">Page Home Priority</label>
                              <div class="col-md-9">
                                <select name="PageHomePriority" id="PageHomePriority" class="form-control border-primary">
                                  <option value="0" selected>Choose here</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="navbarselect">Navigation Bar Links</label>
                                <div class="col-md-9">
                                <select name="navbarselect" id="navbarselect" class="form-control border-primary">
                                  <option value="0" selected>Parent itself</option>
                                  @foreach ($navbar_links as $item)
                                      <option value="{{$item->post_slug}}">{{$item->post_title}}</option>
                                  @endforeach
                                 </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-9">
                            <div class="form-group row last">
                              <label class="col-md-2 label-control" for="PostSummary">Post Summary</label>
                              <div class="col-md-10">
                                <textarea id="PostSummary" class="form-control border-primary" placeholder="Post Summary"
                                name="PostSummary"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                 
              </script>
              {{-- Meta Data  --}}
                        
                        <h4 class="form-section"><i class="la la-eye"></i> SEO Optimization</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="PostTitle">SEO Title</label>
                              <div class="col-md-9">
                                <input type="text" id="SeoTitle" class="form-control border-primary" placeholder="SEO Title"
                                name="SeoTitle" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="SeoAuthor">SEO Author</label>
                              <div class="col-md-9">
                                <input type="text" id="SeoAuthor" class="form-control border-primary" placeholder="SEO Author"
                                name="SeoAuthor">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="SeoDescription">SEO Description</label>
                              <div class="col-md-9">
                                <input type="text" id="SeoDescription" class="form-control border-primary" placeholder="SEO Description"
                                name="SeoDescription">
                              </div>
                            </div>
                          </div>
                        </div>
                        

                        {{-- Meta Data  --}}
                        
                        <h4 class="form-section"><i class="ft-mail"></i> Create content using CK editor</h4>
                        <div class="row">
                          <div class="col-md-12 ">
                            <textarea name="ckeditor" id="ckeditor" cols="30" rows="15" class="ckeditor"></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">  
                            <div class="form-actions right">
                              <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>

                      </div>
                    </div>


                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!-- Basic CKEditor end -->
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
  <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="/app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
  <script src="/app-assets/vendors/js/forms/tags/tagging.min.js" type="text/javascript"></script>
  <script src="/app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="/app-assets/js/scripts/editors/editor-ckeditor.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/forms/tags/tagging.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>