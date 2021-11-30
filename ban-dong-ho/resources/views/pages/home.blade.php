@extends('layoutindex')
@section('css')

@endsection
@section("js")
@endsection
@section('rederbody')
<!--bikes-->
<div class="bikes">	
    <h3>POPULAR BIKES</h3>
    <div class="bikes-grids">			 
        <ul id="flexiselDemo1">
            <li>
                <img src="images/bik1.jpg" alt=""/>
                <div class="bike-info">
                    <div class="model">
                        <h4>FIXED GEAR<span>$249.00</span></h4>							 
                    </div>
                    <div class="model-info">
                        <select>
                         <option value="volvo">OPTION</option>
                         <option value="saab">Option</option>
                         <option value="opel">Option</option>
                         <option value="audi">Option</option>
                        </select>
                        <a href="bicycles.html">BUY</a>
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="bicycles.html">Quick View</a>
                </div>
            </li>
            <li>
            <img src="images/bik2.jpg" alt=""/>
            <div class="bike-info">
                    <div class="model">
                        <h4>BIG BOY ULTRA<span>$249.00</span></h4>							 
                    </div>
                    <div class="model-info">
                        <select>
                         <option value="volvo">OPTION</option>
                         <option value="saab">Option</option>
                         <option value="opel">Option</option>
                         <option value="audi">Option</option>
                        </select>
                        <a href="bicycles.html">BUY</a>
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="bicycles.html">Quick View</a>
                </div>
            </li>
            <li>
                <img src="images/bik3.jpg" alt=""/>
                <div class="bike-info">
                    <div class="model">
                        <h4>ROCK HOVER<span>$300.00</span></h4>							 
                    </div>
                    <div class="model-info">
                        <select>
                         <option value="volvo">OPTION</option>
                         <option value="saab">Option</option>
                         <option value="opel">Option</option>
                         <option value="audi">Option</option>
                        </select>
                        <a href="bicycles.html">BUY</a>
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="bicycles.html">Quick View</a>
                </div>
            </li>
            <li>
                <img src="images/bik4.jpg" alt=""/>
                <div class="bike-info">
                    <div class="model">
                        <h4>SANSACHG<span>$249.00</span></h4>							 
                    </div>
                    <div class="model-info">
                        <select>
                         <option value="volvo">OPTION</option>
                         <option value="saab">Option</option>
                         <option value="opel">Option</option>
                         <option value="audi">Option</option>
                        </select>
                        <a href="bicycles.html">BUY</a>
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="bicycles.html">Quick View</a>
                </div>
            </li>
            <li>
                <img src="images/bik5.jpg" alt=""/>
                <div class="bike-info">
                    <div class="model">
                        <h4>JETT MAC<span>$340.00</span></h4>							 
                    </div>
                    <div class="model-info">
                        <select>
                         <option value="volvo">OPTION</option>
                         <option value="saab">Option</option>
                         <option value="opel">Option</option>
                         <option value="audi">Option</option>
                        </select>
                        <a href="bicycles.html">BUY</a>
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="bicycles.html">Quick View</a>
                </div>
            </li>
            <li>
                 <img src="images/bik6.jpg" alt=""/>
                 <div class="bike-info">
                    <div class="model">
                        <h4>SANSACHG<span>$249.00</span></h4>							 
                    </div>
                    <div class="model-info">
                        <select>
                         <option value="volvo">OPTION</option>
                         <option value="saab">Option</option>
                         <option value="opel">Option</option>
                         <option value="audi">Option</option>
                        </select>
                        <a href="bicycles.html">BUY</a>
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="bicycles.html">Quick View</a>
                </div>
            </li>
       </ul>
       		 
</div>
</div>
<!---->
<div class="contact">
<div class="container">
   <h3>CONTACT US</h3>
   <p>Please contact us for all inquiries and purchase options.</p>
   <form>
        <input type="text" placeholder="NAME" required="">
        <input type="text" placeholder="SURNAME" required="">			 
        <input class="user" type="text" placeholder="EMAIL" required=""><br>
        <textarea placeholder="MESSAGE"></textarea>
        <input type="submit" value="SEND">
   </form>
</div>
</div>
<!---->
@endsection
