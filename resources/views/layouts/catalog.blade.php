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
            <a id="site_logo" href="/"><img src="../pic/logo.png" title="Shoppica" alt="Shoppica" /></a>

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

            <div class="region region-search-box">
                <div id="block-search-form" class="block block-search">
                    <div>
                        <form action="http://shoppica.themesnap.net/" method="post" id="search-block-form" accept-charset="UTF-8">
                            <div>
                                <!-- <div id="site_search">
                                    <div id="search_bar" class="clearfix">
                                        <input type="text" value="" name="search_block_form" id="filter_keyword" />
                                        <input type="hidden" name="form_build_id" value="form-55nZaPUHxAU_ARLAYQW0avzAaehB0brxIp5RZJpJ8eI" />
                                        <input type="hidden" name="form_id" value="search_block_form" />
                                        <input type="submit" class="s_button_1 s_secondary_color_bgr s_text" name="op" id="searchsubmit" value="Search" />
                                        <a class="s_advanced s_main_color" href="http://shoppica.themesnap.net/search/node">Advanced Search</a>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
            <div id="categories" class="s_nav">
                <ul>
                    <li id="menu_home"><a href="/">Home</a></li>
                    <li><a href="{{route('catalog',['id'=>8])}}">Gift Card</a>
                    <div class="s_submenu">&nbsp;
                        <ul class="s_list_1 clearfix">
                            <li><a href="{{route('catalog',['id'=>9])}}">Silver Card</a></li>
                            <li><a href="{{route('catalog',['id'=>10])}}">Gold card</a></li>
                            <li><a href="{{route('catalog',['id'=>11])}}">Platinum Card</a></li>
                        </ul>
                    </div>
                    </li>
                    <li><a href="/">Gift For</a>
                        <div class="s_submenu">&nbsp;
                            <ul class="s_list_1 clearfix">
                                <li><a href="/">Gift For Him</a></li>
                                <li><a href="/">Gift For Her</a></li>
                                <li><a href="/">Gift for Baby</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>      
            </div>

        </div>
    </div>



    <!-- ---------------------- -->
    <!--     Layout start       -->
    <!-- ---------------------- -->


    @yield('content')



    <!-- ---------------------- -->
    <!--     Layout END         -->
    <!-- ---------------------- -->









    <div id="right_col" class="grid_4">
         <div class="region region-sidebar-right">
          
            <div id="block-commerce-cart-cart" class="block block-commerce-cart">
               <div class="s_box">
                  <h2>Shopping cart</h2>
                  <div class="s_list_1 s_size_1 clearfix ma1">
                     <div class="cart-empty-block">Your shopping cart is empty.</div>
                  </div>
               </div>
            </div>

            <div id="block-views-specials-block" class="block block-views">
               <div class="s_box">
                  <h2>Specials</h2>
                  <div class="s_list_1 s_size_1 clearfix ma1">
                     <div class="view view-specials view-id-specials view-display-id-block view-dom-id-15f906dd0aebf56a23745105dc67f820">
                        <div class="view-content">
                           <div class="views-row views-row-1 views-row-odd views-row-first">
                              <div class="s_item s_size_1 clearfix">
                                 <div class="s_thumb">
                                    <a href="../node/7">
                                       <img typeof="foaf:Image" src="../pic/type/ss.png" width="38" height="38" alt="" />
                                    </a>
                                 </div>
                                 <h3>
                                    <span class="field-content">
                                       <a href="../node/7">Silver</a>
                                    </span>
                                 </h3>
                                 <p>
                                    <a href="../node/7">
                                       <span class="s_old">$120.00</span> 
                                       <span class="s_secondary_color">$99.00</span>
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="views-row views-row-2 views-row-even">
                              <div class="s_item s_size_1 clearfix">
                                 <div class="s_thumb">
                                    <a href="../node/6">
                                       <img typeof="foaf:Image" src="../pic/type/gg.png" width="38" height="38" alt="" />
                                    </a>
                                 </div>
                                 <h3>
                                    <span class="field-content">
                                       <a href="../node/6">Gold</a>
                                    </span>
                                 </h3>
                                 <p>
                                    <a href="../node/6">
                                       <span class="s_old">$550.00</span> 
                                       <span class="s_secondary_color">$499.00</span>
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="views-row views-row-3 views-row-odd views-row-last">
                              <div class="s_item s_size_1 clearfix">
                                 <div class="s_thumb">
                                    <a href="../node/4">
                                       <img typeof="foaf:Image" src="../pic/type/pp.png" width="38" height="38" alt="" />
                                    </a>
                                 </div>
                                 <h3>
                                     <span class="field-content">
                                        <a href="../node/4">Platinum</a>
                                     </span>
                                 </h3>
                                 <p>
                                    <a href="../node/4">
                                       <span class="s_old">$1,000.00</span> 
                                       <span class="s_secondary_color">$999.00</span>
                                    </a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div id="block-menu-menu-catalog" class="block block-menu">
               <div class="s_box"><h2>Catalog</h2>
                  <div class="s_list_1 s_size_1 clearfix ma1">
                     <ul>
                        <li class="first expanded"><a href="/" title="Gift Cards">Gift Cards</a>
                           <ul>
                              <li class="first leaf"><a href="../catalog/8" title="Silver">Silver Card</a></li>
                              <li class="leaf"><a href="../catalog/9" title="Gold">Gold Card</a></li>
                              <li class="leaf"><a href="../catalog/10" title="Platinum">Platinum Card</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>


            <div id="block-views-brands-block" class="block block-views">
               <div class="s_box">
                  <h2>Brands</h2>
                  <div class="s_list_1 s_size_1 clearfix ma1">
                     <div class="view view-brands view-id-brands view-display-id-block view-dom-id-6d7832083076439416002e99c69387b1">
                        <div class="view-content">
                           <form action="http://shoppica.themesnap.net/catalog/10" method="post" id="ctools-jump-menu" accept-charset="UTF-8">
                              <div>
                                 <div class="container-inline">
                                    <div class="form-item form-type-select form-item-jump">
                                       <select class="ctools-jump-menu-select ctools-jump-menu-change form-select" id="edit-jump" name="jump">
                                          <option value="" selected="selected">- Choose -</option>
                                          <option value="8">Silver Card</option>
                                          <option value="9">Gold Card</option>
                                          <option value="10">Platinum Card</option>
                                       </select>
                                    </div>
                                    <input class="ctools-jump-menu-button ctools-jump-menu-hide form-submit" type="submit" id="edit-go" name="op" value="Go" />
                                 </div>
                                 <input type="hidden" name="form_build_id" value="form-AkUwNZwXAZCfd2pjutLtePypCv76_XdLbb1UCrmrJ1I" />
                                 <input type="hidden" name="form_id" value="ctools_jump_menu" />
                              </div>
                           </form>    
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <div id="block-menu-menu-information" class="block block-menu">
               <div class="s_box">
                  <h2>Information</h2>
                  <div class="s_list_1 s_size_1 clearfix ma1">
                     <ul>
                        <li class="first leaf"><a href="node/8" title="">About GIFT WORLD</a></li>
                        <li class="leaf"><a href="node/9" title="">Privacy Policy</a></li>
                        <li class="last leaf"><a href="node/10" title="">Terms &amp; Conditions</a></li>
                     </ul>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
  <!-- end of content -->

  <!-- ---------------------- -->
  <!--   S H O P   I N F O    -->
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
