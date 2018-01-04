@extends('layouts.node')
@section('content')
    <!-- end of header -->


    <!-- ---------------------- -->
    <!--     I N T R O          -->
    <!-- ---------------------- -->
    <div id="intro">
        <div id="intro_wrap">
            <div class="container_12">
                <div id="breadcrumbs" class="grid_12">
                    <a href="/">Home</a> > <a href="{{route('catalog',['id'=>8])}}">Gift Cards</a> > <a href="{{route('catalog',['id'=>11])}}">Platinum Card</a></div>
                <h1>Platinum Double</h1>
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
                <div>
                    <div class="product_view">
                        <div id="product" class="grid_12">
                            <div id="product_images" class="grid_6 alpha">
                                <div class="commerce-product-field commerce-product-field-field-productimage field-field-productimage node-2-product-field-productimage">
                                    <div class="field field-name-field-productimage field-type-image field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">
                                                <a id="product_image_preview" rel="prettyPhoto[gallery]" href="../pic/2.jpg">
                                                    <img typeof="foaf:Image" src="../pic/type/ppp.png" width="340" height="340" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product_info" class="grid_6 omega">
                                <p class="s_price"><span class="s_currency s_before"></span>2000-5500 TK</p>
                                <dl class="clearfix">
                                <dt>Availability</dt>
                                <dd>
                                    <div class="field field-name-field-availability field-type-list-text field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">Yes</div>
                                        </div>
                                    </div>
                                </dd>
                                <dt>Model</dt>
                                <dd>
                                    <div class="field field-name-field-model field-type-text field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">Platinum Double</div>
                                        </div>
                                    </div>
                                </dd>
                                <dt>Expire Date</dt>
                                <dd>
                                    <div class="field field-name-field-manufacturer field-type-taxonomy-term-reference field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">
                                                <a href="#" typeof="skos:Concept" property="rdfs:label skos:prefLabel" datatype="">Within 1 month after Buying</a>
                                            </div>
                                        </div>
                                    </div>
                                </dd>
                                </dl>
                                <div class="field field-name-field-productref field-type-commerce-product-reference field-label-hidden">
                                    <div class="field-items">
                                        <div class="field-item even">
                                        @if (Auth::guest())
                                            <label for="e-mail">Please login for book this card </label>
                                        @else
                                            <form class="commerce-add-to-cart commerce-cart-add-to-cart-form-3" action="insert2" method="post" id="commerce-cart-add-to-cart-form-3" accept-charset="UTF-8">
                                                <div>
                                                    <input type="hidden" name="product_id" value="3" />
                                                    <input type="hidden" name="form_id" value="commerce_cart_add_to_cart_form_3" />
                                                    <div id="edit-line-item-fields" class="form-wrapper"></div>
                                                    <div class="form-item form-type-textfield form-item-quantity">
                                                        <label for="e-mail">Email Address</label>
                                                        <input type="email" name="email" class="form-control" value=" " placeholder="Email" required="true">
                                                    </div>
                                                    <div id="edit-line-item-fields" class="form-wrapper"></div>
                                                    <div class="form-item form-type-textfield form-item-quantity">
                                                        <label for="phone_number">Mobile</label>
                                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required="true">
                                                    </div>
                                                    <div id="edit-line-item-fields" class="form-wrapper"></div>
                                                    <div class="form-item form-type-textfield form-item-quantity">
                                                        <label for="address">Where to deliver</label>
                                                        <input type="text" name="address" class="form-control" placeholder="Address" required="true">
                                                    </div>

                                                    {{csrf_field()}}
                                                    
                                                    <input type="submit" id="edit-submit" name="op" value="Order" class="form-submit" />
                                                </div>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <div class="s_tabs grid_12 alpha omega">
                                <div class="box">
                                    <div class="holder">
                                        <div class="frame">
                                            <div class="tabset-holder">
                                                <ul class="tabset s_tabs_nav clearfix">
                                                <li><a href="#product_description">Description</a></li>
                                                <li><a href="#product_gallery">Photos</a></li>
                                                </ul>
                                            </div>
                                            <div class="tabcontent s_tab_box">
                                                <div id="product_description" class="post-list-holder">
                                                    <div class="cpt_product_description ">
                                                        <div>
                                                            <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                                <div class="field-items">
                                                                    <div class="field-item even" property="content:encoded"><p>Platinum Double<br />Platinum Double</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="commerce-product-field commerce-product-field-field-color field-field-color node-2-product-field-color commerce-product-field-empty">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="product_gallery" class="post-list-holder">
                                                    <ul class="s_thumbs clearfix">
                                                        <li>
                                                            <a href="../pic/2.jpg" title="" class="s_thumb" rel="prettyPhoto[gallery]">
                                                                <img typeof="foaf:Image" src="../pic/2.jpg" width="120" height="120" alt="" title="" />
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection