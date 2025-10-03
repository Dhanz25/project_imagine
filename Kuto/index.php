<?php
$conn = new mysqli("localhost", "root", "", "db_kuliner") or die("Koneksi gagal: " . $conn->connect_error);
$sql = "SELECT * FROM tempat_kuliner";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuto - Kulineran Purwokerto</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="logo">
            <a href=""><img src="images/logo.png" alt="Logo Kuto" />
                <span class="text">Kuto</span>
            </a> <!-- Logo KUTO -->
        </div>
        <div class="nav-menu" id="nav-menu">
            <div class="content">
                <a href="#beranda" class="nav-list active-menu">Beranda</a>
                <a href="#tentang-kami" class="nav-list">Tentang</a>
                <a href="#produk" class="nav-list">Kulineran</a>
            </div>

        </div>
        <div class="responsive-button">
            <div class="hamburger-menu" onclick="showMenuNav()" id="hamburger-menu">
                <i class="bi bi-list"></i>
            </div>
            <div class="close-menu" onclick="hideMenuNav()" id="close-menu">
                <i class="bi bi-x"></i>
            </div>
        </div>


    </nav>

    <!-- home section start -->
    <section class="hero" id="beranda">
        <div class="hero-bg"></div>
        <main class="content">
            <span class="badge">
                Kuliner Purwokerto
            </span>
            <h1>
                Cari Kuliner Favoritmu
                <br>
                di Purwokerto, Yuk!
            </h1>
            <p>
                "Lapar atau lagi cari tempat nongkrong? Yuk, jelajahi rekomendasi kuliner Purwokerto yang pasti bikin kamu ketagihan!"
            </p>
            <div class="btn-hero">
                <a href="#produk" class="btn-primary">Lihat Rekomendasi</a>
            </div>
        </main>
    </section>

    <!-- about section start -->
    <section class="about" id="tentang-kami">
        <main class="row-about">
            <div class="left-about">
                <img src="images/kuliner.png" alt="" />
            </div>
            <div class="right-about">
                <div class="right-about">
                    <span class="badge">Tentang Kami</span>
                    <h2>
                        <span class="color-span">Menelusuri</span> Jalan, Menikmati <span class="color-span">Rasa</span>, Mengenal
                        <span class="color-span">Purwokerto</span> Lewat Setiap Lauk
                    </h2>
                    <p>
                        Purwokerto memiliki kekayaan kuliner yang beragam dan sarat dengan cita rasa istimewa. Mulai dari warung kaki lima hingga restoran kekinian, setiap tempat menyimpan cerita melalui hidangannya. Lewat Kuto, kami hadir untuk membantumu menjelajahi aneka kuliner pilihan, mengenal berbagai rasa khas, sekaligus merasakan kehangatan suasana Banyumas. Rekomendasi yang kami bagikan diharapkan mampu memberikan pengalaman kuliner yang bukan hanya memuaskan perut, tetapi juga meninggalkan kesan dan kenangan yang mendalam.
                    </p>
                    <p>
                        Tak hanya itu, kami meyakini bahwa kuliner merupakan bagian penting dari budaya yang harus dijaga keberadaannya. Setiap masakan menyimpan cerita—baik dari resep turun-temurun maupun kreasi baru anak muda Purwokerto. Dengan mencicipi kuliner lokal, kamu tidak sekadar menikmati makanan, melainkan juga menyelami nilai, tradisi, serta keramahan masyarakatnya. Inilah alasan Kuto hadir, untuk menemanimu mengenal Purwokerto lebih dekat lewat pengalaman kuliner yang otentik, hangat, dan penuh arti.
                    </p>
                    <div class="qoute">
                        <div class="color-span">
                            <i class="bi bi-quote"></i>
                        </div>
                        <h4>
                            Berbagai Rekomendasi<span class="color-span"> Kulineran di Purwokerto</span>
                        </h4>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- product section -->
    <section class="product" id="produk">
        <div class="header-title mb-4">
            <div class="count">
                <h2><span class="color-span">Kulineran</span> Purwokerto</h2>
            </div>
            <input type="search" name="search" id="search" autocomplete="off" placeholder="Cari Tempat Kuliner.." />
        </div>


        <div class="row-product">
            <?php
            $i = 0;
            while ($data = mysqli_fetch_array($query)) {
                $i++;
                $gambarUtama = explode(",", $data['gambar'])[0];
                $gambarArray = explode(",", $data['gambar']);
            ?>
                <div class="col-product card-item <?php if ($i > 8) echo 'hidden'; ?>">
                    <div class="d-img">
                        <img src="images/<?= $gambarUtama; ?>" alt="" />
                        <div class="overlay">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['id_tempat']; ?>">
                                Detail Lokasi
                            </button>
                        </div>
                    </div>
                    <div class="description">
                        <div class="d-desc">
                            <span><?= $data['kategori']; ?></span>
                            <h3 class="title">
                                <?= $data['nama_tempat']; ?>
                            </h3>
                            <p><?= substr($data['deskripsi'], 0, 170); ?>...</p>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal<?= $data['id_tempat']; ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">


                                <div class="modal-header">
                                    <h5 class="modal-title">Detail Lokasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <!-- Body -->
                                <div class="modal-body d-flex gap-3 p-5">

                                    <!-- Kiri Slideshow -->
                                    <div class="modal-left w-50 h-100">
                                        <div id="carouselExample<?= $data['id_tempat']; ?>" class="carousel slide h-100" data-bs-ride="carousel">
                                            <div class="carousel-inner h-100">
                                                <?php foreach ($gambarArray as $index => $gambar): ?>
                                                    <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?> h-100">
                                                        <img src="images/<?= trim($gambar); ?>"
                                                            class="d-block w-100 h-100 object-fit-cover rounded"
                                                            alt="Slide <?= $index + 1 ?>">
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>

                                            <!-- Tombol Navigasi -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample<?= $data['id_tempat']; ?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample<?= $data['id_tempat']; ?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Teks Kanan -->
                                    <div class="modal-right w-50 ps-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                                            <h5 class="fw-bold mb-0"><?= $data['nama_tempat']; ?></h5>
                                            <a href="<?= $data['link_maps']; ?>" class="btn-icon" target="blank"><i class="bi bi-geo-alt-fill"></i></a>
                                        </div>
                                        <p><?= $data['alamat']; ?></p>
                                        <div class="d-flex gap-1 mb-1">
                                            <p>Buka Mulai Jam : </p>
                                            <p class="fw-bold"> <?= date('H:i', strtotime($data['jam_buka'])); ?> - <?= date('H:i', strtotime($data['jam_tutup'])); ?></p>
                                        </div>
                                        <p class="text-justify"><?= $data['deskripsi']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="all-product">
            <a href="#" class="text-decoration-none" id="toggleBtn"><span>Selengkapnya</span></a>
        </div>

    </section>

    <!-- footer section -->
    <section class="footer" id="footer">
        <footer class="container-footer">
            <div class="row-footer">
                <div class="up-footer">

                    <div class="left-footer">
                        <img src="images/logo.png" alt="Logo Kuto" />
                        <p>
                            Kuto hadir untuk menemanimu menjelajahi
                            <span class="color-span">kuliner </span>khas <span class="color-span">Purwokerto</span>,
                            menikmati cita rasa istimewa, sekaligus merasakan kehangatan budaya Banyumas.
                        </p>

                        <div class="social-media">
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-youtube"></i></a>
                            <a href=""><i class="bi bi-tiktok"></i></a>
                        </div>
                    </div>

                    <div class="right-footer">

                        <div class="footer-col">
                            <div class="footer-col-title">
                                <h2>Galeri</h2>
                            </div>
                            <div class="footer-col-img">
                                <img src="images/bakso sami asih.jpg" alt="" />
                                <img src="images/bakso pekih.jpg" alt="" />
                                <img src="images/bakso sami asih1.jpg" alt="" />
                                <img src="images/Es Cream & Coffe Brazil.jpeg" alt="" />
                                <img src="images/Es Duren Pak Kasdi.jpg" alt="" />
                                <img src="images/gubug mang engking.jpg" alt="" />
                            </div>
                        </div>

                        <div class="footer-col">
                            <div class="footer-col-title">
                                <h2>Kerja Sama</h2>
                            </div>
                            <div class="footer-col-cooperation">
                                <div class="footer-col-cooperation-description">
                                    <p>Hubungi Kami untuk menjalin kerja sama , Dengan cara kirim email anda melalui form dibawah</p>
                                </div>
                                <div class="footer-col-cooperation-form">
                                    <form action="">
                                        <input type="email" name="email" id="email" placeholder="Masukan Email" />
                                        <div class="btn-submit">
                                            <input type="submit" value="Kirim" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-footer">
                    <div class="copyright">

                        <p>
                            &copy; <span id="year_copyright"></span>
                            <span class="color-span">Kuto</span>. | All Rights Reserved
                        </p>
                    </div>
                    <div class="menu-footer">
                        <a href="#beranda">Beranda</a>
                        <a href="#tentang-kami">Tentang Kami</a>
                        <a href="#produk">Kulineran</a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="js/script.js"></script>

</body>

</html>