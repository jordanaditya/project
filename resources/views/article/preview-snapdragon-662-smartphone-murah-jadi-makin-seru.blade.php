@extends('master')
@section('title', 'Preview Snapdragon 662: Smartphone Murah Jadi Makin Seru!')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post2-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Preview Snapdragon 662: Smartphone Murah Jadi Makin Seru!</h1>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
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
          <p>Pengguna smartphone, pastinya mengenal salah satu brand chipset mobile yang satu ini. Ya, Qualcomm sudah terkenal akan chipset Snapdragon untuk perangkat mobile miliknya, mulai dari kelas entry hingga flagship.</p>

          <p>Salah satu chipset kelas menengah barunya, Snapdragon 662, diperkenalkan di awal tahun 2020 ini bersama dengan Snapdragon 460 dan Snapdragon 720G. Apa saja yang baru dari Snapdragon 662 ini? Di antaranya termasuk dukungannay terhadap format HEIF, Dual Frequency GNSS (L1 + L5), serta keberadaan FastConnect 6100 dengan dukungan konektivitas modem.</p>

          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Snapdragon-662-720x405.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Snapdragon-662-720x405.jpg" alt="">
          </a>

          <h2 class="section-heading">Spesifikasi Snapdragon 662</h2>

          <p>Qualcomm Snapdragon 662 mengusung fabrikasi 11 nm yang membuatnya cukup hemat daya, dengan CPU menggunakan Kryo 260 yang terdiri dari 4x Kryo 260 Gols berbasis Cortex-A73 2.0 GHz dan 4rx Kryo 260 Silver berbasis Cortex A53 1.8 GHz. GPU menggunakan Adreno 610 dengan Max. on device display resolution FHD+ atau setara dengan 2520 x 1080 piksel. Dukungan Memory pada chipset termasuk LPDDR3 up to 933 MHz/LPDDR4X up to 1866 MHz, dan dukungan storage termasuk eMMC, UFS 2.1.</p>

          <p>ISP menggunakan Spectra 340T yang mendukung Single Camera up to 48 MP/25 MP with MFNR dan ZSL (30 fps), atau dukungan terhadap Dual Camera up to 16 MP with MFNR dan ZSL (30 fps). Untuk DSP, menggunakan Hexagon 683 yang terdiri dari Hexagon Vector eXtensions dan Hexagon Scalar Accelerator.</p>

         

          <h2 class="section-heading">Testbed dan Hasil Pengujian Snapdragon 662</h2>

          <p>Untuk menguji performa dari Snapdragon 662, kami menggunakan testbed yang terdiri dari chipset Snapdrgaon 662 dikombinasikan bersama dengan RAM 8 GB LPDD4RX.

            Kami menggunakan sejumlah benchmark yang umum digunakan untuk mengukur performa dari sebuah smartphone, seperti AnTuTu, Geekbench, 3DMark, dan GFXBench. Dalam pengujian singkat kali ini, kami membandingkan Snapdragon 662 dengan Snapdragon 665, di mana terlihat dalam pengujian di bawah, hasilnya memang akan lebih unggul ke Snapdragon 662 tetapi perbedaan skor yang dimilikinya tergolong tipis.</p>

          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/G5-720x405.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/G5-720x405.jpg" alt="">
          </a>
          
          <h2 class="section-heading">Penutup</h2>
          <p>Jika melihat hasil skor di atas serta spesifikasi yang dimilikinya, sebenarnya Snapdragon 662 sendiri tidak jauh berbeda dengan Snapdragon 665. Kedua chipset ini sama-sama menggunakan fabrikasi 11 nm, Kryo 260, dan GPU Adreno 610. DSP yang digunakannya memang berbeda, tetapi masih sama-sama mendukung sistem 3rd Gen Qualcomm AI Engine. Jadi, cukup wajar jika secara umum keduanya memiliki performa yang mirip.</p>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Performance-Summary-720x405.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Performance-Summary-720x405.jpg" alt="">
          </a>
          <p>Review by
            <a href="#">Admin</a>. Photographs by
            <a href="#">NgeReview.com</a>.</p>

            <!-- Comments Form -->
            <form action="/komentarCreate1" method="post">
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
        @foreach($komentarsatu as $k1)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$k1->nama}}</h5>
            {{$k1->komen}}
          </div>
        </div>
        @endforeach

        </div>
      </div>
    </div>
  </article>
  @endsection