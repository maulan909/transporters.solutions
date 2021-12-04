<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transporter | Fleet Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {!! RecaptchaV3::initJs() !!}
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body id="home" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="5" class="scrollspy-example" tabindex="0">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="assets/img/transporter logo-01.png" alt="" width="250"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partnership">Partnership</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#kontak-kami" class="nav-link btn btn-theme">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero" class="d-flex align-items-center" data-aos="fade-down" style="background-image: url('assets/img/hero-image.jpg');">
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <h1 class="hero-title text-white" data-aos="fade-down" data-aos-delay="500">
                        Solusi Distribusi untuk Usaha Anda
                    </h1>
                    <p class="hero-subtitle text-light" data-aos="fade-up" data-aos-delay="1000">
                        You need to deliver your goods? You are in right place at the right time!
                    </p>
                    <div class="cta">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 mb-3 mb-md-0">
                                <a href="#kontak-kami" class="btn btn-theme fw-bold px-5 fs-4 d-block" data-aos="fade-right" data-aos-delay="1500">Order Sekarang</a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5">
                                <a href="#tentang-kami" class="btn btn-outline-secondary px-5 fs-4 text-light border-2 d-block" data-aos="fade-left" data-aos-delay="2000">Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tentang-kami">
        <div class="bg-image-about" data-aos="fade-left" data-aos-offset="400" style="background-image: url('assets/img/about-image.jpg');">
            <div class="triangle-about">
            </div>
        </div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-7">
                        <h1 class="section-title text-white mb-5 fw-bold" data-aos="fade-up" data-aos-offset="400" data-aos-delay="500">Tentang Kami</h1>
                        <p class="text-white fs-4 text-justify" data-aos="fade-down" data-aos-offset="400" data-aos-delay="1000">
                            TRANSPORTER merupakan salah satu perusahaan di bawah PT. Setia Kawan Digitalisasi, berdiri di
                            awal tahun 2021. Perusahaan yang di bangun berdasarkan sistem partnership, baik dengan mitra
                            pengemudi maupun pelanggan kami.
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <section id="layanan" style="background-image: url('assets/img/service-image.jpg');" data-aos="fade-right" data-aos-offset="200">
        <div class="obj-triangle">
            <div class="triangle-layanan top-0">
            </div>
            <div class="triangle-layanan rotateX-180 bottom-0">
            </div>
        </div>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-12">
                    <h1 class="position-relative section-title text-white mb-5 fw-bold" data-aos="fade-down" data-aos-anchor="#layanan" data-aos-delay="300">Layanan</h1>
                </div>
            </div>
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-10 col-lg-6 item-layanan mb-3" data-aos="flip-down" data-aos-anchor="#layanan" data-aos-delay="600">
                    <div class="card bg-theme rounded-3">
                        <div class="card-body p-4 d-flex justify-content-center overflow-hidden">
                            <div class="bg-item" style="background-image: url('assets/img/distribution-image1.jpg');">

                            </div>
                            <div class="row item">
                                <div class="col-lg-4 d-flex justify-content-center align-self-center d-lg-inline-block">
                                    <img src="assets/img/van-01.png" alt="Transportation and Distribution"
                                        class="img-fluid">
                                </div>
                                <div class="col-lg-8 d-lg-flex py-2">
                                    <div class="row align-self-stretch">
                                        <div class="col-lg-12 align-self-center">
                                            <h2 class="section-title fw-bold text-center text-lg-start">Transportation and Distribution</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row link-cta justify-content-center">
                                <div class="col-lg-12">
                                    <a href="#" class="btn btn-outline-secondary btn-lg col-12 col-lg-12 text-white border-white border-2 rounded-0">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-lg-6 item-layanan mb-3"  data-aos="flip-down" data-aos-anchor="#layanan" data-aos-delay="900">
                    <div class="card bg-theme rounded-3">
                        <div class="card-body p-4 d-flex justify-content-center">
                            <div class="bg-item" style="background-image: url('assets/img/supply.jpg');">

                            </div>
                            <div class="row item">
                                <div class="col-lg-4 d-flex justify-content-center align-self-center d-lg-inline-block">
                                    <img src="assets/img/supply chain-01.png" alt="Transportation and Distribution"
                                        class="img-fluid">
                                </div>
                                <div class="col-lg-8 d-lg-flex py-2">
                                    <div class="row align-self-stretch">
                                        <div class="col-lg-12 align-self-center">
                                            <h2 class="section-title fw-bold text-center text-lg-start">Supply Chain, Warehouse, Aggregator Last Mile Delivery</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row link-cta justify-content-center">
                                <div class="col-lg-12">
                                    <a href="#" class="btn btn-outline-secondary btn-lg col-12 col-lg-12 text-white border-white border-2 rounded-0">Coming Soon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-team" class="bg-theme">
        <div class="container py-5">
            <div class="row" data-aos="fade-up">
                <div class="col">
                    <h1 class="text-center section-title fw-bold">Our Team</h1>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 mb-3" data-aos="zoom-out" data-aos-anchor="#our-team">
                    <div class="card bg-theme border-0 shadow rounded-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="profile-picture">
                                    <img src="assets/img/arief-s.jpg" alt="Arief Setiawan" class="w-100 rounded-3">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10 bio rounded-3 py-4 px-2 bg-theme text-center shadow-sm" data-aos="fade-up" data-aos-anchor="#our-team" data-aos-delay="300">
                                    <h4 class="text-center fw-bold text-center ff-open-sans"  data-aos="fade-up" data-aos-anchor="#our-team" data-aos-delay="600">Arief Setiawan</h4>
                                    <h4 class="text-center text-center mb-3"  data-aos="fade-up" data-aos-anchor="#our-team" data-aos-delay="900">Founder</h4>
                                    <span class="fs-3">
                                        <a href="https://www.linkedin.com/in/arief-setiawan-7a72596b/" target="_blank" class="rounded-circle bg-white text-theme pt-2 px-2 pb-1 border border-1 border-white mx-2" data-aos="fade-in" data-aos-anchor="#our-team" data-aos-delay="1200"><i class="fab fa-linkedin fa-fw"></i></a>
                                        <a href="https://wa.me/6281296481817?text=halo" target="_blank" class="rounded-circle bg-white text-theme pt-2 px-2 pb-1 border border-1 border-white"  data-aos="fade-in" data-aos-anchor="#our-team" data-aos-delay="1500"><i class="fab fa-whatsapp fa-fw"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="zoom-out" data-aos-anchor="#our-team">
                    <div class="card bg-theme border-0 shadow rounded-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="profile-picture">
                                    <img src="assets/img/wendra-hs.jpg" alt="Arief Setiawan" class="w-100 rounded-3">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10 bio rounded-3 py-4 px-2 bg-theme text-center shadow-sm" data-aos="fade-up" data-aos-anchor="#our-team" data-aos-delay="300">
                                    <h4 class="text-center fw-bold text-center ff-open-sans"  data-aos="fade-up" data-aos-anchor="#our-team" data-aos-delay="600">Wendra Hedi Sucipto</h4>
                                    <h4 class="text-center text-center mb-3"  data-aos="fade-up" data-aos-anchor="#our-team" data-aos-delay="900">Co-Founder</h4>
                                    <span class="fs-3">
                                        <a href="https://www.linkedin.com/in/wendra-hedi-sucipto-5a0386147/" target="_blank" class="rounded-circle bg-white text-theme pt-2 px-2 pb-1 border border-1 border-white mx-2" data-aos="fade-in" data-aos-anchor="#our-team" data-aos-delay="1200"><i class="fab fa-linkedin fa-fw"></i></a>
                                        <a href="https://wa.me/6281339314904?text=halo" target="_blank" class="rounded-circle bg-white text-theme pt-2 px-2 pb-1 border border-1 border-white"  data-aos="fade-in" data-aos-anchor="#our-team" data-aos-delay="1500"><i class="fab fa-whatsapp fa-fw"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partnership">
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="section-title text-white fw-bold text-center" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">Our Partner</h1>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-6 col-sm-4 col-lg-2 d-flex align-items-center" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500">
                    <img src="assets/img/deliveree.svg" alt="deliveree" class="w-100" >
                </div>
                <div class="col-6 col-sm-4 col-lg-2 d-flex align-items-center" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="1000">
                    <img src="assets/img/tsi.svg" alt="tanisupply" class="w-100" >
                </div>
            </div>
        </div>
    </section>
    <section id="kontak-kami" class="bg-theme">
        <div class="container py-5">
            <div class="row" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="col">
                    <h1 class="section-title text-center fw-bold text-white">Kontak Kami</h1>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    @if (session('mailSent'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('mailSent') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    <form class="row g-3" method="post" action="">
                        @csrf
                        <div class="col-12" data-aos="fade-right" data-aos-anchor="#kontak-kami" data-aos-delay="100">
                            <label for="fullname" class="form-label text-white">Full Name (Required)</label>
                            <input type="text" name="fullname" class="form-control @error('fullname')
                                is-invalid
                            @enderror" id="fullname" placeholder="John Doe" value="{{ old('fullname') }}">
                            @error('fullname')
                                <div class="invalidFeedback fs-6">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12" data-aos="fade-right" data-aos-anchor="#kontak-kami" data-aos-delay="200">
                            <label for="email" class="form-label text-white">Email (Required)</label>
                            <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                            @enderror" id="email" placeholder="john@example.net" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalidFeedback fs-6">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>
                        <div class="col-12" data-aos="fade-right" data-aos-anchor="#kontak-kami" data-aos-delay="250">
                            <label for="subject" class="form-label text-white">Subject (Required)</label>
                            <input type="text" name="subject" class="form-control @error('subject')
                            is-invalid
                            @enderror" id="subject" value="{{ old('subject') }}">
                            @error('subject')
                                <div class="invalidFeedback fs-6">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>
                        <div class="col-12" data-aos="fade-right" data-aos-anchor="#kontak-kami" data-aos-delay="300">
                            <label for="message" class="form-label text-white">Message (Required)</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control @error('message')
                            is-invalid
                            @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalidFeedback fs-6">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 g-captcha">
                            {!! RecaptchaV3::field('/') !!}
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-anchor="#kontak-kami" data-aos-delay="400">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="footer" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center mb-3 mb-lg-0">
                    <img src="assets/img/transporter logo-01.png" alt="Transporter Logo" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <h5 class="text-white fw-bold mb-4">Get in Touch</h5>
                    <ul>
                        <li class="text-white mb-3">Jl. Kencana Suci No.2 Perum Duta Kencana 1, Kel. Curug Mekar, Kec. Bogor Barat, Kota Bogor, Jawa Barat, Indonesia.</li>
                        <li class="text-white mb-3"><i class="fas fa-phone-alt"></i> <a href="tel:08118303131" class="text-white text-decoration-none">081 1830 3131</a></li>
                    </ul>
                </div>
                <div class="col-md-2 offset-lg-1">
                    <h5 class="text-white fw-bold mb-4">Menu</h5>
                    <ul class="text-white">
                        <li><a href="#home" class="text-white text-decoration-none d-block py-1 px-2">Home</a></li>
                        <li><a href="#tentang-kami" class="text-white text-decoration-none d-block py-1 px-2">Tentang Kami</a></li>
                        <li><a href="#layanan" class="text-white text-decoration-none d-block py-1 px-2">Layanan</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1 px-2">Berita</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="fs-4 text-center">
                        <a href="https://instagram.com/we.transporter_id" target="_blank" class="rounded-circle bg-white text-theme pt-1 px-1 pb-0 border border-1 border-white me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="@we.transporter_id" data-aos-anchor="#kontak-kami" data-aos-delay="1400"><i class="fab fa-fw fa-instagram"></i></a>
                        <a href="https://wa.me/628118303131?text=halo" target="_blank" class="rounded-circle bg-white text-theme pt-1 px-1 pb-0 border border-1 border-white" data-aos-anchor="#kontak-kami" data-aos-delay="1400"><i class="fab fa-whatsapp fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center p-3">
        <span class="text-white">Copyright Transporter 2021 | All Right Reserved</span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>