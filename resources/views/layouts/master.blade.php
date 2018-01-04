<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="http://shoppica.themesnap.net/misc/favicon.ico" type="image/vnd.microsoft.icon" />  
    <title>Gift World</title>
    <link type="text/css" rel="stylesheet" href="../css/x.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/t.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/m.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/p.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/c.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="../css/a.css" media="all" />
    <script type="text/javascript" src="../js/x.js"></script>
    <script type="text/javascript" src="../js/o.js"></script>
    <script type="text/javascript" src="../js/w.js"></script>
    <script type="text/javascript" src="../js/l.js"></script>
    <script type="text/javascript" src="../js/s.js"></script>
    <script type="text/javascript" src="../js/b.js"></script>
    <script type="text/javascript" src="../js/c.js"></script>
    
</head>
<body class="s_layout_fixed html front not-logged-in no-sidebars page-node" >
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
</div>
<div id="wrapper">
    <!-- ---------------------- -->
    <!--      H E A D E R       -->
    <!-- ---------------------- -->
    <div id="header" class="container_12">
        <div class="grid_12">
            <a id="site_logo" href="/"><img src="pic/logo.png" title="Shoppica" alt="Shoppica" /></a>
            @if (Auth::guest())
            <div id="system_navigation" class="s_nav">
                <ul class="s_list_1 clearfix">
                    <li><a href="{{ url('../user/login') }}">Log in</a></li>
                    <li><a href="{{ url('../user/reg') }}">Register</a></li>
                </ul>
            </div>
            @else
            <div id="system_navigation" class="s_nav">
                <ul class="s_list_1 clearfix" role="menu">
                    <li><a href="#">{{ Auth::User()->firstName }}</a></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </div>
            @endif

    <!-- ---------------------- -->
    <!--     Layout start       -->
    <!-- ---------------------- -->


    @yield('content')



    <!-- ---------------------- -->
    <!--     Layout END         -->
    <!-- ---------------------- -->


    <div id="shop_info">
        <div id="shop_info_wrap">
            <div class="container_12">
                <div id="shop_description" class="grid_3">
                    <div class="region region-footer-about">
                        <div id="block-block-1" class="block block-block">
                            <h2 class="heading">GIFT WORLD</h2>
                            <div>
                            <p>GIFT WORLD (Online Gift Card Shopping System) is the system from where varieties of gifts are purchased through a card as the choice of people for taking advantages of discount price or other facilities of brands or shops. </p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div id="shop_contacts" class="grid_3">
                    <div class="region region-footer-contacts">
                        <div id="block-block-2" class="block block-block">
                            <h2 class="heading">Contact Us</h2>
                            <div>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td valign="middle">
                                            <span class="s_icon_32">
                                                <span class="s_icon s_phone_32"></span>12345 <br />56789</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">
                                                <span class="s_icon_32">
                                                <span class="s_icon s_fax_32"></span>019123456<br />018123456</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle"><span class="s_icon_32">
                                                <span class="s_icon s_mail_32"></span>
                                                    <a href="mailto:bill@example.com">imran@example.com</a> <br />
                                                    <a href="mailto:john@example.com">hadid@example.com</a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">
                                                <span class="s_icon_32">
                                                <span class="s_icon s_skype_32"></span>my_skype <br /></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                </div>
                <div id="twitter" class="grid_3">
                    <h2>Twitter</h2>
                    <div class="widget-twitter">
                        <div class="tweets">
                        <a class="twitter-timeline"  href="https://twitter.com/themesnap"  data-widget-id="350307313887887360">Tweets by @themesnap</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                </div>
                <div id="facebook" class="grid_3">
                    <h2>Facebook</h2>
                    <div class="s_widget_holderr">
                        <fb:fan profileid="167353329981184" stream="0" connections="6" logobar="0" width="220" css="http://shoppica.themesnap.net/sites/all/themes/shoppica/css/fb.css.php?300"></fb:fan>        
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- end of content -->


    <!-- ---------------------- -->
    <!--      F O O T E R       -->
    <!-- ---------------------- -->

    <div id="footer" class="container_12">
        <div id="footer_categories" class="clearfix">
            <div class="region region-footer-bottom">
                <div id="block-menu-menu-electronics" class="block block-menu">
                    <div class="grid_2 s_list_1">
                        <h2>Electronics</h2>
                        <ul>
                            <li class="first leaf"><a href="/" title="" class="active">Car-Audio</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Cell Phones</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Digital Cameras</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Home Audio</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Home Cinema</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">MP3 Players</a></li>
                        </ul>
                    </div>
                </div>
                <div id="block-menu-menu-computers" class="block block-menu">
                    <div class="grid_2 s_list_1">
                        <h2>Computers</h2>
                        <ul><li class="first leaf"><a href="/" title="" class="active">Components</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Desktops</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Laptops</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Monitors</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">Software</a></li>
                        </ul>
                    </div>
                </div>
                <div id="block-menu-menu-clothing" class="block block-menu">
                    <div class="grid_2 s_list_1">
                        <h2>Clothing</h2>
                        <ul>
                            <li class="first leaf"><a href="/" title="" class="active">Women&#039;s Clothing</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Men&#039;s Clothing</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Boys</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Girls</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">Infants and toddlers</a></li>
                        </ul>
                    </div>
                </div>
                <div id="block-menu-menu-shoes" class="block block-menu">
                    <div class="grid_2 s_list_1">
                        <h2>Shoes</h2>
                        <ul>
                            <li class="first leaf"><a href="/" title="" class="active">Kids&#039; Shoes</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Men&#039;s Shoes</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Sportswear</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">Women&#039;s Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div id="block-menu-menu-gifts" class="block block-menu">
                    <div class="grid_2 s_list_1">
                        <h2>Gifts</h2>
                        <ul><li class="first leaf"><a href="/" title="" class="active">Chocolates and sweets</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Flowers</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Perfumes</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Pets</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Spirits and Beers</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Toys and Games</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">Wines</a></li>
                        </ul>
                    </div>
                </div>
                <div id="block-menu-menu-at-home" class="block block-menu">
                    <div class="grid_2 s_list_1">
                        <h2>At home</h2>
                        <ul><li class="first leaf"><a href="/" title="" class="active">Appliances</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Food and Drink</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Furniture</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Garden</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Lighting</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Pet Supplies</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">Tools and Accessories</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div id="block-menu-menu-health" class="block block-menu">
                    <div class="grid_2 s_list_1"> 
                        <h2>At home</h2>
                        <ul><li class="first leaf"><a href="/" title="" class="active">Appliances</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Food and Drink</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Furniture</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Garden</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Lighting</a></li>
                            <li class="leaf"><a href="/" title="" class="active">Pet Supplies</a></li>
                            <li class="last leaf"><a href="/" title="" class="active">Tools</a></li>
                        </ul>
                    </div>
                </div>  --> 
            </div>
            <div class="grid_12 border_eee"></div>
        </div>
        <!-- <div id="payments" class="right clearfix">
            <div class="region region-footer-bottom-right">
                <div id="block-block-4" class="block block-block">
                    <div>
                        <a href="http://www.discover.com/" target="_blank">
                            <img src="../pic/payments/discover_straight_32px.png">
                        </a> 
                        <a href="http://www.americanexpress.com/" target="_blank">
                            <img src="../pic/payments/american_express_straight_32px.png">
                        </a> 
                        <a href="http://www.moneybookers.com/" target="_blank">
                            <img src="../pic/payments/moneybookers_straight_32px.png">
                        </a> 
                        <a href="http://www.paypal.com/" target="_blank">
                            <img src="../pic/payments/paypal_straight_32px.png">
                        </a> 
                        <a href="http://www.visa.com/" target="_blank">
                            <img src="../pic/payments/visa_straight_32px.png">
                        </a> 
                            <img src="../pic/payments/american_express_straight_32px.png">
                    </div>
                </div>  
            </div>
        </div> -->
    </div> 

</div>
<div id="fb-root"></div>
</body>
</html>
