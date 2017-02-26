@extends('templates.index')
@section('content')
	<table border="1" width="75%" align="center">
			<tr>
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="80"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="80"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="80"></input></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" value="simpan">tambah</button></td>
			
			</tr>
		</table>
@stop