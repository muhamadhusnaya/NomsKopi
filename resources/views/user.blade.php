<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NomsKopi</title>
    {{-- Menyertakan Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- link untuk import icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .text-justify {
            text-align: justify;
        }
    </style>
</head>
<body>
    {{-- header mulai --}}
    <header class="sticky-top bg-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center">
                    <img class="logo" src="https://www.shutterstock.com/image-vector/coffee-cup-silhouette-icon-tea-600nw-2510255461.jpg" alt="Logo NomsKopi" style="width: 40px; height: auto; margin-right: 10px;">
                    <h2 class="text-warning m-0"><b>NomsKopi</b></h2>
                </div>

                {{-- Toggle menu pada tampilan mobile --}}
                <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>

                {{-- Navigasi pada mobile (kolom) dan desktop (baris) --}}
                <div class="collapse navbar-collapse d-md-flex" id="navbarNav">
                    <ul class="navbar-nav ms-auto d-flex flex-column flex-md-row">
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#tentangKami">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
    </header>
    {{-- header selesai --}}

    {{-- beranda mulai --}}
    <main id="beranda">
        {{-- Carousel agar dapat bergeser --}}
        <div id="carouselExampleAutoplay" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner p-4">
                <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQJRoz8xYNZ1saVMWpmdnTiahVBtQ5zOaGQ&s" class="d-block w-100" alt="Gambar 1">
                </div>
                <div class="carousel-item">
                    <img src="https://media.suara.com/pictures/970x544/2022/11/03/75622-kode-promo-airasia-super-app-indonesia.jpg" class="d-block w-100" alt="Gambar 2">
                </div>
                <div class="carousel-item">
                    <img src="https://jabarekspres.com/wp-content/uploads/2022/09/kode-promo-gojek.jpg" class="d-block w-100" alt="Gambar 3">
                </div>
            </div>
            {{-- Tombol Navigasi (Previous dan Next) --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplay" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplay" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    {{-- beranda selesai --}}

    {{-- menu mulai --}}
    <section id="menu" class="text-center py-5">
        <div class="container">
            <h2 class="text-uppercase"><b>menu terlaris</b></h2>
            <div class="row">
                {{-- Card 1 --}}
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUIhGE2AtY3HLQHeQWcT6BVSaw4d-SIFR-g&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">kopi klotok</h5>
                            <p class="card-text"><b>Rp 15.000</b></p>
                            <button class="btn" style="background-color: #FFA500; border-color: #FFA500;" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUIhGE2AtY3HLQHeQWcT6BVSaw4d-SIFR-g&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">kopi klotok</h5>
                            <p class="card-text"><b>Rp 15.000</b></p>
                            <button class="btn" style="background-color: #FFA500; border-color: #FFA500;" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUIhGE2AtY3HLQHeQWcT6BVSaw4d-SIFR-g&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">kopi klotok</h5>
                            <p class="card-text"><b>Rp 15.000</b></p>
                            <button class="btn" style="background-color: #FFA500; border-color: #FFA500;" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUIhGE2AtY3HLQHeQWcT6BVSaw4d-SIFR-g&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">kopi klotok</h5>
                            <p class="card-text"><b>Rp 15.000</b></p>
                            <button class="btn" style="background-color: #FFA500; border-color: #FFA500;" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>

                {{-- Card 5 --}}
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUIhGE2AtY3HLQHeQWcT6BVSaw4d-SIFR-g&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">kopi klotok</h5>
                            <p class="card-text"><b>Rp 15.000</b></p>
                            <button class="btn" style="background-color: #FFA500; border-color: #FFA500;" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>

                {{-- Card 6 --}}
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUIhGE2AtY3HLQHeQWcT6BVSaw4d-SIFR-g&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">kopi klotok</h5>
                            <p class="card-text"><b>Rp 15.000</b></p>
                            <button class="btn" style="background-color: #FFA500; border-color: #FFA500;" data-bs-toggle="modal" data-bs-target="#orderModal">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="btn" style="background-color: #FFA500; border-color: #FFA500;"><a class="text-decoration-none text-black" href="menu">Selengkapnya</a></button>
            </div>
        </div>
    </section>
    {{-- menu selesai --}}

    {{-- Modal untuk Pesan --}}
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog position-fixed bottom-0 start-0 end-0 mb-0">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- ini nanti bukan detail pesanan tapi ngambil data nama menu nya, misal menu yg dipilih es kopi, tulisan detail pesanan nanti bakal jadi es --}}
                    <h5 class="modal-title" id="orderModalLabel">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div>
                            <input type="checkbox"> Pedas
                            <input type="checkbox"> Sedang
                            <input type="checkbox"> Tidak Pedas
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button" id="minusButton">
                                <i class="bi bi-dash"></i>
                            </button>
                            <span class="input-group-text" id="jumlahText" style="width: 50px; text-align: center;">0</span>
                            <button class="btn btn-outline-secondary" type="button" id="plusButton">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Pesan</button>
                </div>
            </div>
        </div>
    </div>

    {{-- tentang kami mulai --}}
    <section id="tentangKami" class="p-4 bg-black text-white rounded-4">
        <div class="container">
            <h2 class="text-center">TENTANG NOMSKOPI</h2>
            <p class="text-justify">
                <b>Noms Kopi</b> didirikan pada tahun 2017 di Semarang oleh Vinsensius Agrin Prakoso,
                adalah kedai kopi yang namanya berasal dari akronim <i>"Ngopi Ora Mung Sedelok"</i> yang berarti
                <i>"ngopi tidak hanya sebentar"</i>. Dengan sembilan cabang di Semarang dan pabrik pengolahan biji kopi di Cepu,
                Noms Kopi menawarkan produk unggulan seperti <b>Kopi Klotok</b>, yang terkenal dengan cita rasa otentiknya.
                Noms Kopi mengedepankan pengalaman menikmati kopi yang berkualitas dalam suasana yang nyaman,
                serta menerapkan strategi kemitraan dan franchise untuk memperluas jaringan sambil menjaga kualitas produk dan layanan.
            </p>
            <div class="mt-4 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13242.13223187708!2d110.4467569!3d-6.9781636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708cb59286517b%3A0xb3bd03b5a5359d3c!2sNoms%20Kopi!5e1!3m2!1sid!2sid!4v1735178450291!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="d-flex justify-content-center p-4">
                <a href="https://www.instagram.com/nomskopi?igsh=d28xaGkybWJqandt" target="_blank" class="text-decoration-none mx-2">
                    <i class="bi bi-instagram fs-4 fs-sm-3 fs-md-2 text-warning"> Instagram</i>
                </a>
                <a href="https://www.tiktok.com/@nomskopi?_t=8sVx1zrjfM7&_r=1" target="_blank" class="text-decoration-none mx-2">
                    <i class="bi bi-tiktok fs-4 fs-sm-3 fs-md-2 text-warning"> TikTok</i>
                </a>
            </div>
        </div>
    </section>
    {{-- tentang kami selesai --}}

    {{-- footer mulai --}}
    <footer class="py-3 bg-light text-center">
        <p>&copy; <b>2017 NomsKopi</b></p>
    </footer>
    {{-- footer selesai --}}

    {{-- Menyertakan Bootstrap JS dan Popper.js (untuk fitur Bootstrap yang lebih interaktif) --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // script untuk menutup menu jika mengklik di luar dropdown
        document.addEventListener('click', function(event) {
            const navbar = document.getElementById('navbarNav');
            const navbarToggler = document.querySelector('.navbar-toggler');

            // jika klik di luar navbar dan menu sedang terbuka, maka tutup menu
            if (!navbar.contains(event.target) && !navbarToggler.contains(event.target) && navbar.classList.contains('show')) {
                const collapse = new bootstrap.Collapse(navbar, {
                    toggle: false
                });
                collapse.hide();
            }
        });

        // script untuk jumlah pesanan
        const jumlahText = document.getElementById('jumlahText');
        const minusButton = document.getElementById('minusButton');
        const plusButton = document.getElementById('plusButton');

        let jumlah = 0;

        minusButton.addEventListener('click', () => {
            if (jumlah > 0) {
                jumlah--;
                jumlahText.textContent = jumlah;
            }
        });

        plusButton.addEventListener('click', () => {
            jumlah++;
            jumlahText.textContent = jumlah;
        });
    </script>
</body>
</html>
