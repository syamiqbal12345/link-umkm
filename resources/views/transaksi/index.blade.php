@extends('base')

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="card-title">
				Transaksi
				<div class="pull-right">
					<a style="color:#fff" href="{{ route("transaksi.create") }}" class="btn btn-primary">Tambah</a>
				</div>
			</div>
			
				
		</div>
	
		<div class="card-body">
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Tanggal</th>
				<th>Status</th>
				<th>Total</th>
				<th>Alamat</th>
				<th>Biaya_Kurir</th>
				<th>Rating</th>
			</tr>
		</thead>
<tbody>
@foreach ($transaksi as $no=>$item)
	<tr>
		<td>{{ $no + 1 }}</td>
		<td>{{ $item->tanggal }} </td>
		<td>{{ $item->status }} </td>
		<td>{{ $item->total }} </td>
		<td>{{ $item->alamat }}</td>
		<td>{{ $item->biaya_kurir }}</td>
		<td>{{ $item->rating }}</td>
		<td><img src="{{ $item->foto }}" width="100"> </td>
		<td>
		<div class="btn-group btn-group-sm">
			<a class="btn btn-warning" href="{{ route('transaksi.edit', ['id' => $item->id]) }}">Edit</a>
			<a class="btn btn-danger" href="{{ route('transaksi.delete', ['id' => $item->id]) }}">Del</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
		</div>
	</div>
@endsection