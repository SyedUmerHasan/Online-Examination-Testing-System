<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .pagination li:first-child{
            display: none;
            border: 5px black solid;
        }
        .pagination li:first-child{
            display: none;
            border: 5px black solid;
        }
        .pagination li a{
            color: #40c0cb;
            border-color: #40c0cb;
            border-radius: 3px;
            
        }

        .pagination li{
            border-radius: 3px;
            float: right;
        }
        .pagination li:hover{
            color: black;
            border-radius: 3px;
        }
        
    </style>
    <title>Online Test System </title>
</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">

        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <div id="logo">
                        <a href="#" class="standard-logo" data-dark-logo="/images/logo-dark.png"><img src="/images/logo.png"
                                alt="Canvas Logo"></a>
                        <a href="#" class="retina-logo" data-dark-logo="/images/logo-dark@2x.png"><img src="/images/logo@2x.png"
                                alt="Canvas Logo"></a>
                    </div>

                    <nav id="primary-menu">
                        <ul>
                            <li>
                                <a href="{{ url('tests') }}">
                                    <div>All Tests</div>
                                </a>
                            </li>
                        </ul>

                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <section id="page-title">
            <div class="container clearfix">
                <h1>Test List</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Test Lists</li>
                </ol>
            </div>
        </section>

        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="col_full">

                        <table class="table">
						    <thead>
							    <tr>
                                    <th>#</th>
                                    <th>Test Name</th>
                                    <th>Start Test</th>
    							</tr>
						    </thead>

                            @foreach ($test as $item)
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$item->test_category}}</td>
                                        <td>
                                            <div class="col-sm-6">
                                                <button type="button" onclick="starttest(event)" name="testname" value="{{$item->test_category}}" class="starttest btn btn-primary">Start Test</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
						</table>
                        
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

        <footer id="footer" class="dark">
            <div class="container">

                <div class="footer-widgets-wrap clearfix">
                    <div class="col_two_third">
                        <div class="col_one_third">
                            <div class="widget clearfix">
                                <img src="/images/footer-widget-logo.png" alt="" class="footer-logo">
                                <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong>
                                    Design Standards.</p>
                                <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Headquarters:</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> <a href="/cdn-cgi/l/email-protection"
                                        class="__cf_email__" data-cfemail="076e696168476466697166742964686a">[email&#160;protected]</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers
                                &amp; Inside Scoops:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post"
                                class="nobottommargin">
                                <div class="input-group divcenter">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email2"></i></div>
                                    </div>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                                        class="form-control required email" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                                <div class="col-lg-6 clearfix bottommargin-sm">
                                    <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                            Facebook</small></a>
                                </div>
                                <div class="col-lg-6 clearfix">
                                    <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                            RSS Feeds</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div id="gotoTop" class="icon-angle-up"></div>
    <script src="/js/jquery.js"></script>
    <script src="/js/plugins.js"></script>

    <script src="/js/functions.js"></script> 
    <script>
        $('.starttest').click(function(){
            var test_category = $(this).val()
            var url = '/' + "test" + '/' + test_category;
            window.location.replace(url);
        });
    </script>
</body>
</html>
