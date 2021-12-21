@extends('layout')
@section('css')
    {{-- <link href="{{ asset('/css/register.css') }}" rel="stylesheet" type="text/css"/> --}}
    <style>html, body{height:100%;background: #56CCF2;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2F80ED, #56CCF2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        
        #signin{width:40%; background:#3F51B5; margin:0 auto; box-shadow:0 0 64px rgba(0,0,0,0.5); padding:100px; position:relative; overflow:hidden;}
        #signin .form-title{font:500 16px/1 'Roboto',sans-serif; color:#EBEBEB; text-align:center; margin:35px 0;}
        
        #signin .input-field{position:relative; height:50px; margin:35px 0; transition:all 300ms;}
        #signin .input-field i{position:absolute; bottom:28px; left:15px; color:#BBBBBB; height:0; visibility:hidden; font-size:100%; transition:height 250ms;}
        #signin .input-field label{width:100%; height:100%; position:absolute; margin-top:-13px; left:4px; font:400 16px/1 'Roboto',sans-serif; color:#FFF; opacity:1; transition:all 300ms;}
        #signin .input-field input{width:100%; height:4px; font:500 16px/1 'Roboto',sans-serif; padding:0 20px 0 50px; border:none; box-shadow:0 10px 10px rgba(0,0,0,0.25); color:#606060; border-radius:6px; outline:0; overflow:hidden; position:absolute; bottom:0; left:0; transition:all 300ms;}
        
        #signin .forgot-pw{font:600 14px/1 'Roboto',sans-serif; color:#2E3C89; text-decoration:none; float:right; margin:0 0 25px 0; display:block;}
        #signin button.login{min-height:60px; font:500 16px/1 'Roboto',sans-serif; width:100%; padding:20px; display:block; background:#324192; color:#FFF; border:none; outline:0; cursor:pointer; position:absolute; left:0; bottom:0;}
        #signin .check{width:100%; height:100%; background:#324192; position:absolute; top:100%; left:0; text-align:center; visibility:hidden; transition:all 1s;}
        #signin .check.in{visibility:visible; top:0;}
        #signin .check i{color:#FFF; font-size:64px; line-height:7.4;}
        
        #signin .input-field input:focus{color:#333;}
        #signin .input-field input:focus, #signin .input-field input.not-empty{height:auto; padding:14px 20px 14px 50px;}
        #signin .input-field input:focus + i, #signin .input-field input.not-empty + i{font-size:24px; bottom:26px; height:10px; visibility:visible;}
        #signin .input-field input:focus + i + label, #signin .input-field input.not-empty + i + label{font-size:12px; margin-top:-15px; opacity:0.7; animation:label 300ms 1;}
        
        @keyframes label{
            0%{margin-top:-15px;}
            50%{margin-top:-25px;}
            100%{margin-top:-15px;}
        }
        
        #gif{width:50%;}
        #gif a img{max-width:100%; box-shadow:0 0 64px rgba(0,0,0,0.5);}

    </style>
@endsection
@section('rederbody')
<div id="signin">
	<div class="form-title">Đăng nhập</div>
	<div class="input-field">
		<input type="email" id="email" autocomplete="off"/>
		<i class="material-icons"></i>
		<label for="email">Email/ Username</label>
	</div>
	<div class="input-field">
		<input type="password" id="password"/>
		<i class="material-icons"></i>
		<label for="password">Mật khẩu</label>
	</div>
	<a href="" class="forgot-pw">Quên mật khẩu?</a>
    <p>Đã có tài khoản ? <a href="#">Đăng ký</a></p>
	<button class="login">Đăng nhập</button>
	<div class="check">
		<i class="material-icons"></i>
	</div>
</div>
<div id="gif">
	<a href="https://dribbble.com/shots/2197140-New-Material-Text-Fields">
		<img src="https://d13yacurqjgara.cloudfront.net/users/472930/screenshots/2197140/efsdfsdae.gif" alt="">
	</a>
</div>
@endsection
@section('js')
{{-- <script>
    $("input").on('focusout', function(){
	$(this).each(function(i, e){
		if($(e).val() != ""){
			$(e).addClass('not-empty');
		}else{
			$(e).removeClass('not-empty');
		}
	});
});

$(".login").on('click', function(){
	$(this).animate({
		fontSize : 0
	}, 300, function(){
		$(".check").addClass('in');
	});
});
</script> --}}
@endsection