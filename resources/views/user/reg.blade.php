@extends('layouts.master')
@section('content')

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
                    <li><a href="catalog/1">Gift For</a>
                        <div class="s_submenu">&nbsp;
                            <ul class="s_list_1 clearfix">
                                <li><a href="catalog/2">Gift For Him</a></li>
                                <li><a href="catalog/3">Gift For Her</a></li>
                                <li><a href="catalog/4">Gift for Baby</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>      
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/home.css')}}"/>

  <!-- end of header -->
  <!-- ---------------------- -->
  <!--     I N T R O          -->
  <!-- ---------------------- -->
    <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
                  </div>
        <h1>Registration</h1>
      </div>
    </div>
  </div>
    <!-- end of intro -->

  
  <!-- ---------------------- -->
  <!--      C O N T E N T     -->
  <!-- ---------------------- -->
  <div id="content" class="container_16">
		<ul class="tabs primary"></ul>          
      <div id="product" class="grid_12">
         <div class="region region-content">
            <div id="block-system-main" class="block block-system">
                <form action="insert" role="form" method="post">
                {{csrf_field()}}
                  <div class="icon" >
                     <!-- <img src="{{asset('assets/image/pic4.png')}}"/> -->
                  </div>
                  <h2>Gift World</h2>
                  <div class = "agile">
                     <div class="control-group">
                        <div class="input-row">
                           <label for="firstName" class="col-sm-3 control-label"></label>
                           <div class="controls">
                              <input type="text" name="firstName" placeholder="First Name" class="form-control" autofocus required="">
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <div class="input-row">
                           <label for="LastName" class="col-sm-3 control-label"></label>
                           <div class="controls">
                              <input type="text" name="lasttName" placeholder="Last Name" class="form-control" autofocus required="">
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <div class="input-row">
                           <label for="email" class="col-sm-3 control-label"></label>
                           <div class="controls">
                              <input type="email" name="email" placeholder="Email Address" class="form-control" autofocus required="">
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <div class="input-row">
                           <label for="password" class="col-sm-3 control-label"></label>
                           <div class="controls">
                              <input type="password" name="password" placeholder="Password" class="form-control" required="">
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <div class="input-row">
                           <label class="control-label" for="password_confirm"></label>
                           <div class="controls">
                              <input type="password" name="password_confirm" placeholder="Re-enter Password" class="form-control" required="">
                              <p class="help-block"></p>
                           </div>
                        </div>
                     </div>
                     <div class="control-group">
                        <div class="input-row">
                           <label for="location" class="col-sm-3 control-label" required="">Location:</label >
                           <div class="controls">
                              <select name="location" class="form-control" required>
                                 <option>Arambag</option>
                                 <option>Dhanmondi</option>
                                 <option>Katabon</option>
                                 <option>Motijheel</option>
                                 <option>Shahbag</option>
                                 <option>Uttora</option>
                              </select>
                              <div class="control-group">
                                 <div class="input-row">
                                    <label for="mobile" class="col-sm-3 control-label"></label>
                                    <div class="controls">
                                       <input type="number" name="mobile" placeholder="Mobile" class="form-control " required="">
                                    </div>
                                 </div>
                              </div>
                              <p class="help-block"></p>
                           </div>
                        </div> <!-- /.form-group -->
                        <div class="control-group col-xs-12">
                           <label class="col-xs-3 control-label">Gender:</label>
                           <div class="col-xs-6">
                              <div class="row">
                                 <div class="col-xs-6">
                                    <div class="test">
                                       <label class=" controls radio-inline">
                                          <input type="radio" name="gender" value="Female" required="">Female
                                       </label>
                                    </div>
                                    <div class="col-xs-6">
                                       <label class=" controls   radio-inline">
                                          <input type="radio" name="gender" value="Male">Male
                                       </label>
                                       <p class="help-block"></p>
                                    </div>
                                 </div>
                              </div>
                           </div> <!-- /.form-group -->
                           <div class="control-group col-xs-12 ">
                              <div class="col-sm-9 col-sm-offset-3">
                                 <div class="input-row">
                                    <div class="checkbox">
                                       <label>
                                          <input type="checkbox" required> I accept all <a href="#">Terms & Conditions</a>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div> <!-- /.form-group -->
                           <div class="for">
                              <div class="col-sm-6 col-sm-offset-6">
                                 <button  type="submit" class="btn btn-primary btn-block"  >Register</button>
                              </div>
                              <div class="col-sm-6 col-sm-offset-6">
                                 <a class="btn btn-primary btn-block" href="{{url('../user/login')}}">Login</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>  
         </div>
      </div>

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
  <!-- end of content -->

  <!-- ---------------------- -->
  <!--   S H O P   I N F O    -->
  <!-- ---------------------- -->
  @endsection