@extends('layouts.app')

@section('content')
<main class="main">
    <!-- Beranda -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 d-flex flex-column justify-content-center align-items text-center text-md-start" data-aos="fade-up">
            <h2>Grow Up Your Business</h2>
            <div class="d-flex mt-4 justify-content-center justify-content-md-start">
              <a href="{{ route('user.home') }}#project" class="download-btn"><span>Jelajahi</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Tentang -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
          <div class="col-xl-5 content">
            <h2>Apa itu Bima Technologies?</h2>
            <p>Bima Technologies merupakan perusahaan yang bergerak di bidang Teknologi Informasi.
              Perusahaan ini didirikan sejak tahun 2016 dan memiliki budaya perusahaan yang didasarkan pada profesionalisme, kreativitas, dan inovasi.
              Menurut <a href="https://www.bimatechnologies.com/" target="_blank" style="color: #7a85c1;">Bima Technologies</a>
            </p>
          </div>
          <div class="col-xl-7">
            <div class="icon-box">
              <img src="{{ asset('assets/img/background.jpg') }}" style="width:100%; max-width:1000px; height:auto;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="featured" class="featured section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Business Line</h2>
        <p>Lini bisnis kami yang dirancang untuk memenuhi kebutuhan bagi perusahaan anda</p>
      </div>

      <div class="container">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-4">
            <div class="card">
              <div class="img">
                <img src="assets/img/1.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-hospital"></i></div>
              </div>
              <h2 class="title">Consulting</h2>
              <p>Memberikan solusi terbaik kepada pelanggan, khususnya di bidang Teknologi Informasi.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="img">
                <img src="assets/img/2.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
              <h2 class="title">Service</h2>
              <p>Melakukan pekerjaan dengan baik sesuai dengan kesepakatan pelanggan.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="img">
                <img src="assets/img/3.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-clipboard-pulse"></i></div>
              </div>
              <h2 class="title">Trading</h2>
              <p>Menjual alat yang berhubungan dengan Teknologi Informasi untuk memenuhi kebutuhan pelanggan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Layanan -->
    <section id="cards" class="cards section">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>Menyediakan berbagai layanan untuk mendukung bisnis anda</p>
        </div>
        <div class="text-center mb-4 steps-img" data-aos="zoom-out">
          <img src="assets/img/4.png" alt="">
        </div>

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <span>01</span>
              <h4><a href="" class="stretched-link">Software Development</a></h4>
              <p>Perencanaan dan pengembangan perangkat lunak.</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <span>02</span>
              <h4><a href="" class="stretched-link">Network Infrastructure</a></h4>
              <p>Penyediaan dan pengelolaan infrastruktur jaringan.</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <span>03</span>
              <h4><a href="" class="stretched-link">Managed Service</a></h4>
              <p>Pemeliharaan dan pengawasan pada sistem untuk memastikan performa yang optimal.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Dapatkan jawaban atas pertanyaan-pertanyaan umum mengenai perusahaan kami</p>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-container">
              <div class="faq-item">
                <h3>1?</h3>
                <div class="faq-content">
                  <p>Satu</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>2?</h3>
                <div class="faq-content">
                  <p>Dua</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>3?</h3>
                <div class="faq-content">
                  <p>Tiga</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>4?</h3>
                <div class="faq-content">
                  <p>Empat</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami untuk mendapatkan informasi lebih lanjut</p>
      </div>

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Karimata, Komplek Karimata Square Blok A2 Jember, Jawa Timur, Indonesia</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>No. Telepon</h3>
                <p>+62 822-3224-8889</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>cv.bimatechnologies@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form method="POST" action="{{ route('contact.send') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Sedang memuat...</div>
                  <div class="error-message">Terjadi kesalahan ketika mengirim pesan.</div>
                  <div class="sent-message">Pesan telah terkirim.</div>
                  <button type="submit"><span>Kirim</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</main>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
@endsection
