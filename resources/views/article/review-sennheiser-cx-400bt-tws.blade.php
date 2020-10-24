@extends('master')
@section('title', 'Review Sennheiser CX 400BT TWS: Harga Tak Bohong!')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post4-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Review Sennheiser CX 400BT TWS: Harga Tak Bohong!</h1>
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
          <p>Kali ini kita kedatangan earphone TWS untuk pengujian review yaitu Sennheiser CX 400BT. Ini adalah earphone terbaru dari Sennheiser, yang siap bersaing di kelas earphone true wireless kelas premium.</p>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-7.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-7.jpg" alt="">
          </a>
          <p>Tentunya kita penasaran, seperti apa sebenarnya earphone kelas premium yang sesungguhnya dari brand audio ternama ini. Apalagi mengingat harga yang ditawarkan pun jauh berbeda dari earphone besutan brand-brand smartphone yang saat ini juga ikut nyemplung menghadirkan produk audio.
            Untuk itu, buat kalian yang sudah penasaran, simak review lengkap Sennheiser CX 400BT berikut ini!</p>

          <h2 class="section-heading">Desain</h2>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-3-2.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-3-2.jpg" alt="">
          </a>
          <p>Earbuds Sennheiser CX 400BT TWS memiliki desain In-ear, dengan modul luar berbentuk kotak dan tampilan glossy dengan logo Sennheiser. Sekilas masih sangat mirip dengan versi yang lebih tinggi yaitu Momentum True Wireless 2</p>
          <h2 class="section-heading">Kualitas Audio</h2>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/20200911_102029-686x480.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/20200911_102029-686x480.jpg" alt="">
          </a>
          <p>Kami menguji perangkat ini menggunakan smartphone Android dan aplikasi Spotify. Kami memutar beberapa lagu dengan genre yang berbeda di kualitas tertinggi.
            Terbukti kualitas audio yang ditawakan memang sangat memuaskan. earbuds CX 400BT memiliki suara yang jernih dan detail di semua frekuensi. earbuds ini memiliki bass yang dalam, apalagi didukung dengan desain in-ear yang dihadirkan.</p>

          <h2 class="section-heading">Baterai</h2>
          <p>Adapun untuk daya tahan baterai, sesuai klaim dari Senheisser, perangkat ini memiliki daya tahan baterai selama 20 jam. Untuk pemakaian tanpa charging case, dalam pengujian review earbuds CX 400BT ini, kita bisa menggunakannya selama sekitar sekitar 7 jam.</p>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-1-1.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-1-1.jpg" alt="">
          </a>

          <h2 class="section-heading">Kesimpulan</h2>
          <p>Sebagai brand audio profesional, Sennheiser sepertinya memang tahu benar bagaimana merancang perangkat earphone dengan kualitas audio tanpa kompromi. Termasuk pada perangkat Sennheiser CX 400BT yang telah kami review ini.</p>
          <a href="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-1-1.jpg">
            <img class="img-fluid" src="http://gadget.jagatreview.com/wp-content/uploads/2020/09/Review-Sennheiser-CX-400BT-5.jpg" alt="">
          </a>
          <p>Untuk kualitas suara, earphone TWS ini jelas benar-benar memuaskan. Sennheiser merancang desain akustik yang efektif dan maksimal untuk menghasilkan suara yang berkualitas. Meski hanya dengan driver 7mm, namun audio yang dihasilkan sangat memuaskan.</p>
          <p>Sennheiser CX400BT True Wireless telah tersedia di pasar Indonesia, dimana produk ini dibanderol dengan harga Rp 3.999.000. Pre-order mulai di buka pada tanggal 9-23 September 2020 melalui Showroom The Expert Group Indonesia. Sennhesier memberikan jaminan produk berupa garansi 2 tahun  untuk produknya yang satu ini.</p>

          <p>Placeholder text by
            <a href="#">Admin</a>. Photographs by
            <a href="#">NgeReview.com</a>.</p>

               <!-- Comments Form -->
            <form action="/komentarCreate3" method="post">
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
        @foreach($komentartiga as $k3)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$k3->nama}}</h5>
            {{$k3->komen}}
          </div>
        </div>
        @endforeach

        </div>
      </div>
    </div>
  </article>
  @endsection