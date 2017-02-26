@extends('templates.index')
@section('content')
<article>
		<table border="1" width="75%" align="center">
			<tr>
				<th><a href="{{url('tambah')}}"><button type="submit">+ TAMBAH</button></a></th>
			</tr>
			<tr>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
			@foreach($m as $mhs)
				<tr>
					<td align="center">{{$mhs->id}}</td>
					<td align="center">{{$mhs->nim}}</td>
					<td align="center">{{$mhs->nama}}</td>
					<td align="center">{{$mhs->alamat}}</td>
					<td align="center"><a href="{{url('edit/'.$mhs->id)}}">Edit</a> | <a href="{{url('hapus/'.$mhs->id)}}">Hapus</a></td>
				</tr>
			@endforeach
		</table>
	</article>	
@stop