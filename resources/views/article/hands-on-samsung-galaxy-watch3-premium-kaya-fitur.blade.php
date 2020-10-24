@extends('master')
@section('title', 'Hands-On Samsung Galaxy Watch3: Premium, Kaya Fitur')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post3-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Hands-On Samsung Galaxy Watch3: Premium, Kaya Fitur</h1>
            <span class="meta">Posted by
              <a href="#">Admin</a>
              on October 04, 2020</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Pada hari Rabu (16/9), Samsung Indonesia baru saja memperkenalkan secara resmi terkait produk smartwatch terbarunya, yakni Samsung Galaxy Watch3 yang sekaligus menjadi suksesor dari Galaxy Watch terdahulu.</p>
          <p>Dalam sesi media briefing terbatas yang dilakukan secara online, Samsung menjabarkan berbagai jenis keunggulan dan peningkatan yang dimiliki oleh Galaxy Watch3 ini, termasuk bagaimana desain yang digunakan kali ini memiliki besar dan bobot yang lebih ringan dibandingkan produk sebelumnya. Apa saja fitur dan keunggulan yang disuguhkan oleh Galaxy Watch3 ini?</p>
          <h2 class="section-heading">Desain dan Spesifikasi</h2>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/gakaxy-watch-1-711x480.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/gakaxy-watch-1-711x480.jpg" alt="">
          </a>
          <p>Dimulai dari desain dan bodinya, Galaxy Watch3 mengusung desain yang stylish dan chic, dengan menggunakan premium stainless steel case, premium genuine leather band, serta memiliki bezel jam yang bisa dirotasi secara fisik untuk memudahkan penggunaan. Pada bodi jam, terdapat juga dua tombol kontrol utama yang keduanya terletak di sisi kanan jam tangan utamanya.</p>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Galaxy-Watch3-15-720x405.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Galaxy-Watch3-15-720x405.jpg" alt="">
          </a>
          <p>Jika membandingkannya dengan Galaxy Watch, Galaxy Watch3 ini memiliki diameter jam tangan utama 46mm dengan besar layar 1.4″ panel AMOLED, panjang 45mm dengan ketebalan 11.1 t serta bobot 53 gram. Jadi, Galaxy Watch3 ini terbukti 14% lebih tipis, 8% lebih kecil, 16% lebih ringan, serta menawarkan resolusi layar yang lebih besar dari Galaxy Watch terdahulu. Galaxy Watch3 ini sendiri hadir dalam pilihan ukuran 45mm dan 41mm. Untuk hands-on kali ini, kami mendapatkan pinjaman versi 41mm dengan warna Mystic Bronze.</p>
          <p>Galaxy Watch 3 memiliki dapur pacu utama berupa chipset Exynos 9110, RAM 1GB, internal storage 8GB, serta baterai 247mah (41mm) dan 340mAh (45mm). Perangkat ini juga berjalan menggunakan sistem operasi TIzen OS 5.5. Perangkat ini juga dibekali dengan sensor GPS, WiFi, NFC, Bluetooth 5.0, ketahanan air IP68 serta model standalone dengan konektivitas 4G LTE.</p>
          <h2 class="section-heading">Harga dan Ketersediaan</h2>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Galaxy-Watch3-24-720x405.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Galaxy-Watch3-24-720x405.jpg" alt="">
          </a>
          <p>Galaxy Watch3 hadir dalam varian 45mm dan 41mm, di mana varian 45mm Stainless Steel memiliki opsi warna Mystic Black dan Mystic Silver. Sementara 41mm hadir dalam opsi warna Mystic Bronze dan Mystic Silver. Galaxy Watch3 diameter 45mm akan dijual dengan harga Rp 6.299.000, sementara 41mm seharga Rp 5.999.000.</p>
          <p>Review by
            <a href="#">Admin</a>. Photographs by
            <a href="#">NgeReview.com</a>.</p>
            
            <!-- Comments Form -->
            <form action="/komentarCreate2" method="post">
              @csrf
            <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">
              <form>
              <h6>Nama:</h6>
              <div class="form-group">
                <textarea class="form-control" rows="1" required="required" name="nama"></textarea>
              </div>
              <h6>Komentar:</h6>
              <div class="form-group">
                <textarea class="form-control" rows="3" required="required" name="komen"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Comments -->
        @foreach($komentars as $k)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$k->nama}}</h5>
            {{$k->komen}}
          </div>
        </div>
        <hr>
        @endforeach

        </div>
      </div>
    </div>
  </article>
  @endsection