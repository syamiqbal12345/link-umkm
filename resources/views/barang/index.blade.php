@extends('base')

@section('content')r
	<h3>Data Barang</h3>
	<hr>
	<a href="{{ route("barang.create") }}" class="btn
btn-primary">Tambah</a>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Foto</th>
			</tr>
		</thead>
<tbody>
@foreach ($barang as $no=>$barang)
	<tr>
		<td>{{ $no + 1 }}</td>
		<td>{{ $toko->nama }} </td>
		<td>{{ $toko->harga }} </td>
		<td>{{ $toko->foto }} </td>
		<td>
		<div class="btn-group btn-group-sm">
			<a class="btn btn-warning"
href="{{ route('barang.edit', ['id' => $barang->id]) }}">Edit</a>
			<a class="btn btn-danger"
href="{{ route('barang.delete', ['id' =>
$barang->id]) }}">Del</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection