@extends('layouts.master')
@section('content')
  <!-- end of header -->


  <!-- ---------------------- -->
  <!--     I N T R O          -->
  <!-- ---------------------- -->
   <div id="intro">
      <div id="intro_wrap">
         <div class="container_12">
         <div id="breadcrumbs" class="grid_12">
            <a href="/">Home</a> > 
            <a href="login">User account</a>
         </div>
         <h1>User account</h1>
         </div>
      </div>
   </div>
    <!-- end of intro -->

  
  <!-- ---------------------- -->
  <!--      C O N T E N T     -->
  <!-- ---------------------- -->
   <div id="content" class="container_16">

      <ul class="tabs primary">
         <h2 class="element-invisible">Primary tabs</h2>
         <ul class="tabs primary">
            <li>
               <a href="login">Log in</a>
            </li>
            <li class="active">
               <a href="pass" class="active">Request new password<span class="element-invisible">(active tab)</span></a>
            </li>
         </ul>
      </ul>    


      <div id="product" class="grid_12">
         <div class="region region-content">
            <div id="block-system-main" class="block block-system">
               <div>
               <form action="http://shoppica.themesnap.net/user/password" method="post" id="user-pass" accept-charset="UTF-8">
                  <div>
                     <div class="form-item form-type-textfield form-item-name">
                        <label for="edit-name">Username or e-mail address <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-name" name="name" value="" size="60" maxlength="254" class="form-text required" />
                     </div>
                     <input type="hidden" name="form_build_id" value="form-s_cuTVmgotK6Ubce8thzu5LaBjKtvpk1OJ3DNEm1XR8" />
                     <input type="hidden" name="form_id" value="user_pass" />
                     <div class="form-actions form-wrapper" id="edit-actions">
                        <input type="submit" id="edit-submit" name="op" value="E-mail new password" class="form-submit" />
                     </div>
                  </div>
               </form>
               </div>
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
                                    <a href="../node/7.html">
                                       <img typeof="foaf:Image" src="../pic/type/silver1.png" width="38" height="38" alt="" />
                                    </a>
                                 </div>
                                    <h3>
                                       <span class="field-content">
                                          <a href="../node/7.html">Silver</a>
                                       </span>
                                    </h3>
                                    <p>
                                       <a href="../node/7.html">
                                          <span class="s_old">$120.00</span> 
                                          <span class="s_secondary_color">$99.00</span>
                                       </a>
                                    </p>
                              </div>
                          </div>
                          <div class="views-row views-row-2 views-row-even">
                              <div class="s_item s_size_1 clearfix">
                                 <div class="s_thumb">
                                    <a href="../node/6.html">
                                       <img typeof="foaf:Image" src="../pic/type/gold1.png" width="38" height="38" alt="" />
                                    </a>
                                 </div>
                                 <h3>
                                    <span class="field-content">
                                       <a href="../node/6.html">Gold</a>
                                    </span>
                                 </h3>
                                 <p>
                                    <a href="../node/6.html">
                                       <span class="s_old">$550.00</span> 
                                       <span class="s_secondary_color">$499.00</span>
                                    </a>
                                 </p>
                              </div>
                          </div>
                          <div class="views-row views-row-3 views-row-odd views-row-last">
                              <div class="s_item s_size_1 clearfix">
                                 <div class="s_thumb">
                                    <a href="../node/4.html">
                                       <img typeof="foaf:Image" src="../pic/type/platinum1.png" width="38" height="38" alt="" />
                                    </a>
                                 </div>
                                 <h3>
                                    <span class="field-content">
                                       <a href="../node/4.html">Platinum</a>
                                    </span>
                                 </h3>
                                 <p>
                                    <a href="../node/4.html">
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
                        <li class="first leaf"><a href="node/8.html" title="">About GIFT WORLD</a></li>
                        <li class="leaf"><a href="node/9.html" title="">Privacy Policy</a></li>
                        <li class="last leaf"><a href="node/10.html" title="">Terms &amp; Conditions</a></li>
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