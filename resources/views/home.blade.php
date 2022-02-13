@extends('layouts.main')

@section('container')
<link rel="stylesheet" type="text/css" href="css/homee.css">

<div class="jumbotron jumbotron-fluid" id="jum">
    <div class="container text-center">
        <h1 class="font"><span>A GOOD EDUCATION IS A <p>FOUNDATION FOR A BETTER FUTURE</p></span></h1>
    </div>
</div>

  <div class="container">
<div class="elemen shadow p-3 mb-5 bg-white rounded">
    <div class="row">
      <div class="col-sm text-center">
          <img src="../img/img1.png" width="150px" height="100px" alt="" data-tilt data-tilt-scale="1.2">
        <h5 class="mt-2">Reading and Fun</h5>
        <p>Reading blogs here will make you happy.</p>
      </div>
      <div class="col-sm text-center">
        <img src="../img/img2.png" width="150px" height="100px" alt="" data-tilt data-tilt-scale="1.2">
        <h5 class="mt-2">Beautifull Writing</h5>
        <p>Have interesting writing.</p>
      </div>
      <div class="col-sm text-center">
        <img src="../img/img3.png" width="150px" height="100px" alt="" data-tilt data-tilt-scale="1.2">
        <h5 class="mt-2">Qualified Blogs</h5>
        <p>There are many quality bloggers.</p>
      </div>
    
    </div>
  </div>
</div>

  <div class="container mb-5">
      <div class="row no-gutters">
      <div class="col-md-8">
          <div class="card-body" style="margin-top: 50px;">
            <h5 class="judul" style="font-family: 'Viga', sans-serif; font-size : 40px;">Sejarah Wulan Blog</h5>
            <p class="card-text mt-4" style="text-align: justify;">Wulan Blog adalah sebuah website yang menyediakan berbagai postingan untuk anda baca. Berawal dari pembuat blog wulan ingin membaca artikel dengan lebih luas, dan juga bisa menciptakan sebuah postingan baru yang bermanfaat untuk dibaca.  Seiring dengan semakin berkembangnya teknologi, maka kami mencoba berinovasi dalam membuat blog ini menjadi lebih canggih.</p>
            <p style="text-align: justify;"> Salah satu bentuk inovasinya adalah dengan menyediakan berbagai postingan kami melalui media internet, dan website blog ini adalah salah satu bentuk pelayanan kami kepada Anda. Wulan Blog didirikan oleh Ms. Wulan pada 20 Januari 2022. Keberadaan dari website atau blog ini diharapkan dapat mempermudah Anda untuk mendapatkan berbagai postingan berkualitas tinggi namun dengan tidak adanya keterbatasan.</p>
            <a href="/sejarahblog" class="btn btn-outline-danger">Learn More</a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="../img/img10.jpg" style="margin-top: 50px;" alt="...">
        </div>
      </div>
  </div>

  <div class="ekstrakulikuler mb-5" style="background-color: rgb(238, 238, 238); padding-top: 30px; padding-bottom : 30px;">
  <div class="jdl mb-5">
    <h3 class= "text-center" style="font-family: 'Viga', sans-serif; font-size : 40px;">CATEGORY BLOG PALING BANYAK DIBACA</h3>
    <p class="text-center">Wulan Blog mempunyai beberapa category postingan yang menarik dan banyak diminati oleh pembaca.</p>
  </div>

    <div class="container">
    <div class="row">

      <div class="col mt-2" data-tilt>
        <img src="../img/rpl.jpg"  style = "width : 18rem;" class="card-img-top" alt="...">
        <div class="card shadow p-3 mb-5" style="width: 18rem;">
          
          <div class="card-body">
            <h5 class="card-title" style="color:#a52a2a;">WEB PROGRAMMING</h5>
            <p class="card-text">Web development is the work involved in developing a website for the Internet or an intranet.</p>
            <a href="/webprogramming" class="btn btn-outline-danger">Read More</a>
          </div>
        </div>
      </div>
      
      <div class="col" data-tilt>
        <img src="../img/img11.png" style = "width : 20rem;" class="card-img-top" alt="...">
        <div class="card shadow p-3 mb-5" style="width: 20rem;">
          
          <div class="card-body">
            <h5 class="card-title" style="color:#a52a2a;">WEB DESAIN</h5>
            <p class="card-text">Web design encompasses many different skills and disciplines in the production and maintenance of websites.</p>
            <a href="/webdesain" class="btn btn-outline-danger">Read More</a>
          </div>
        </div>
      </div>

      <div class="col mt-2" data-tilt>
        <div class="car">
        <img src="../img/bdp.jpg" style = "width : 18rem;"class="card-img-top" alt="...">
        <div class="card shadow p-3 mb-5" style="width: 18rem;">
          
          <div class="card-body">
            <h5 class="card-title" style="color:#a52a2a;">PERSONAL</h5>
            <p class="card-text">Personal there are many articles about yourself that can inspire.</p>
            <a href="/personal" class="btn btn-outline-danger">Read More</a>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
  </div>

@endsection