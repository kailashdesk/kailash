<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
	background: #222 url("kailashdesk.jpg") no-repeat fixed center;
	background-size: cover;
	overflow: hidden;
}

.social {
	position: absolute;
	width: 100%;
	top: 50%;
	text-align: center;
	transform: translateY(-50%);
}

.social .link {
	display: inline-block;
	vertical-align: middle;
	position: relative;
	width: 100px;
	height: 100px;
	border-radius: 50%;
	border: 2px dashed white;
	background-clip: content-box;
	padding: 10px;
	transition: .5s;
	color: #D7D0BE;
	margin-left: 15px;
	margin-right: 15px;
	font-size: 70px;
}

.social .link span {
	display: block;
	position: absolute;
	text-align: center;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.social .link:hover {
	padding: 20px;
	color: white;
	margin-left: -5px;
	transform: translateX(10px) rotate(360deg);
}

.social .link.google-plus {
	background-color: tomato;
	color: white;
}

.social .link.twitter {
	background-color: #00ACEE;
	color: white;
}

.social .link.facebook {
	background-color: #3B5998;
	color: white;
}
</style>
<div class="social">
	<a href="https://facebook.com/ondrej.p.barta" class="link facebook"
		target="_parent"><span class="fa fa-facebook-square"></span></a> <a
		href="https://twitter.com/PageOnlineXS" class="link twitter"
		target="_parent"><span class="fa fa-twitter"></span></a> <a
		href="https://plus.google.com/+OndřejBárta-Otaku"
		class="link google-plus" target="_parent"><span
		class="fa fa-google-plus-square"></span></a>
</div>
