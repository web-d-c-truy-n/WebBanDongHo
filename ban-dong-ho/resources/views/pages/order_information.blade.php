@extends('layout')
@section('css')
    <style>
        body {
            margin: auto;
            background: #eaeaea;
            font-family: 'Open Sans', sans-serif;
        }

        .info p {
            text-align: center;
            color: #999;
            text-transform: none;
            font-weight: 600;
            font-size: 15px;
            margin-top: 2px
        }

        .info i {
            color: #F6AA93;
        }

        form h1 {
            font-size: 18px;
            background: #F6AA93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left
        }

        form {
            border-radius: 5px;
            max-width: 700px;
            width: 100%;
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
            color: #333;
        }

        h1 {
            text-align: center;
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin: 50px 0px 0px 0px
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
            text-decoration: inherit
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
            background: #eeeeee;
            height: 42px;
            position: relative;
            text-align: center;
            line-height: 40px;
        }

        i {
            color: #555;
        }

        .contentform {
            padding: 40px 30px;
        }

        .bouton-contact {
            background-color: #81BDA4;
            color: #FFF;
            text-align: center;
            width: 100%;
            border: 0;
            padding: 17px 25px;
            border-radius: 0px 0px 5px 5px;
            cursor: pointer;
            margin-top: 40px;
            font-size: 18px;
        }

        .leftcontact {
            width: 49.5%;
            float: left;
            border-right: 1px dotted #CCC;
            box-sizing: border-box;
            padding: 0px 15px 0px 0px;
        }

        .rightcontact {
            width: 49.5%;
            float: right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
        }

        .validation {
            display: none;
            margin: 0 0 10px;
            font-weight: 400;
            font-size: 13px;
            color: #DE5959;
        }

        #sendmessage {
            border: 1px solid #fff;
            display: none;
            text-align: center;
            margin: 10px 0;
            font-weight: 600;
            margin-bottom: 30px;
            background-color: #EBF6E0;
            color: #5F9025;
            border: 1px solid #B3DC82;
            padding: 13px 40px 13px 18px;
            border-radius: 3px;
            box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
        }

        #sendmessage.show,
        .show {
            display: block;
        }

    </style>
@endsection
@section('rederbody')
    <h1>Thông tin đơn đặt hàng</h1>
    <form action="{{URL::to("dat-hang")}}" method="POST">
        <h1>Điền đầy đủ thông tin, nhân viên sẽ liên lạc lại sau khi nhận được đơn hàng</h1>
        @csrf
        <div class="contentform">
            <div id="sendmessage">Đặt thành công.</div>


            <div class="leftcontact">
                <div class="form-group">
                    <p>Họ và tên:<span>*</span></p>

                    <input type="text" name="HOTEN" id="HOTEN" data-rule="required"
                        data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Giới tính<span>*</span></p>
					<select class="field-input" id="GIOITINH" name="GIOITINH">
						<option data-code="null" value="null" selected="">
							Chọn giới tính </option>   
							<option value="1">Nam</option>   
							<option value="2">Nữ</option>
							<option value="3">Khác</option>                      
					</select>
                   
                </div>

                <div class="form-group">
                    <p>Mail<span>*</span></p>

                    <input type="email" name="email" id="email" data-rule="email"
                        data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." />
                    <div class="validation"></div>
                </div>




                <div class="form-group">
                    <p>Điện thoại<span>*</span></p>

                    <input type="text" name="SDT" id="postal" data-rule="required"
                        data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné." />
                    <div class="validation"></div>
                </div>



            </div>

            <div class="rightcontact">

                <div class="field  field-half">
                    <div class="field-input-wrapper field-input-wrapper-select">
                        <p>Tỉnh thành<span>*</span></p>
                        <select class="field-input" id="tinhThanh" name="MATINH">
                            <option data-code="null" value="null" selected="">
                                Chọn tỉnh / thành </option>   
							@foreach ($tinhThanh as $tinh )
							<option value="{{$tinh->matp}}">{{$tinh->name}}</option>
							@endforeach								                
                        </select>
                    </div>
                </div>
				<div class="field  field-half">
                    <div class="field-input-wrapper field-input-wrapper-select">
                        <p>Quận huyện<span>*</span></p>
                        <select class="field-input" id="quanHuyen" name="MAQUAN_HUYEN">
                            <option data-code="null" value="null" selected="">
                                Chọn quận / huyện </option>   							                         
                        </select>
                    </div>


                </div>
				<div class="field  field-half">
                    <div class="field-input-wrapper field-input-wrapper-select">
                        <p>Phường xã<span>*</span></p>
                        <select class="field-input" id="phuongXa" name="MAPHUONG_XA">
                            <option data-code="null" value="null" selected="">
                                Chọn phường / xã </option>                            
                        </select>
                    </div>


                </div>
                
				<div class="form-group">
                    <p>Địa chỉ<span>*</span></p>

                    <input type="text" name="DIACHI" id="phone" data-rule="maxlen:10"
                        data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres" />
                    <div class="validation"></div>
                </div>
               
				<div class="form-group">
                    <p>Ghi chú<span></span></p>

                    <textarea name="GHICHU" rows="14" data-rule="required"
                        data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                    <div class="validation"></div>
                </div>
            </div>
        </div>
        <button type="submit" class="bouton-contact">Đặt hàng</button>
    </form>
@endsection
@section("js")
	@include('common.layCacTinhThanh')
@endsection