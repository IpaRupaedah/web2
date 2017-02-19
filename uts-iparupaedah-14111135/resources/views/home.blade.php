@extends('templates.index')
@section('content')  
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
				<th><a href="tambah"><button type="submit">+ TAMBAH</button></a></th>
			</tr>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
				<td>Aksi</td>
			</tr>
			
			
		</table>
	</article>
	
</div>
@stop