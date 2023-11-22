<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/index-ampelona.css">
</head>

<body>
	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="<?= base_url() ?>" class="logo" style="letter-spacing: 1px;">
							<img src="<?= base_url() ?>public/assets/images/logo-dh.png"
								style="width:40px;margin-right:10px;">
							Deprina Hotel's
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="scroll-to-section"><a href="#top" class="active"></a></li>
							<li class="scroll-to-section"><a href="#about">Tentang Kami</a></li>
							<li class="scroll-to-section"><a href="#pesan">Pesan</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->
    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <h3 class="text-center mb-0">Deprina Hotel's</h3>
            <h1 class="text-center text-primary mb-3" style="margin-top:-20px;">__</h1>
            <p class="text-center ">Deprina Hotels adalah destinasi penginapan yang menghadirkan pengalaman istimewa dan mewah bagi para tamu. Terletak strategis di pusat kota, hotel ini menawarkan kenyamanan modern, fasilitas terkini, dan pelayanan ramah yang akan membuat setiap kunjungan tak terlupakan. Dengan desain interior yang elegan, kamar-kamar yang nyaman, dan berbagai pilihan restoran yang menggoda selera, Deprina Hotels menjadi pilihan utama bagi wisatawan dan pelancong bisnis. Dengan komitmen untuk memberikan layanan berkualitas tinggi, Deprina Hotels mengundang tamu untuk merasakan kehangatan dan kemewahan selama menginap, menciptakan pengalaman penginapan yang tak tertandingi.</p>
            <br><br>
            <div class="row">
                <div class="col text-center">
                    <h5>Alamat</h5>
                    <hr>
                    <p>Jl. Pejambon I No.6E, RT.15/RW.1, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
                </div>
                <!-- <div class="col-2"></div> -->
                <div class="col text-center">
                    <h5>Informasi Kontak</h5>
                    <hr>
                    <p>No Telp : 0838-7306-2600</p>
                    <p>Email : office@deprina-hotels.co.id</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
	<!-- ***** Features Small Start ***** -->
	<section class="section home-feature" id="tipe">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="label-ampelona text-center text-white" style="margin-bottom: 500px; margin-top: -310px">
						<h1>Selamat Datang Di Deprina Hotel's</h1><br>
						<span>Kepuasan Anda Adalah Prioritas Kami</span>
					</div>
					<div class="row">
						<!-- ***** Features Small Item Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-6 col-12"
							data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
							<div class="features-small-item">
								<div class="icon" onClick="showStandard()">
									<i><img src="<?= base_url() ?>public/assets/images/hotels/st-1.jpg" alt=""></i>
								</div>
								<h5 class="features-title">Standard</h5>
								<p>Terjangkau dan Nyaman</p>
								<hr>
								<div class="row">
									<ul class="list-group list-group-flush text-start col">
										<li class="mb-2">Luas Kamar 28.5 m²</li>
										<li class="mb-2">WiFi Gratis</li>
										<li class="mb-2">Bebas Rokok</li>
										<li class="mb-2">Pembuat Kopi/Teh</li>
									</ul>
									<ul class="list-group list-group-flush text-start col">
										<li class="mb-2">Air Container</li>
										<li class="mb-2">Televisi</li>
										<li class="mb-2">2 Tamu</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- ***** Features Small Item End ***** -->

						<!-- ***** Features Small Item Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-6 col-12"
							data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
							<div class="features-small-item">
								<div class="icon" onClick="showDeluxe()">
									<i><img src="<?= base_url() ?>public/assets/images/hotels/dx-1.jpg" alt=""></i>
								</div>
								<h5 class="features-title">Deluxe</h5>
								<p>Kemewahan yang Terjangkau</p>
								<hr>
								<div class="row">
									<ul class="list-group list-group-flush text-start col">
										<li class="mb-2">Luas Kamar 30.5 m²</li>
										<li class="mb-2">WiFi Gratis</li>
										<li class="mb-2">Bebas Rokok</li>
										<li class="mb-2">Pembuat Kopi/Teh</li>
									</ul>
									<ul class="list-group list-group-flush text-start col">
										<li class="mb-2">Air Container</li>
										<li class="mb-2">Televisi</li>
										<li class="mb-2">Hair dryer</li>
										<li class="mb-2">4 Tamu</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- ***** Features Small Item End ***** -->

						<!-- ***** Features Small Item Start ***** -->
						<div class="col-lg-4 col-md-6 col-sm-6 col-12"
							data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
							<div class="features-small-item">
								<div class="icon" onClick="showExecutive()">
									<i><img src="<?= base_url() ?>public/assets/images/hotels/ex-1.jpg" alt=""></i>
								</div>
								<h5 class="features-title">Executive</h5>
								<p>Eksklusif dan Mewah</p>
								<hr>
								<div class="row">
									<ul class="list-group list-group-flush text-start col">
										<li class="mb-2">Luas Kamar 65.8 m²</li>
										<li class="mb-2">WiFi Gratis</li>
										<li class="mb-2">Bebas Rokok</li>
										<li class="mb-2">Pembuat Kopi/Teh</li>
									</ul>
									<ul class="list-group list-group-flush text-start col">
										<li class="mb-2">Air Container</li>
										<li class="mb-2">Televisi & Hair dryer</li>
										<li class="mb-2">Brankas dalam kamar</li>
										<li class="mb-2">Minibar</li>
										<li class="mb-2">6-8 Tamu</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- ***** Features Small Item End ***** -->
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="section" id="pesan">
	<div class="container">
		<form id="addPesanan">
			<h2>Pesan Kamar</h2><br>
			<div class="mb-2">
				<div class="row g-2">
					<div class="col-md">
						<div class="form-floating">
							<input type="text" class="form-control" id="nama-pemesan" maxlength="50"
								placeholder="Masukan Nama Lengkap">
							<label for="nama-pemesan">Nama Pemesan</label>
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
							<select class="form-select" id="jenis-kelamin" aria-label="jenis-kelamin">
								<option hidden>Pilih Jenis Kelamin</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<label for="jenis-kelamin">Jenis Kelamin</label>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-2">
				<div class="row g-2">
					<div class="col-md">
						<div class="form-floating">
							<input type="text" class="form-control" id="no-id" maxlength="16" placeholder="Masukan NIK/Paspor">
							<label for="no-id">No Identitas (NIK/Paspor)</label>
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
							<select class="form-select" id="tipe-kamar" aria-label="Floating label select example">
								<option hidden>Pilih Tipe kamar</option>
								<option value="Standard">Standard (Rp 500.000)</option>
								<option value="Deluxe">Deluxe (Rp 750.000)</option>
								<option value="Executive">Executive (Rp 1.200.000)</option>
							</select>
							<label for="tipe-kamar">Tipe Kamar</label>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-2">
				<div class="row g-2">
					<div class="col-md">
						<div class="form-floating">
							<input type="date" class="form-control" id="tanggal-pesan">
							<label for="tanggal-pesan">Tanggal Pesan</label>
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
							<input type="number" class="form-control" id="durasi" placeholder="Masukan Durasi Hari">
							<label for="durasi">Durasi Menginap</label>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-2">
				<div class="row g-2">
					<div class="col-md">
						<div class="form-floating">
							<select class="form-select" id="sarapan" aria-label="Floating label select example">
								<option hidden>Termasuk Sarapan ?</option>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
							</select>
							<label for="sarapan">Sarapan</label>
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
							<input type="text" class="form-control" id="total-bayar" value="0" readonly>
							<label for="total-bayar">Total Bayar</label>
						</div>
					</div>
				</div>
			</div>
            <div class="float-end">
                <a class="btn btn-secondary" onclick="hitungTotalBayar()">Hitung Total Bayar</a>
                <button type="reset" class="btn btn-secondary">Cancle</button>
                <button tye="submit" id="simpan-pesanan" class="btn btn-success" disabled>Simpan</button>
            </div>
        </form>
	</div>
    </section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xs-12">
					<div class="right-text-content">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/wargapurwasari/"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="https://www.youtube.com/@DPMDKABUPATENBOGOR"><i class="fa fa-youtube"></i></a>
							</li>
							<li><a href="https://www.instagram.com/explore/locations/375473852595523/balai-desa-purwasari-kpsetu-uncal-dramaga-bogor/"><i
										class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="logo text-light">
						<h2>Deprina Hotel's</h2>
					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="left-text-content">
						<p>©2023 Copyright Deprina Hotel's.
							<br>Design: TemplateMo</p>
					</div>
				</div>
			</div>
		</div>
	</footer>