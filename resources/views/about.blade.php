@extends('layouts.main')

@section('container')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>	
<body>
	<div class="section">
		<div class="con">
			<div class="content-section">
				<div class="title">
					<h1 style="color:#a52a2a;">About Me</h1>
				</div>
				<div class="content">
					<h3>Pendiri Wulan Bog : Ms. Wulan Rahmawati</h3>
					<p style="text-align: justify">Senang bertemu dengan kalian semua dalam blog yang saya buat ini
					perkenalkan saya Wulan Rahmawati, pertama saya membuat blog ini karena ingin
					meningkatkan minat baca remaja di era sekarang. Saya harap blog ini dapat bermanfaat
					untuk kita semua.</p>
					<div class="button">
						<a href="/aboutme">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href="https://api.whatsapp.com/send?phone=6289656087197&text=Hi"><i class="fab fa-whatsapp"></i></a>
					<a href="https://www.instagram.com/wulaaanrh/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCmkIYTF9DsSSzEhlwcHPboA"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="../img/wulan.png">
			</div>
		</div>
	</div>
</body>

@endsection