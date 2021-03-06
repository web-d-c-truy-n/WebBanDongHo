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
    <h1>Th??ng tin ????n ?????t h??ng</h1>
    <form action="{{URL::to("dat-hang")}}" method="POST">
        <h1>??i???n ?????y ????? th??ng tin, nh??n vi??n s??? li??n l???c l???i sau khi nh???n ???????c ????n h??ng</h1>
        @csrf
        <div class="contentform">
            <div id="sendmessage">?????t th??nh c??ng.</div>


            <div class="leftcontact">
                <div class="form-group">
                    <p>H??? v?? t??n:<span>*</span></p>

                    <input type="text" name="HOTEN" id="HOTEN" data-rule="required"
                        data-msg="V??rifiez votre saisie sur les champs : Le champ 'Nom' doit ??tre renseign??." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Gi???i t??nh<span>*</span></p>
					<select class="field-input" id="GIOITINH" name="GIOITINH">
						<option data-code="null" value="null" selected="">
							Ch???n gi???i t??nh </option>   
							<option value="1">Nam</option>   
							<option value="2">N???</option>
							<option value="3">Kh??c</option>                      
					</select>
                   
                </div>

                <div class="form-group">
                    <p>Mail<span>*</span></p>

                    <input type="email" name="email" id="email" data-rule="email"
                        data-msg="V??rifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." />
                    <div class="validation"></div>
                </div>




                <div class="form-group">
                    <p>??i???n tho???i<span>*</span></p>

                    <input type="text" name="SDT" id="postal" data-rule="required"
                        data-msg="V??rifiez votre saisie sur les champs : Le champ 'Code postal' doit ??tre renseign??." />
                    <div class="validation"></div>
                </div>



            </div>

            <div class="rightcontact">

                <div class="field  field-half">
                    <div class="field-input-wrapper field-input-wrapper-select">
                        <p>T???nh th??nh<span>*</span></p>
                        <select class="field-input" id="tinhThanh" name="MATINH">
                            <option data-code="null" value="null" selected="">
                                Ch???n t???nh / th??nh </option>   
							@foreach ($tinhThanh as $tinh )
							<option value="{{$tinh->matp}}">{{$tinh->name}}</option>
							@endforeach								                
                        </select>
                    </div>
                </div>
				<div class="field  field-half">
                    <div class="field-input-wrapper field-input-wrapper-select">
                        <p>Qu???n huy???n<span>*</span></p>
                        <select class="field-input" id="quanHuyen" name="MAQUAN_HUYEN">
                            <option data-code="null" value="null" selected="">
                                Ch???n qu???n / huy???n </option>   							                         
                        </select>
                    </div>


                </div>
				<div class="field  field-half">
                    <div class="field-input-wrapper field-input-wrapper-select">
                        <p>Ph?????ng x??<span>*</span></p>
                        <select class="field-input" id="phuongXa" name="MAPHUONG_XA">
                            <option data-code="null" value="null" selected="">
                                Ch???n ph?????ng / x?? </option>                            
                        </select>
                    </div>


                </div>
                
				<div class="form-group">
                    <p>?????a ch???<span>*</span></p>

                    <input type="text" name="DIACHI" id="phone" data-rule="maxlen:10"
                        data-msg="V??rifiez votre saisie sur les champs : Le champ 'T??l??phone' doit ??tre renseign??. Minimum 10 chiffres" />
                    <div class="validation"></div>
                </div>
               
				<div class="form-group">
                    <p>Ghi ch??<span></span></p>

                    <textarea name="GHICHU" rows="14" data-rule="required"
                        data-msg="V??rifiez votre saisie sur les champs : Le champ 'Message' doit ??tre renseign??."></textarea>
                    <div class="validation"></div>
                </div>
            </div>
        </div>
        <button type="submit" class="bouton-contact">?????t h??ng</button>
    </form>
@endsection
@section("js")
	@include('common.layCacTinhThanh')
@endsection