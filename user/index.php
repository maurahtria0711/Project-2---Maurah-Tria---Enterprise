<?php
	require_once "view/header.php";
	if(isset($_SESSION['tipe'])) {
		$amb = $_SESSION['tipe'];
		$sqlx = $pdo->query("SELECT * FROM kamar WHERE tipe=$amb");
		$datax = $sqlx->fetch();
		$idkamar = $datax['idkamar'];
		$tipe = $datax['tipe'];
		$jumlah = $datax['jumlah'];
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');
	}
?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>

	<div id="imgindex">
		<div id="imglog">
			
			<p><br>Selamat Datang<br>
				<br>
		</div>
	</div>

			<div id="reservasi">
				<li>E-Booking</li>
				<form method="post" action="pemesanan" name="opsi">
					<table>
						<tr>
							<td>Tanggal Booking</td>
							<td>Batas Konfirmasi</td>
							<td>Jenis</td>
							<td>Harga/Jam</td>
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
									<option value="Rp 150.000">Standard</option>
									<option value="Rp 450.000">Satndard Plus Minuman</option>
									<option value="Rp 650.000">VIP Plus Layanan</option>
									<option value="Rp 1.000.000">Executive</option>
									<option value="Rp 2.000.000">Executive Rapat</option>
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

			