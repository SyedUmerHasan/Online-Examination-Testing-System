<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    + Bitcoin Dashboard</title>
  <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/chartist.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/timeline.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/dashboard-ecommerce.css">
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
      </div>
      <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">850</h3>
                      <h6>Products Sold</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">$748</h3>
                      <h6>Net Profit</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">146</h3>
                      <h6>New Customers</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">99.89 %</h3>
                      <h6>Customer Satisfaction</h6>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ eCommerce statistic -->
        <!-- Products sell and New Orders -->
        <div class="row match-height">
          <div class="col-xl-8 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
              <div class="card-header card-header-transparent py-20">
                <div class="btn-group dropdown">
                  <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                  <div class="dropdown-menu animate" role="menu">
                    <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">profit</a>
                  </div>
                </div>
                <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                  <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                </ul>
              </div>
              <div class="widget-content tab-content bg-white p-20">
                <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                  <div class="table-responsive">
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">Product</th>
                          <th class="border-top-0">Customers</th>
                          <th class="border-top-0">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-truncate">iPhone X</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-19.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-18.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-17.png"
                                alt="Avatar">
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+4 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$8999</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Pixel 2</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Scott"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-16.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Charles Miller"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-15.png"
                                alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$5550</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">OnePlus</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Christine Ramos"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-11.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Thomas Brewer"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-10.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Chapman"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-9.png"
                                alt="Avatar">
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+3 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$9000</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Galaxy</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Ryan Schneider"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-14.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Tiffany Oliver"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-13.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joan Reid"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-12.png"
                                alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$7500</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Moto Z2</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-8.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-7.png"
                                alt="Avatar">
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                              class="avatar avatar-sm pull-up">
                                <img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-6.png"
                                alt="Avatar">
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+1 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$8500</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Products sell and New Orders -->
        <!-- Recent Transactions -->
        <div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                      href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Invoice#</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Products</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Shipping</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="/app-assets/images/portrait/small/avatar-s-4.png"
                            alt="avatar">
                          </span>
                          <span>Elizabeth W.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-1.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-2.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-4.jpg"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>                          Declined</td>
                        <td class="text-truncate"><a href="#">INV-001002</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="/app-assets/images/portrait/small/avatar-s-5.png"
                            alt="avatar">
                          </span>
                          <span>Doris R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-6.jpg"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+2 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1850.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>                          Pending</td>
                        <td class="text-truncate"><a href="#">INV-001003</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="/app-assets/images/portrait/small/avatar-s-6.png"
                            alt="avatar">
                          </span>
                          <span>Megan S.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-2.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 3200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001004</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="/app-assets/images/portrait/small/avatar-s-7.png"
                            alt="avatar">
                          </span>
                          <span>Andrew D.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-6.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-1.jpg"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 4500.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001005</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="/app-assets/images/portrait/small/avatar-s-9.png"
                            alt="avatar">
                          </span>
                          <span>Walter R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="/app-assets/images/portfolio/portfolio-3.jpg"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%"
                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1500.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Recent Transactions -->
        <!--Recent Orders & Monthly Sales -->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-content ">
                <div id="cost-revenue" class="height-250 position-relative"></div>
              </div>
              <div class="card-footer">
                <div class="row mt-1">
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Products</h6>
                    <h2 class="block font-weight-normal">18.6 k</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%"
                      aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Sales</h6>
                    <h2 class="block font-weight-normal">64.54 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Cost</h6>
                    <h2 class="block font-weight-normal">24.38 B</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%"
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Revenue</h6>
                    <h2 class="block font-weight-normal">36.72 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%"
                      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body sales-growth-chart">
                  <div id="monthly-sales" class="height-250"></div>
                </div>
              </div>
              <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                  <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                  <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a>
                  <span class="text-muted">for the last year.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Recent Orders & Monthly Sales -->
        <!-- Basic Horizontal Timeline -->
        <div class="row match-height">
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic Card</h4>
              </div>
              <div class="card-content">
                <img class="img-fluid" src="/app-assets/images/carousel/05.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                  <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Horizontal Timeline</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="card-text">
                    <section class="cd-horizontal-timeline">
                      <div class="timeline">
                        <div class="events-wrapper">
                          <div class="events">
                            <ol>
                              <li><a href="#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
                              <li><a href="#0" data-date="28/02/2015">28 Feb</a></li>
                              <li><a href="#0" data-date="20/04/2015">20 Mar</a></li>
                              <li><a href="#0" data-date="20/05/2015">20 May</a></li>
                              <li><a href="#0" data-date="09/07/2015">09 Jul</a></li>
                              <li><a href="#0" data-date="30/08/2015">30 Aug</a></li>
                              <li><a href="#0" data-date="15/09/2015">15 Sep</a></li>
                            </ol>
                            <span class="filling-line" aria-hidden="true"></span>
                          </div>
                          <!-- .events -->
                        </div>
                        <!-- .events-wrapper -->
                        <ul class="cd-timeline-navigation">
                          <li><a href="#0" class="prev inactive">Prev</a></li>
                          <li><a href="#0" class="next">Next</a></li>
                        </ul>
                        <!-- .cd-timeline-navigation -->
                      </div>
                      <!-- .timeline -->
                      <div class="events-content">
                        <ol>
                          <li class="selected" data-date="16/01/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-5.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="28/02/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-6.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="20/04/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-7.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="20/05/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-8.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="09/07/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-9.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="30/08/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-6.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="15/09/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <img class="media-object img-xl mr-1" src="/app-assets/images/portrait/small/avatar-s-7.png"
                                  alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                        </ol>
                      </div>
                      <!-- .events-content -->
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Basic Horizontal Timeline -->
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
  <script src="/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
  <script src="/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"
  type="text/javascript"></script>
  <script src="/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="/app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="/app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>
