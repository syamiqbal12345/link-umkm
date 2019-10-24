@extends('base')

@section('content')
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
				<th>Stok</th>
				<th>Foto</th>
				<th>Opsi</th>
			</tr>
		</thead>
<tbody>
@foreach ($barang as $no=>$item)
	<tr>
		<td>{{ $no + 1 }}</td>
		<td>{{ $item->nama }} </td>
		<td>{{ $item->harga }} </td>
		<td>{{ $item->stok }} </td>
		<td><img src="{{ $item->foto }}" alt=""> </td>
		<td>
		<div class="btn-group btn-group-sm">
			<a class="btn btn-warning"
href="{{ route('barang.edit', ['id' => $item->id]) }}">Edit</a>
			<a class="btn btn-danger"
href="{{ route('barang.delete', ['id' =>
$item->id]) }}">Del</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection