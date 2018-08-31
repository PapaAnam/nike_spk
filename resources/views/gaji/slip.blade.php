<!DOCTYPE html>
<html>
<head>
	<title>
		SLIP GAJI
	</title>
	<link rel="stylesheet" href="{{ asset('css/report.css') }}">
	<style>
	* {
		font-family: sans-serif;
	}
</style>
</head>
<body>
	<div style="height: 60px;">
		<img style="float: left; max-height: 60px; max-width: 60px; margin-right: 20px; " src="{{ asset('images/logo-pajak.png') }}" alt="Logo Pajak">
		<div style="width: 50%; float: left;">
			<strong style="font-size: 11px;">KPP PENANAMAN MODAL ASING SATU</strong>
			<br>
			<span style="font-size: 9px">Jl. Taman Makam Pahlawan Kalibata No.19 Gedung B</span>
			<br>
			<span style="font-size: 9px">Jakarta Selatan 12750</span>
		</div>
		<div style="position: absolute; top: 5px; right: 10px;">
			<div style="padding: 5px 20px; background-color: black; color: white; border: 5px inset #cccccc; font-size: 14px; box-shadow: 5px 10px 10px grey;">SLIP GAJI</div>
			<br>
			<div style="font-size: 11px; font-family: fantasy; margin-top: -5px;">
				<center><strong>{{ strtoupper($namaBulan) }} {{ $d->tahun }}</strong></center>
			</div>
		</div>
	</div>
	<hr style="background-color: black;">
	<table style="margin-bottom: 10px; font-size: 9px; padding: 2px 5px;" width="100%">
		<tr>
			<td>Nama</td>	
			<td>: {{ $d->karyawan->nama }}</td>
			<td>Jabatan</td>	
			<td>: {{ $d->jabatan }}</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>: {{ $d->karyawan->nip }}</td>
			<td>Seksi/Kelompok</td>
			<td>: {{ $d->seksi_kelompok }}</td>
		</tr>
		<tr>
			<td>Pangkat/Gol</td>	
			<td>: {{ $d->pangkat_gol }}</td>
			<td>Grade</td>
			<td>: {{ $d->grade }}</td>
		</tr>
	</table>
	<table style="border-collapse: collapse; font-size: 8.5px;" width="100%" cellpadding="3">
		<tbody>
			<tr>
				<td style="border-bottom: 1px solid black; font-size: 9px;" colspan="7" align="center">
					<strong>PENERIMAAN</strong>
				</td>
				<td style="border-bottom: 1px solid black; font-size: 9px;" colspan="4" align="center">
					<strong>PEMOTONGAN</strong>
				</td>
			</tr>
			@php 
			$i = 1;
			@endphp
			<tr>
				<td width="10px">1</td>
				<td colspan="6">Gaji</td>
				<td width="30px">{{ $i++ }}</td>
				<td width="130px">Paguyuban</td>
				<td width="30px">Rp</td>
				<td align="right">{{ number_format($d->pot_satu_persen, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td width="10px">a</td>
				<td width="130px">Gaji Pokok</td>
				<td width="10px">Rp</td>
				<td align="right" width="70px">{{ number_format($d->gaji, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td width="10px">{{ $i++ }}</td>
				<td>Bank BRI</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->bri, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>b</td>
				<td>Tunjangan Suami/Istri</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjistri, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Bank BJB</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->bank_bjb, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>c</td>
				<td>Tunjangan Anak</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjanak, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Infaq</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->infak_dll, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>d</td>
				<td>Tunjangan Stukrutal</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjstruk, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Zakat</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->zakat, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>e</td>
				<td>Tunjangan Fungsional</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjfungs, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Anak Asuh</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->aasuh, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>f</td>
				<td>Tunjangan Umum</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjupns, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Kas Kepala Seksi</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->kas_kasi, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>g</td>
				<td>Pembulatan</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->pembul, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Kas Seksi/Kelompok</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->kas_seksi, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>h</td>
				<td>Tunjangan Beras</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjberas, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Fiskawati</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->fiskawati, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>i</td>
				<td>Tunjangan Pajak</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->tjpph, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Muslimah</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->muslimah, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>j</td>
				<td>Potongan IWP</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->potpfk10, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Futsal</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->futsal, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>k</td>
				<td>Potongan PPh</td>
				<td>Rp</td>
				<td align="right" style="border-bottom: 1px solid black;">{{ number_format($d->potpph, 0, ',', '.') }}</td>
				<td colspan="2"></td>
				<td>{{ $i++ }}</td>
				<td>Badminton</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->badminton, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>Gaji Bersih</td>
				<td colspan="2"></td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->jumlah_bersih, 0, ',', '.') }}</td>
				<td>{{ $i++ }}</td>
				<td>Qurban</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->qurban, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td>2</td>
				<td colspan="4">Uang Makan</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->uang_makan, 0, ',', '.') }}</td>
				<td>{{ $i++ }}</td>
				<td>Fee Payroll</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->fee_payroll, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td>3</td>
				<td colspan="6">Tunjangan</td>
				<td>{{ $i++ }}</td>
				<td>Lainnya</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->potongan_lain, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>a</td>
				<td width="150px">Tunjangan Kerja</td>
				<td>Rp</td>
				<td align="right" width="70px">{{ number_format($d->gaji, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td></td>
				<td>b</td>
				<td>Potongan Absensi</td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->potongan_absensi, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>Tunjangan Kinerja Bersih</td>
				<td colspan="2"></td>
				<td>Rp</td>
				<td align="right">{{ number_format($d->nett, 0, ',', '.') }}</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid black; border-top: 1px solid black;" align="center" colspan="5">
					<strong>Total Penerimaan</strong>
				</td>
				<td style="border-bottom: 1px solid black; border-top: 1px solid black;">Rp</td>
				<td style="border-bottom: 1px solid black; border-top: 1px solid black;" align="right">{{ number_format($d->total, 0, ',', '.') }}</td>
				<td style="border-bottom: 1px solid black; border-top: 1px solid black;" colspan="2" align="center">
					<strong>Total Potongan</strong>
				</td>
				<td style="border-bottom: 1px solid black; border-top: 1px solid black;">Rp</td>
				<td style="border-bottom: 1px solid black; border-top: 1px solid black;" align="right"><strong>{{ number_format($d->jumlah_potongan, 0, ',', '.') }}</strong></td>
			</tr>
			<tr>
				<td colspan="7"></td>
				<td style="border-bottom: 1px solid black;" colspan="2" align="center"><strong>GAJI BERSIH</strong></td>
				<td style="border-bottom: 1px solid black;">Rp</td>
				<td style="border-bottom: 1px solid black;" align="right"><strong>{{ number_format($d->jumlah_bersih, 0, ',', '.') }}</strong></td>
			</tr>
		</tbody>
	</table>
	<div style="font-size: 8.5px; width: 100%; margin-top: 20px;">
		<div style="width: 40%; float: left;">*) Parameter Tukin Anda :   {{ $d->parameter_tukin }}% ( {{ $d->sabcd }} )</div>
		<div style="width: 50%; float: right;" align="right"><b>Jakarta, {{ $tanggal }}</b></div>
		<br>
		<i>“{{ $kalimatBijak }}”</i>
	</div>	
	<script>
		window.print();
	</script>
</body>
</html>