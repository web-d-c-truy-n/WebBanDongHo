@extends('layout')
@section('css')

@endsection
@section("js")
@endsection
@section('rederbody')
<div class="product">
    <div class="container">
        <div class="ctnt-bar cntnt">
            <div class="content-bar">
                <div class="single-page">
                    <div class="product-head">
                       <a href="index.html">Home</a> <span>::</span>	
                       </div>
                    <!--Include the Etalage files-->
                       <link rel="stylesheet" href="css/etalage.css">
                       <script src="js/jquery.etalage.min.js"></script>
               <script>
           jQuery(document).ready(function($){

               $('#etalage').etalage({
                   thumb_image_width: 400,
                   thumb_image_height: 400,
                   source_image_width: 800,
                   source_image_height: 1000,
                   show_hint: true,
                   click_callback: function(image_anchor, instance_id){
                       alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                   }
               });

           });
       </script>
                       <!--//details-product-slider-->
                    <div class="details-left-slider">
                        <div class="grid images_3_of_2">
                         <ul id="etalage" class="etalage" style="display: block; width: 400px; height: 537px;">
                           <li class="etalage_thumb thumb_1" style="display: none; background-image: none; opacity: 0;">
                               <a href="optionallink.html">
                                   <img class="etalage_thumb_image" src="images/m1.jpg" style="display: inline; width: 400px; height: 400px; opacity: 1;">
                                   <img class="etalage_source_image" src="images/m1.jpg" title="">
                               </a>
                           </li>
                           <li class="etalage_thumb thumb_2" style="background-image: none; display: none; opacity: 0;">
                               <img class="etalage_thumb_image" src="images/m2.jpg" style="display: inline; width: 400px; height: 400px; opacity: 1;">
                               <img class="etalage_source_image" src="images/m2.jpg" title="">
                           </li>
                           <li class="etalage_thumb thumb_3" style="background-image: none; display: none; opacity: 0;">
                               <img class="etalage_thumb_image" src="images/m3.jpg" style="display: inline; width: 400px; height: 400px; opacity: 1;">
                               <img class="etalage_source_image" src="images/m3.jpg">
                           </li>
                           <li class="etalage_thumb thumb_4 etalage_thumb_active" style="background-image: none; display: list-item; opacity: 1;">
                               <img class="etalage_thumb_image" src="images/m4.jpg" style="display: inline; width: 400px; height: 400px;">
                               <img class="etalage_source_image" src="images/m4.jpg">
                           </li>
                       <li class="etalage_magnifier" style="margin: 0px; padding: 0px; left: 50px; top: 92.5px; display: none;"><div style="margin: 0px; padding: 0px; width: 300px; height: 215px;"><img src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m4.jpg" style="margin: 0px; padding: 0px; width: 400px; height: 400px; display: inline;"></div></li><li class="etalage_icon" style="display: list-item; top: 276px; left: 20px; opacity: 1;">&nbsp;</li><li class="etalage_hint" style="display: list-item; margin: 0px; top: -15px; right: -15px;">&nbsp;</li><li class="etalage_zoom_area" style="margin: 0px; opacity: 0; left: 410px; display: none; background-image: none;"><div class="etalage_description" style="width: 560px; bottom: 0px; left: 0px; opacity: 0.7; display: none;"></div><div style="width: 600px; height: 537px;"><img class="etalage_zoom_img" src="images/m4.jpg" style="width: 800px; height: 1000px;"></div></li><li class="etalage_small_thumbs" style="width: 400px; top: 410px;"><ul style="width: 922px;"><li class="etalage_smallthumb_navtoend" style="opacity: 0.4; margin: 0px 10px 0px 0px; left: -230px;"><img class="etalage_small_thumb" src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m4.jpg" width="125" style="width: 125px; height: 125px;"></li><li class="" style="opacity: 0.4; margin: 0px 9px 0px 0px; left: -230px;"><img class="etalage_small_thumb" src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m1.jpg" width="125" style="width: 125px; height: 125px;"></li><li class="" style="opacity: 0.4; margin: 0px 10px 0px 0px; left: -230px;"><img class="etalage_small_thumb" src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m2.jpg" width="125" style="width: 125px; height: 125px;"></li><li class="etalage_smallthumb_first" style="opacity: 0.4; margin: 0px 9px 0px 0px; left: -230px;"><img class="etalage_small_thumb" src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m3.jpg" width="125" style="width: 125px; height: 125px;"></li><li class="etalage_smallthumb_active" style="opacity: 1; margin: 0px 10px 0px 0px; left: -230px;"><img class="etalage_small_thumb" src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m4.jpg" width="125" style="width: 125px; height: 125px;"></li><li class="etalage_smallthumb_navtostart etalage_smallthumb_last" style="opacity: 0.4; margin: 0px 9px 0px 0px; left: -230px;"><img class="etalage_small_thumb" src="file:///E:/.1Study/ph%E1%BA%A7n%20m%E1%BB%81m%20m%C3%A3%20ngu%E1%BB%93n%20m%E1%BB%9F/Shopping_3/Shopping_3/images/m1.jpg" width="125" style="width: 125px; height: 125px;"></li></ul></li></ul>
                       </div>
                    </div>
                    <div class="details-left-info">
                           <h3>SCOTT SPARK</h3>
                               <h4>Model No: 3498</h4>
                           <h4></h4>
                           <p><label>$</label> 300 <a href="#">Click for offer</a></p>
                           <p class="size">SIZE ::</p>
                           <a class="length" href="#">XS</a>
                           <a class="length" href="#">M</a>
                           <a class="length" href="#">S</a>
                           <div class="btn_form">
                               <a href="cart.html">buy now</a>
                               <a href="cart.html">ADD TO CART</a>
                           </div>
                           <div class="bike-type">
                           <p>TYPE  ::<a href="#">MOUNTAIN BIKE</a></p>
                           <p>BRAND  ::<a href="#">SPORTS SCOTTY</a></p>
                           </div>
                           <h5>Description  ::</h5>
                           <p class="desc">The first mechanically-propelled, two-wheeled vehicle may have been built by Kirkpatrick MacMillan, a Scottish blacksmith, in 1839, although the claim is often disputed. He is also associated with the first recorded instance of a cycling traffic offense, when a Glasgow newspaper in 1842 reported an accident in which an anonymous "gentleman from Dumfries-shire... bestride a velocipede... of ingenious design" knocked over a little girl in Glasgow and was fined five
                           The word bicycle first appeared in English print in The Daily News in 1868, to describe "Bysicles and trysicles" on the "Champs Elysées and Bois de Boulogne.</p>
                    </div>
                    <div class="clearfix"></div>				 	
                 </div>
             </div>
         </div>
         <div class="single-bottom2">
             <h6>Related Products</h6>
            <div class="product">
                    <div class="product-desc">
                         <div class="product-img product-img2">
                            <img src="images/s1.jpg" class="img-responsive " alt="">
                        </div>
                        <div class="prod1-desc">
                               <h5><a class="product_link" href="bicycles.html">Road Bike</a></h5>
                               <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product_price">
                           <span class="price-access">$300.51</span>								
                           <a class="button1" href="cart.html"><span>Add to cart</span></a>
                    </div>
                       <div class="clearfix"></div>
            </div>
            <div class="product">
                    <div class="product-desc">
                         <div class="product-img product-img2">
                            <img src="images/s2.jpg" class="img-responsive " alt="">
                        </div>
                        <div class="prod1-desc">
                               <h5><a class="product_link" href="bicycles.html">Mountain Bike</a></h5>
                               <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product_price">
                           <span class="price-access">$1500.51</span>								
                           <a class="button1" href="cart.html"><span>Add to cart</span></a>
                    </div>
                 <div class="clearfix"></div>
            </div>
            <div class="product">
                    <div class="product-desc">
                         <div class="product-img product-img2">
                            <img src="images/s3.jpg" class="img-responsive " alt="">
                        </div>
                        <div class="prod1-desc">
                               <h5><a class="product_link" href="bicycles.html">Single Speed Bike</a></h5>
                               <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product_price">
                           <span class="price-access">$800.51</span>								
                           <a class="button1" href="cart.html"><span>Add to cart</span></a>
                    </div>
                <div class="clearfix"></div>
             </div>
        </div>	
    </div>
</div>
@endsection