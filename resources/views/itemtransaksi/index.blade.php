@extends('base')

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="card-title">
				Item Transaksi
				<div class="pull-right">
					<a style="color:#fff" href="{{ route("itemtransaksi.create") }}" class="btn btn-primary">Tambah</a>
				</div>
			</div>

		</div>
	
		<div class="card-body">
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total</th>
				<th>Rating</th>
				<th>Opsi</th>
			</tr>
		</thead>
<tbody>
@foreach ($itemtransaksi as $no=>$item)
	<tr>
		<td>{{ $no + 1 }}</td>
		<td>{{ $item->harga }} </td>
		<td>{{ $item->jumlah }} </td>
		<td>{{ $item->total }} </td>
		<td>{{ $item->rating }}</td>
		<td><img src="{{ $item->foto }}" width="100"> </td>
		<td>
		<div class="btn-group btn-group-sm">
			<a class="btn btn-warning" href="{{ route('itemtransaksi.edit', ['id' => $item->id]) }}">Edit</a>
			<a class="btn btn-danger" href="{{ route('itemtransaksi.delete', ['id' => $item->id]) }}">Del</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
		</div>
	</div>
@endsection