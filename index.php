<?php
require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
<div>
	<img src="gambar/qw.png" width="100px" style="margin-left: -1110px; margin-top: -70px; margin-bottom: 20px;">
</div>

<div id="imgindex">
	<div id="imglog">

		<p><br>Selamat Datang di VocalVenue<br>

			<br>

	</div>

</div>

<div id="reservasi">
	<li>Booking</li>
	<form method="post" action="user/pemesanan" name="opsi">
		<table>
			<tr>
				<td>Booking</td>
				<td>Batas</td>
				<td>Jenis</td>
				<td>Harga/Kamar</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<input type="date" name="cekin">
				</td>
				<td>
					<input type="date" name="cekout">
				</td>
				<td>
					<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
						<option selected="selected" disabled="disabled">-Pilih-</option>
						<option value="Rp 150.000">Kamar Satndar</option>
						<option value="Rp 350.000">Kamar 1 Set Standar</option>
						<option value="Rp 650.000">Kamar VIP</option>
						<option value="Rp 1.000.000">Executive</option>
					</select>
				</td>
				<td>
					<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
					<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
				</td>
				<td>
					<input type="submit" name="ok" value="Pesan" id="tombol">
				</td>
			</tr>
		</table>
	</form>
</div>

<div id="tentang">
	<h3>Tentang Kami</h3><br>
	<p>
		Vocal Venue merupakan E-booking karoke yakni suatu aplikasi yang memudahkan untuk para pengusaha karoke dalam mengelola keuangannya dan memudahkan pelanggan untuk memesan suatu kamar tanpa ribet, serta mudah digunakan.
	</p><br>
	<p>
		Vocal Venue merupakan suatu tempat dimana para pelanggan bisa melampiaskan emosinya dengan cara bernyanyi tanpa ada yang ada mengganggunya.
	</p>
</div>



<div id="petalokasi">
	<h3>Peta Lokasi</h3><br>
	<!--<img src="gambar/horison1.png" width="70%">-->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255314.42851896724!2d100.25118103922436!3d-0.9342374980459619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b942e2b117bb%3A0xb8468cb5c3046ba5!2sPadang%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1668734131861!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div id="cekinout">
	<h3>INFORMASI</h3><br>
	<h4>Booking</h4>
	<p>Jam Booking Standar : 09.00 WIB</p>
	<p>*Waktu booking mempunyai prioritas lebih besar</p><br>
	<h4>Batas</h4>
	<p>Jam Batas Standar : 09.00 WIB</p>
	<p>*Waktu Batas dari plan mempunyai prioritas lebih besar</p><br>
</div>
</center>


<?php
require_once "view/footer.php"
?>