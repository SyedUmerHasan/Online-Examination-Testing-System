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
                        <a href="index.html" class="standard-logo" data-dark-logo="/images/logo-dark.png"><img src="/images/logo.png"
                                alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="/images/logo-dark@2x.png"><img src="/images/logo@2x.png"
                                alt="Canvas Logo"></a>
                    </div>

                    <nav id="primary-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    <div>Home</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>About us </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>Contact Us</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>Our Team</div>
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
                <h1>Full Width Layout</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Full Width Layout</li>
                </ol>
            </div>
        </section>

        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="col_full">
                        <?php if(!empty( $test->hasMorePages() )): ?>
                            <div class="btn btn-danger t700">Note: Question will be automatically changed after completing this time</div>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <div class="tright t700"  style="font-size: 32px;">Time Left
                                <span class="countdown tright t700 " style="font-size: 32px;"></span>
                            </div>
                        <?php endif; ?>

                    <?php if(!empty($test)): ?>
                        <?php if(count($test) >  0): ?>
                            <form class="form form-horizontal form-bordered" class="repeater" method="POST" action="<?php echo e(url('/submittest')); ?>">
                            <input type="hidden" name="category_type" id="category_type" value="">
                            <input type="hidden" name="attempting_id" id="attempting_id" value="<?php echo e($attempting_id); ?>">
                            <input type="hidden" name="count" id="count" value="<?php echo e($test->total()); ?>">
                            

                            <?php echo e(csrf_field()); ?>

                            <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <b><?php echo $test->currentPage(); ?>  <?php echo e(')'); ?>  <?php echo e($item->test_question); ?></b>
                            <ul><?php $__currentLoopData = $item->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="answer_<?php echo e($item->test_id); ?>" value="<?php echo e($item2->answer_id); ?>" id="answer">
                                            <label class="form-check-label" for="answer">
                                                <?php echo e($item2->answer_title); ?>

                                            </label>                                               
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if(!empty( $test->hasMorePages() )): ?>
                            
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <button type="button" class="nextpage btn btn-primary">Next</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="skippage tright btn btn-primary">Skip</button>
                                </div>
                            </div>

                                
                            <?php else: ?>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <button type="submit" class="nextpage btn btn-primary align-right">Submit</button>
                                </div>
                            </div>
                            <?php endif; ?>
                                </form>
                            <?php else: ?> 
                                <h1 class="text-center">No test Found</h1>
                            <?php endif; ?>
                        <?php endif; ?>
                                
                             <?php if(!empty($correctresult)): ?>
                                <?php echo e($correctresult); ?>

                            <?php endif; ?>
                            <br>
                             <?php if(!empty($wrongresult)): ?>
                                <?php echo e($wrongresult); ?>

                            <?php endif; ?>
                            <br>
                             <?php if(!empty($skippedresult)): ?>
                                <?php echo e($skippedresult); ?>

                            <?php endif; ?>
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
                        <div class="col_one_third">
                            <div class="widget widget_links clearfix">
                                <h4>Blogroll</h4>
                                <ul>
                                    <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                    <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                    <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                    <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                    <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                    <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                    <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_third col_last">
                            <div class="widget clearfix">
                                <h4>Recent Posts</h4>
                                <div id="post-list-footer">
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                                <div class="col-lg-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="50" data-to="15065421"
                                            data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Total Downloads</h5>
                                </div>
                                <div class="col-lg-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="100" data-to="18465"
                                            data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Clients</h5>
                                </div>
                            </div>
                        </div>
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

            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>
                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="#" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>
                        <div class="clear"></div>
                        <i class="icon-envelope2"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="670e090108270406091106144904080a">[email&#160;protected]</a> <span class="middot">&middot;</span>
                        <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i>
                        CanvasOnSkype
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div id="gotoTop" class="icon-angle-up"></div>

    <script data-cfasync="false" src="//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/plugins.js"></script>

    <script src="/js/functions.js"></script>
    <script>
        var redirectlink = "";
        var category_url = "";
        var pageno = "";
        //on ready function
        $( document ).ready(function() {
            if(getUrlParameter('page') != null)
            {
                pageno = parseInt(getUrlParameter('page')) + parseInt(1);
                var url = 'http://' + window.location.hostname + ":" + window.location.port + window.location.pathname +'?page=' + pageno;
                redirectlink = url;
                var link = "location.href='" + url + "'";
                console.log(getUrlParameter('page'));
            }
            else{
                var url = 'http://' + window.location.hostname + ":" + window.location.port + window.location.pathname +'?page=' + 2;
                var link = "location.href='" + url + "'";
                redirectlink = url;
                console.log('No parameters');
            }
            var pagecount = $('count').val();
            if(pageno > pagecount){
                $("form").submit(function(){
                    alert("Submitted");
                });
            }
            var a = location.href.substr(location.href.lastIndexOf('/') + 1);
            var b = a.split("?");
            category_url = b[0];
            var category_type =$('#category_type').val(category_url);
        });

        //on click function
        $('.nextpage').click(function(){
            var submittedanswer = $("input[type='radio']:checked").val();
            var a = $("input[type='radio']:checked").attr('name');
            //it return to same page if radio button is not set 
            if(a == null)return;
            addDatausingAjax(submittedanswer,a);
        });
        $('.skippage').click(function(){
            var submittedanswer = 0;
            var a = $("input[type='radio']").attr('name');
            //it return to same page if radio button is not set 
            addDatausingAjax(submittedanswer,a);
            location.replace(redirectlink);
        });
        function addDatausingAjax(submittedanswer,a)
        {           
            
            var attempting_id = $("#attempting_id").val();
            var category_type =$('#category_type').val(); 
            var question_id = a.split("_");
            
            $.ajax({
                type:"POST",
                url:"http://127.0.0.1:8000/api/TestResult",
                data: {
                    "test_id" : '0',
                    "user_id" : attempting_id,
                    'test_category' : category_type,
                    "question_id" : question_id[question_id.length-1],
                    "submittedanswer" : submittedanswer
                },
                success: function(response) {
                    alert("Data added");
                }
            });
            location.replace(redirectlink);
        }

        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? null : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };

        function clock()
        {
            var timer2 = "2:00";
            var interval = setInterval(function() {
                var timer = timer2.split(':');
                //by parsing integer, I avoid all extra string processing
                var minutes = parseInt(timer[0], 10);
                var seconds = parseInt(timer[1], 10);
                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                if (minutes < 0){
                        clearInterval(interval);
                        //redirect after time completed
                        var submittedanswer = 0;
                        var a = $("input[type='radio']").attr('name');
                        //it return to same page if radio button is not set 
                        addDatausingAjax(submittedanswer,a);
                        location.replace(redirectlink);
                    } 
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                //minutes = (minutes < 10) ?  minutes : minutes;
                $('.countdown').html(minutes + ':' + seconds);
                timer2 = minutes + ':' + seconds;
            }, 1000);
        }
        // Calling Clock function
        clock();
    </script>
    
</body>
</html>
