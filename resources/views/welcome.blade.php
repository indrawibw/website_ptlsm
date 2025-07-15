<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Ladang Sawit Mas</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Start -->
    <Header>
        <nav>
            <div class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo PT. LSM" height="40">
            </div>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
            <ul class="nav-links">
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#produk">Produk</a></li>
                <li><a href="#berkelanjutan">Berkelanjutan</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li>
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                </li>
            </ul>
        </nav>
    </Header>
    <!-- Header Finish -->

    <!-- Main Start -->
    <main>
        <!-- hero cover PT -->
        <section class="hero-section">
            <div class="hero-content">
                <h1>PT. LADANG SAWIT MAS</h1>
                <p>"Berkomitmen pada Keberlanjutan dan Inovasi Industri Sawit"</p>
                <p>Sejak 2010, kami telah menjadi pelopor dalam produksi kelapa sawit berkelanjutan yang menggabungkan teknologi modern dengan tanggungjawab lingkungan</p>
                <a href="#tentang" class="cta-button">Pelajari Lebih Lanjut</a>
            </div>
        </section>

        <!-- section tentang -->
        <section id="tentang" class="show-on-scroll">
            <h2>Tentang Kami</h2>
            <div class="grid-2">
                <div>
                    <p>PT. Ladang Sawit Mas adalah perusahaan sawit yang berkomitmen pada keberlanjutan dan inovasi dalam setiap proses produksi. Kami menjunjung tinggi etika, kualitas, dan dampak positif terhadap lingkungan.</p>
                </div>
                <div>
                    <h3>Visi</h3>
                    <p>Menjadi perusahaan sawit terdepan yang berkelanjutan dan berdampak global.</p>
                    <h3>Misi</h3>
                    <ul>
                        <li>Mengelola sumber daya alam secara bertanggung jawab</li>
                        <li>Memberdayakan masyarakat sekitar</li>
                        <li>Menghasilkan produk berkualitas tinggi</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section Produk -->
        <Section id="produk" class="show-on-scroll">
            <h2>Produk</h2>
            <div class="produk-grid">
                <div class="produk-card">
                    <div class="produk-image-1">
                        <img src="{{ asset('assets/img/cpo3.jpg') }}" alt="Minyak CPO">
                    </div>
                    <div class="produk-content"></div>
                        <h3 class="produk-title">Minyak CPO</h3>
                        <p>Kami menyediakan minyak kelapa sawit mentah (Crude Palm Oil/CPO) berkualitas tinggi yang diperoleh dari proses ekstraksi tandan buah segar (TBS) kelapa sawit melalui sistem produksi yang higienis dan efisien. Produk CPO kami telah memenuhi standar industri dan menjadi bahan baku utama dalam sektor pangan, oleokimia, kosmetik, serta biodiesel.</p>
                        <ul class="produk-features">
                            <li>Kualitas terjamin dengan pengawasan mutu ketat</li>
                            <li>Kandungan asam lemak bebas (FFA) sesuai standar industri</li>
                            <li>Diproses secara ramah lingkungan</li>
                            <li>Siap memenuhi kebutuhan industri dalam dan luar negeri</li>
                            <li>Didukung pasokan bahan baku berkelanjutan</li>
                        </ul>
                </div>
                <div class="produk-card">
                    <div class="produk-image-2">
                        <img src="{{ asset('assets/img/kernel1.jpg') }}" alt="Kernel">
                    </div>
                    <div class="produk-content"></div>
                        <h3 class="produk-title">Kernel</h3>
                        <p>Minyak sawit inti (Palm Kernel Oil/PKO) merupakan hasil olahan dari inti biji kelapa sawit yang kami proses dengan standar industri tinggi untuk menghasilkan minyak dengan kualitas terbaik. PKO memiliki kandungan asam laurat tinggi dan banyak digunakan dalam industri makanan, kosmetik, sabun, serta produk olahan kimia lainnya. Produk kami hadir sebagai solusi bahan baku yang stabil, efisien, dan ramah lingkungan.</p>
                        <ul class="produk-features">
                            <li>Kadar asam laurat tinggi, ideal untuk industri sabun dan kosmetik</li>
                            <li>Warna cerah dan tingkat kejernihan tinggi</li>
                            <li>Proses produksi bersih dan berkelanjutan</li>
                            <li>Stabilitas oksidatif yang baik</li>
                            <li>Pasokan konsisten dengan kualitas terjaga</li>
                            <li>Cocok untuk kebutuhan lokal maupun ekspor</li>
                        </ul>
                </div>
                
            </div>
        </Section>

        <!-- Section Berkelanjutan -->
        <Section id="berkelanjutan" class="show-on-scroll">
            <h2>Berkelanjutan</h2>
            <div class="flex-2">
                <div class="img-berkelanjutan">
                    <img src="{{ asset('assets/img/berkelanjutan.jpg') }}" alt="berkelanjutan">
                </div>
                <div>
                    <h3>Bagaimana Kami Membuat Pertanian Berkelanjutan</h3>
                    <p>Kami mengimplementasikan praktik ramah lingkungan, efisiensi energi, dan pelestarian biodiversitas sebagai bagian dari komitmen keberlanjutan kami.</p>
                </div>
            </div>
        </Section>

        <!-- Section Galeri -->
        <section id="galeri" class="show-on-scroll">
            <h2>Galeri</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('assets/img/grading3.jpg') }}" alt="Galeri 1"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/cpo2.jpg') }}" alt="Galeri 2"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/grading1.jpg') }}" alt="Galeri 3"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/kernel1.jpg') }}" alt="Galeri 4"></div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        {{-- Section Layanan --}}
        <section id=layanan class="show-on-scroll">
            <h2>Layanan</h2>
            <h3>Penerimaan Buah Sawit Dari Masyarakat</h3>
            <p>
                PT. Ladang Sawit Mas menyediakan layanan penerimaan Tandan Buah Segar (TBS) dari 
                petani dan masyarakat sekitar sebagai bagian dari program kemitraan dan pemberdayaan lokal. 
                Kami berkomitmen untuk menjalin hubungan yang saling menguntungkan antara perusahaan dan petani mitra.
            </p>
            <h3>Fitur Layanan</h3>
            <ul>
                <li>Penimbangan buah sawit secara adil dan transparan</li>
                <li>Pembayaran yang cepat dan akurat</li>
                <li>Kemitraan terbuka untuk petani baru</li>
                <li>Edukasi teknis terkait kualitas TBS</li>
            </ul>
        </section>

        <!-- Section kontak -->
        <section id="kontak" class="show-on-scroll">
         <h2>Kontak Kami</h2>
         <p>Email: info@sawomit.com<br>Telp: +62 812-3456-7890</p>
         <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.0054699955376!2d110.34924687472497!3d-1.556869298428573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e04581405626463%3A0x1e0c4c1ae5e670ca!2sPT%20Ladang%20Sawit%20Mas%20(BGA%20Group)!5e1!3m2!1sid!2sid!4v1751034805130!5m2!1sid!2sid" 
            width="100%" height="300" style="border:0; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);" allowfullscreen="" loading="lazy">
            </iframe>
         </div>
         <h3>Hubungi Kami</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

         <div class="form">
            <form action="{{ route('kerjasama.store') }}" method="POST">
                @csrf
                <input type="text" name="nama" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="pesan" placeholder="Pesan" required></textarea>
                <button type="submit">Kirim</button>
            </form>
         </div>

        </section>
    </main>
    <!-- Main Finish -->

    <!-- Footer Start -->
    <footer>
        <p>&copy; 2025 PT.LSM - All rights reserved</p>
    </footer>
    <!-- Footer Finish -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>