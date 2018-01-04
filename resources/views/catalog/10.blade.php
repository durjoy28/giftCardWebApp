@extends('layouts.catalog')
@section('content')



    <!-- ---------------------- -->
    <!--     I N T R O          -->
    <!-- ---------------------- -->
    <div class="region region-category-slide-show">
        <div id="block-views-category-slide-shows-block" class="block block-views">
            <div>
                <div class="view view-category-slide-shows view-id-category_slide_shows view-display-id-block view-dom-id-ae4587561b2ec92b91e7a17200f01e7f">
                    <div id="intro">
                        <div id="intro_wrap">
                            <div id="product_intro" class="container_12">
                                <div id="product_intro_info" class="grid_5">
                                    <div style="position: relative; display: none;">
                                        <h2>
                                            <a href="/">Dolls</a>
                                        </h2>
                                        <p class="s_desc">
                                            <p>Fusce consectetur faucibus lectus, non volutpat lorem imperdiet bibendum. Cras dignissim est vitae lorem auctor dapibus. Sed in nibh magna. Nullam dignissim leo vel erat tempor vehicula. Quisque dignissim odio nec enim rhoncus eu pretium lectus mollis. Morbi consequat laoreet tortor, ut blandit leo gravida et.
                                            </p>
                                        </p>
                                        <div class="s_price_holder">
                                            <p class="s_price s_promo_price">
                                            <span class="s_old_price">$1,000.00</span>$999.00</p>
                                        </div>
                                    </div>
                                    <div style="position: relative; display: none;">
                                        <h2>
                                            <a href="/">Toy Train</a>
                                        </h2>
                                        <p class="s_desc">
                                            <p>Fusce consectetur faucibus lectus, non volutpat lorem imperdiet bibendum. Cras dignissim est vitae lorem auctor dapibus. Sed in nibh magna. Nullam dignissim leo vel erat tempor vehicula. Quisque dignissim odio nec enim rhoncus eu pretium lectus mollis. Morbi consequat laoreet tortor, ut blandit leo gravida et.
                                            </p>
                                        </p>
                                        <div class="s_price_holder">
                                            <p class="s_price">$264.00</p>
                                        </div>
                                    </div>        
                                </div>

                                <div id="product_intro_preview">
                                    <div class="slides_container">
                                        <div class="slideItem">
                                            <img typeof="foaf:Image" src="{{url(asset('pic/type/ggg.png'))}}" width="300" height="300" alt="" />
                                        </div>
                                        <div class="slideItem" style="display: none">
                                            <img typeof="foaf:Image" src="{{url(asset('pic/type/ggg.png'))}}" width="300" height="300" alt="" />
                                        </div>  
                                    </div>
                                    <a class="s_button_prev" href="javascript:;"></a>
                                    <a class="s_button_next" href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="../assets/sites/all/themes/shoppica/js/jquery/jquery.slides.js"></script>
                    <script type="text/javascript">
                        var pImage = '../sites/all/themes/shoppica/images/loader.gif';
                    </script>
                    <script type="text/javascript" src="../assets/sites/all/themes/shoppica/js/shoppica.products_slide.js"></script>
                </div>
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
                        <div class="view view-catalog view-id-catalog view-display-id-catalog view-dom-id-f90dfdecded6889b99003be1a4572932">
                            <div class="s_listing s_grid_view clearfix">
                                <div class="s_item grid_3">
                                    <div class="s_thumb">
                                        <a href="{{route('node',['id'=>2])}}">
                                            <img typeof="foaf:Image" src="{{url(asset('pic/type/ggg.png'))}}" width="140" height="140" alt="" />
                                        </a>
                                    </div>
                                    <h3>
                                        <span class="field-content">
                                            <a href="{{route('node',['id'=>2])}}">Gold Single</a>
                                        </span>
                                    </h3>
                                    <p class="s_model">Gold Single</p>
                                    <p class="s_price">3500 TK</p>
                                </div>
                                <div class="s_item grid_3">
                                    <div class="s_thumb">
                                        <a href="{{route('node',['id'=>4])}}">
                                            <img typeof="foaf:Image" src="{{url(asset('pic/type/ggg.png'))}}" width="140" height="140" alt="" />
                                        </a>
                                    </div>
                                    <h3>
                                        <span class="field-content">
                                            <a href="{{route('node',['id'=>4])}}">Gold Double </a>
                                        </span>
                                    </h3>
                                    <p class="s_model">Gold Double</p>
                                    <p class="s_price s_promo_price">
                                    <span class="s_old_price">5200 Tk</span>5000 Tk</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div> 
                    </div>
                </div>  
            </div>
        </div>


@endsection