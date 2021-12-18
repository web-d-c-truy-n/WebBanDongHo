@extends('layout')
@section('css')
<style>
    body {
  margin: auto;
  background: #eaeaea;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #F6AA93 none repeat scroll 0% 0%;
  color: rgb(255, 255, 255);
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:left
}

form {
  border-radius: 5px;
  max-width:700px;
  width:100%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
}

h1 {
  text-align:center; 
  color: #666;
  text-shadow: 1px 1px 0px #FFF;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 75%;
  height: 40px;
  float: left;
  padding: 0px 15px;
}

a {
  text-decoration:inherit
}

textarea {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #EEE;
  margin: 0;
  width: 75%;
  height: 130px; 
  float: left;
  padding: 0px 15px;
}

.form-group {
  overflow: hidden;
  clear: both;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px;
}

.bouton-contact{
  background-color: #81BDA4;
  color: #FFF;
  text-align: center;
  width: 100%;
  border:0;
  padding: 17px 25px;
  border-radius: 0px 0px 5px 5px;
  cursor: pointer;
  margin-top: 40px;
  font-size: 18px;
}

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
  width:49.5%;
  float:right;
  box-sizing: border-box;
  padding: 0px 0px 0px 15px;
}

.validation {
  display:none;
  margin: 0 0 10px;
  font-weight:400;
  font-size:13px;
  color: #DE5959;
}

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}
</style>
@endsection
@section('rederbody')
<h1>Thông tin đơn đặt hàng</h1>
<form>
     <h1>Điền đầy đủ thông tin, nhân viên sẽ liên lạc lại sau khi nhận được đơn hàng</h1>
     
 <div class="contentform">
     <div id="sendmessage">Đặt thành công.</div>


     <div class="leftcontact">
               <div class="form-group">
                 <p>Họ<span>*</span></p>
                 
                     <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
             <div class="validation"></div>
    </div> 

         <div class="form-group">
         <p>Tên<span>*</span></p>
         
             <input type="text" name="prenom" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
             <div class="validation"></div>
         </div>

         <div class="form-group">
         <p>Mail<span>*</span></p>	
       
             <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
             <div class="validation"></div>
         </div>	

        

         
         <div class="form-group">
         <p>Mã bưu điện<span>*</span></p>
         
             <input type="text" name="postal" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
             <div class="validation"></div>
         </div>	



 </div>

 <div class="rightcontact">	

    <div class="field  field-half">
        <div class="field-input-wrapper field-input-wrapper-select">
            <p>Mã bưu điện<span>*</span></p>
            <select class="field-input" id="customer_shipping_province" name="customer_shipping_province">
                <option data-code="null" value="null" selected="">           
                Chọn tỉnh / thành </option>
                            <option data-code="HC" value="50">Hồ Chí Minh</option>
                        
                    
                        
                            <option data-code="HI" value="1">Hà Nội</option>
                        
                    
                        
                            <option data-code="DA" value="32">Đà Nẵng</option>
                        
                    
                        
                            <option data-code="AG" value="57">An Giang</option>
                        
                    
                        
                            <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>
                        
                    
                        
                            <option data-code="BI" value="47">Bình Dương</option>
                        
                    
                        
                            <option data-code="BP" value="45">Bình Phước</option>
                        
                    
                        
                            <option data-code="BU" value="39">Bình Thuận</option>
                        
                    
                        
                            <option data-code="BD" value="35">Bình Định</option>
                        
                    
                        
                            <option data-code="BL" value="62">Bạc Liêu</option>
                        
                    
                        
                            <option data-code="BG" value="15">Bắc Giang</option>
                        
                    
                        
                            <option data-code="BK" value="4">Bắc Kạn</option>
                        
                    
                        
                            <option data-code="BN" value="18">Bắc Ninh</option>
                        
                    
                        
                            <option data-code="BT" value="53">Bến Tre</option>
                        
                    
                        
                            <option data-code="CB" value="3">Cao Bằng</option>
                        
                    
                        
                            <option data-code="CM" value="63">Cà Mau</option>
                        
                    
                        
                            <option data-code="CN" value="59">Cần Thơ</option>
                        
                    
                        
                            <option data-code="GL" value="41">Gia Lai</option>
                        
                    
                        
                            <option data-code="HG" value="2">Hà Giang</option>
                        
                    
                        
                            <option data-code="HM" value="23">Hà Nam</option>
                        
                    
                        
                            <option data-code="HT" value="28">Hà Tĩnh</option>
                        
                    
                        
                            <option data-code="HO" value="11">Hòa Bình</option>
                        
                    
                        
                            <option data-code="HY" value="21">Hưng Yên</option>
                        
                    
                        
                            <option data-code="HD" value="19">Hải Dương</option>
                        
                    
                        
                            <option data-code="HP" value="20">Hải Phòng</option>
                        
                    
                        
                            <option data-code="HU" value="60">Hậu Giang</option>
                        
                    
                        
                            <option data-code="KH" value="37">Khánh Hòa</option>
                        
                    
                        
                            <option data-code="KG" value="58">Kiên Giang</option>
                        
                    
                        
                            <option data-code="KT" value="40">Kon Tum</option>
                        
                    
                        
                            <option data-code="LI" value="8">Lai Châu</option>
                        
                    
                        
                            <option data-code="LA" value="51">Long An</option>
                        
                    
                        
                            <option data-code="LO" value="6">Lào Cai</option>
                        
                    
                        
                            <option data-code="LD" value="44">Lâm Đồng</option>
                        
                    
                        
                            <option data-code="LS" value="13">Lạng Sơn</option>
                        
                    
                        
                            <option data-code="ND" value="24">Nam Định</option>
                        
                    
                        
                            <option data-code="NA" value="27">Nghệ An</option>
                        
                    
                        
                            <option data-code="NB" value="25">Ninh Bình</option>
                        
                    
                        
                            <option data-code="NT" value="38">Ninh Thuận</option>
                        
                    
                        
                            <option data-code="PT" value="16">Phú Thọ</option>
                        
                    
                        
                            <option data-code="PY" value="36">Phú Yên</option>
                        
                    
                        
                            <option data-code="QB" value="29">Quảng Bình</option>
                        
                    
                        
                            <option data-code="QM" value="33">Quảng Nam</option>
                        
                    
                        
                            <option data-code="QG" value="34">Quảng Ngãi</option>
                        
                    
                        
                            <option data-code="QN" value="14">Quảng Ninh</option>
                        
                    
                        
                            <option data-code="QT" value="30">Quảng Trị</option>
                        
                    
                        
                            <option data-code="ST" value="61">Sóc Trăng</option>
                        
                    
                        
                            <option data-code="SL" value="9">Sơn La</option>
                        
                    
                        
                            <option data-code="TH" value="26">Thanh Hóa</option>
                        
                    
                        
                            <option data-code="TB" value="22">Thái Bình</option>
                        
                    
                        
                            <option data-code="TY" value="12">Thái Nguyên</option>
                        
                    
                        
                            <option data-code="TT" value="31">Thừa Thiên Huế</option>
                        
                    
                        
                            <option data-code="TG" value="52">Tiền Giang</option>
                        
                    
                        
                            <option data-code="TV" value="54">Trà Vinh</option>
                        
                    
                        
                            <option data-code="TQ" value="5">Tuyên Quang</option>
                        
                    
                        
                            <option data-code="TN" value="46">Tây Ninh</option>
                        
                    
                        
                            <option data-code="VL" value="55">Vĩnh Long</option>
                        
                    
                        
                            <option data-code="VT" value="17">Vĩnh Phúc</option>
                        
                    
                        
                            <option data-code="YB" value="10">Yên Bái</option>
                        
                    
                        
                            <option data-code="DB" value="7">Điện Biên</option>
                        
                    
                        
                            <option data-code="DC" value="42">Đắk Lắk</option>
                        
                    
                        
                            <option data-code="DO" value="43">Đắk Nông</option>
                        
                    
                        
                            <option data-code="DN" value="48">Đồng Nai</option>
                        
                    
                        
                            <option data-code="DT" value="56">Đồng Tháp</option>
                        
                     
                  
            </select>
        </div>
        
        
    </div>

         <div class="form-group">
         <p>Điện thoại<span>*</span></p>	
         
             <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
             <div class="validation"></div>
         </div>
         <div class="form-group">
         <p>Địa chỉ<span>*</span></p>
         
             <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
             <div class="validation"></div>
         </div>	
 </div>
 </div>
<button type="submit" class="bouton-contact">Đặt hàng</button>
 
</form>	

@endsection