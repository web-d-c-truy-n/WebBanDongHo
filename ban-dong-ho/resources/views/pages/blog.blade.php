@extends('layout')
@section('css')
<style>
    /* Demo Code: */
body {
	font-family: 'Open Sans', arial, sans-serif;
	color: #333;
	font-size: 14px;
}
.projcard-container {
	margin: 50px 0;
}

/* Actual Code: */
.projcard-container,
.projcard-container * {
	box-sizing: border-box;
}
.projcard-container {
	margin-left: auto;
	margin-right: auto;
	width: 1000px;
}
.projcard {
	position: relative;
	width: 100%;
	height: 300px;
	margin-bottom: 40px;
	border-radius: 10px;
	background-color: #fff;
	border: 2px solid #ddd;
	font-size: 18px;
	overflow: hidden;
	cursor: pointer;
	box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
	transition: box-shadow 0.2s ease, transform 0.2s ease;
}
.projcard:hover {
	box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
	transform: translate(0px, -3px);
}
.projcard::before {
	content: "";
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-image: linear-gradient(-70deg, #424242, transparent 50%);
	opacity: 0.07;
}
.projcard:nth-child(2n)::before {
	background-image: linear-gradient(-250deg, #424242, transparent 50%);
}
.projcard-innerbox {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
}
.projcard-img {
	position: absolute;
	height: 300px;
	width: 400px;
	top: 0;
	left: 0;
	transition: transform 0.2s ease;
}
.projcard:nth-child(2n) .projcard-img {
	left: initial;
	right: 0;
}
.projcard:hover .projcard-img {
	transform: scale(1.05) rotate(1deg);
}
.projcard:hover .projcard-bar {
	width: 70px;
}
.projcard-textbox {
	position: absolute;
	top: 7%;
	bottom: 7%;
	left: 430px;
	width: calc(100% - 470px);
	font-size: 17px;
}
.projcard:nth-child(2n) .projcard-textbox {
	left: initial;
	right: 430px;
}
.projcard-textbox::before,
.projcard-textbox::after {
	content: "";
	position: absolute;
	display: block;
	background: #ff0000bb;
	background: #fff;
	top: -20%;
	left: -55px;
	height: 140%;
	width: 60px;
	transform: rotate(8deg);
}
.projcard:nth-child(2n) .projcard-textbox::before {
	display: none;
}
.projcard-textbox::after {
	display: none;
	left: initial;
	right: -55px;
}
.projcard:nth-child(2n) .projcard-textbox::after {
	display: block;
}
.projcard-textbox * {
	position: relative;
}
.projcard-title {
	font-family: 'Voces', 'Open Sans', arial, sans-serif;
	font-size: 24px;
}
.projcard-subtitle {
	font-family: 'Voces', 'Open Sans', arial, sans-serif;
	color: #888;
}
.projcard-bar {
	left: -2px;
	width: 50px;
	height: 5px;
	margin: 10px 0;
	border-radius: 5px;
	background-color: #424242;
	transition: width 0.2s ease;
}
.projcard-blue .projcard-bar { background-color: #0088FF; }
.projcard-blue::before { background-image: linear-gradient(-70deg, #0088FF, transparent 50%); }
.projcard-blue:nth-child(2n)::before { background-image: linear-gradient(-250deg, #0088FF, transparent 50%); }
.projcard-red .projcard-bar { background-color: #D62F1F; }
.projcard-red::before { background-image: linear-gradient(-70deg, #D62F1F, transparent 50%); }
.projcard-red:nth-child(2n)::before { background-image: linear-gradient(-250deg, #D62F1F, transparent 50%); }
.projcard-green .projcard-bar { background-color: #40BD00; }
.projcard-green::before { background-image: linear-gradient(-70deg, #40BD00, transparent 50%); }
.projcard-green:nth-child(2n)::before { background-image: linear-gradient(-250deg, #40BD00, transparent 50%); }
.projcard-yellow .projcard-bar { background-color: #F5AF41; }
.projcard-yellow::before { background-image: linear-gradient(-70deg, #F5AF41, transparent 50%); }
.projcard-yellow:nth-child(2n)::before { background-image: linear-gradient(-250deg, #F5AF41, transparent 50%); }
.projcard-orange .projcard-bar { background-color: #FF5722; }
.projcard-orange::before { background-image: linear-gradient(-70deg, #FF5722, transparent 50%); }
.projcard-orange:nth-child(2n)::before { background-image: linear-gradient(-250deg, #FF5722, transparent 50%); }
.projcard-brown .projcard-bar { background-color: #C49863; }
.projcard-brown::before { background-image: linear-gradient(-70deg, #C49863, transparent 50%); }
.projcard-brown:nth-child(2n)::before { background-image: linear-gradient(-250deg, #C49863, transparent 50%); }
.projcard-grey .projcard-bar { background-color: #424242; }
.projcard-grey::before { background-image: linear-gradient(-70deg, #424242, transparent 50%); }
.projcard-grey:nth-child(2n)::before { background-image: linear-gradient(-250deg, #424242, transparent 50%); }
.projcard-customcolor .projcard-bar { background-color: var(--projcard-color); }
.projcard-customcolor::before { background-image: linear-gradient(-70deg, var(--projcard-color), transparent 50%); }
.projcard-customcolor:nth-child(2n)::before { background-image: linear-gradient(-250deg, var(--projcard-color), transparent 50%); }
.projcard-description {
	z-index: 10;
	font-size: 15px;
	color: #424242;
	height: 125px;
	overflow: hidden;
	text-overflow: ellipsis;
}
.projcard-tagbox {
	position: absolute;
	bottom: 3%;
	font-size: 14px;
	cursor: default;
	user-select: none;
	pointer-events: none;
}
.projcard-tag {
	display: inline-block;
	background: #E0E0E0;
	color: #777;
	border-radius: 3px 0 0 3px;
	line-height: 26px;
	padding: 0 10px 0 23px;
	position: relative;
	margin-right: 20px;
	cursor: default;
	user-select: none;
	transition: color 0.2s;
}
.projcard-tag::before {
	content: '';
	position: absolute;
	background: #fff;
	border-radius: 10px;
	box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
	height: 6px;
	left: 10px;
	width: 6px;
	top: 10px;
}
.projcard-tag::after {
	content: '';
	position: absolute;
	border-bottom: 13px solid transparent;
	border-left: 10px solid #E0E0E0;
	border-top: 13px solid transparent;
	right: -10px;
	top: 0;
}
@import url(https://fonts.googleapis.com/css?family=Raleway:400);
.snip1457 {
  font-family: 'Raleway', Arial, sans-serif;
  border: none;
  background-color: #5666a5;
  border-radius: 5px;
  color: #ffffff;
  cursor: pointer;
  padding: 0px 30px;
  display: inline-block;
  margin: 15px 30px;
  text-transform: uppercase;
  line-height: 46px;
  font-weight: 400;
  font-size: 1em;
  outline: none;
  position: relative;
  overflow: hidden;
  font-size: 16px;
  border-radius: 23px;
  letter-spacing: 2px;
  -webkit-transform: translateZ(0);
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.snip1457:before {
  opacity: 0;
  content: "";
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  border-radius: inherit;
  background-color: #ffffff;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
}
.snip1457:after {
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  border: 5px solid #5666a5;
  content: '';
  border-radius: inherit;
}
.snip1457:hover,
.snip1457.hover {
  background-color: #5666a5;
  color: #ffffff;
}
.snip1457:hover:before,
.snip1457.hover:before {
  -webkit-transform: translateY(0%);
  transform: translateY(0%);
  opacity: 0.25;
}
</style>
@endsection
@section('rederbody')

<div class="projcard-container">	
	@foreach ($blog as $index=>$bv)
		@if ($index%2==0)
			<div class="projcard projcard-blue" link="{{URL::to("chi-tiet-bai-viet/$bv->id")}}">
				<div class="projcard-innerbox">
					<img class="projcard-img" src="{{ asset($bv->HinhAnh()->URL) }}" />
					<div class="projcard-textbox">
						<div class="projcard-title">{{$bv->TENBAIVIET}}</div>
						<div class="projcard-subtitle"></div>
						<div class="projcard-bar"></div>
						<div class="projcard-description">{{$bv->NOIDUNGTOMTAT}}</div>
						<div class="projcard-tagbox">
							<button class="snip1457 hover">Đọc thêm</button>
						</div>
					</div>
				</div>
			</div>
		@else
			<div class="projcard projcard-green" link="{{URL::to("chi-tiet-bai-viet/$bv->id")}}">
				<div class="projcard-innerbox">
					<img class="projcard-img" src="{{ asset($bv->HinhAnh()->URL) }}" />
					<div class="projcard-textbox">
						<div class="projcard-title">{{$bv->TENBAIVIET}}</div>
						<div class="projcard-subtitle"></div>
						<div class="projcard-bar"></div>
						<div class="projcard-description">{{$bv->NOIDUNGTOMTAT}}</div>
						<div class="projcard-tagbox">
							<button class="snip1457 hover">Đọc thêm</button>
						</div>
					</div>
				</div>
			</div>
		@endif
	@endforeach
</div>
@endsection
@section('js')
<script>
// document.querySelectorAll(".projcard-description").forEach(function(box) {
// 	$clamp(box, {clamp: 6});
// });
$(document).ready(function () {
	$(".projcard").click(function (e) { 
		window.location.href = $(this).attr("link");
		
	});
});
</script>
@endsection