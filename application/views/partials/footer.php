<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="<?= base_url() ?>public/assets/js/jquery-2.1.0.min.js"></script>
<script src="<?= base_url() ?>public/vendor/sweetalert/sweetalert2.min.js"></script>

<!-- Bootstrap -->
<script src="<?= base_url() ?>public/assets/js/popper.js"></script>
<script src="<?= base_url() ?>public/vendor/bootstrap-5/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="<?= base_url() ?>public/assets/js/owl-carousel.js"></script>
<script src="<?= base_url() ?>public/assets/js/accordions.js"></script>
<script src="<?= base_url() ?>public/assets/js/datepicker.js"></script>
<script src="<?= base_url() ?>public/assets/js/scrollreveal.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/imgfix.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/slick.js"></script>
<script src="<?= base_url() ?>public/assets/js/lightbox.js"></script>
<script src="<?= base_url() ?>public/assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="<?= base_url() ?>public/assets/js/custom.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
      // Mendapatkan elemen input tanggal
      var dateInput = document.getElementById('tanggal-pesan');

      // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
      var today = new Date().toISOString().split('T')[0];

      // Menetapkan atribut min pada elemen input tanggal
      dateInput.setAttribute('min', today);

      // Menambahkan event listener untuk mengaktifkan atau menonaktifkan elemen tanggal
      dateInput.addEventListener('input', function() {
        // Mendapatkan tanggal yang dipilih oleh pengguna
        var selectedDate = dateInput.value;

        // Membandingkan tanggal yang dipilih dengan tanggal hari ini
        if (selectedDate < today) {
          // Jika tanggal yang dipilih lebih kecil dari tanggal hari ini, menonaktifkan elemen input tanggal
          dateInput.setAttribute('disabled', 'true');
        } else {
          // Jika tanggal yang dipilih setidaknya sama dengan tanggal hari ini, mengaktifkan elemen input tanggal
          dateInput.removeAttribute('disabled');
        }
      });
    });

	$(function () {
		var selectedClass = "";
		$("p").click(function () {
			selectedClass = $(this).attr("data-rel");
			$("#portfolio").fadeTo(50, 0.1);
			$("#portfolio div").not("." + selectedClass).fadeOut();
			setTimeout(function () {
				$("." + selectedClass).fadeIn();
				$("#portfolio").fadeTo(50, 1);
			}, 500);

		});
	});

	function showStandard() {
		swal({
			html: '<h3>Standard</h3><br>' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/st-1.jpg" alt="Smiley face" height="150" width="220" style="margin-right:10px;">' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/st-2.jpg" alt="Smiley face" height="150" width="220">'
		});
	}

	function showDeluxe() {
		swal({
			html: '<h3>Deluxe</h3><br>' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/dx-1.jpg" alt="Smiley face" height="150" width="220" style="margin-right:10px;">' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/dx-2.jpg" alt="Smiley face" height="150" width="220">'
		});
	}

	function showExecutive() {
		swal({
			html: '<h3>Exceutive</h3><br>' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/ex-1.jpg" alt="Smiley face" height="150" width="220" style="margin-right:10px;">' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/ex-2.jpg" alt="Smiley face" height="150" width="220">' +
				'<img src="http://localhost/deprina-hotels/public/assets/images/hotels/ex-3.jpg" alt="Smiley face" height="150" width="220" style="margin-top:10px;">'
		});
	}

	function hitungTotalBayar() {
		const tipe = $('form #tipe-kamar').val();
		const durasi = $('form #durasi').val();
		const sarapan = $('form #sarapan').val();
		if (tipe != '' && durasi != '' && sarapan != '') {
			let total_bayar = 0;
			if (tipe == 'Standard') {
				total_bayar += 500000 * durasi;
			} else if (tipe == 'Deluxe') {
				total_bayar += 750000 * durasi;
			} else if (tipe == 'Executive') {
				total_bayar += 1200000 * durasi;
			}
            if(durasi > 3) {
                total_bayar -= total_bayar * 10 / 100;
            }
			if (sarapan == 'Ya') {
				total_bayar += (30000 * durasi);
			}


			$('#total-bayar').val(total_bayar);

			$("#simpan-pesanan").attr("disabled", false)
		} else {
			Swal.fire({
				title: "Oops!",
				text: "Tolong Isi Dulu Formulirnya Sampe Lengkap Yaa",
				icon: "error"
			});
		}
	}

	// Tambah Data
	$(document).on('submit', 'form#addPesanan', function (e) {
        e.preventDefault();
		const nama = $('form #nama-pemesan').val();
		const kelamin = $('form #jenis-kelamin').val();
		const noid = $('form #no-id').val();
		const tipe = $('form #tipe-kamar').val();
		const tanggal = $('form #tanggal-pesan').val();
		const durasi = $('form #durasi').val();
		const sarapan = $('form #sarapan').val();
		const bayar = $('form #total-bayar').val();
		if (nama != '' && kelamin != '' && noid != '' && tipe != '' && tanggal != '' && durasi != '' && sarapan != ''&& bayar != '') {
			$.ajax({
				url: 'home/tambah_pesanan',
				type: "POST",
				data: {
					nama: nama,
					kelamin: kelamin,
					noid: noid,
					tipe: tipe,
					tanggal: tanggal,
					durasi: durasi,
					sarapan: sarapan,
					bayar: bayar
				},
				success: function (data) {
                    const json = JSON.parse(data);
                    const status = json.status;
                    if (status == 'true') { 
                        Swal.fire({
                            title: "Good Job!",
                            text: "Pesanan Sudah Berhasil Diproses"
                        });
                    } else {
                        Swal.fire({
                            title: "Oops!",
                            text: "Pesanan Gagal"
                        });
                    }
                }
			});
		} else {
			Swal.fire({
				title: "Oops!",
				text: "Tolong Isi Dulu Formulirnya Sampe Lengkap Yaa",
				icon: "error"
			});
		}
	});

</script>
</body>

</html>
