@extends('templates.index')
@section('content')
<div class="container">
	<nav>
		<ul>
			<li><b>MENU</b></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
	</nav>
	<article>
	 
      
		<table border="1" width="75%" align="center">
			<tr>
				<th>Edit Data</th>
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
				
				<td colspan="3"><input type="button" value="SIMPAN"></input><input type="button" value="BATAL"></input></td>
			</tr>
		</table>
	</article>
	
</div>
</body>
</html>
@stop