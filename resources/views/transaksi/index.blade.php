@extends('base')

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="card-title">
				Transaksi ({{ $transaksi->count() }})
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
                    <a class="btn btn-warning" href="{{ route('transaksi.show', ['id' => $item->id]) }}"><i class="fa fa-show"></i></a>

                </td>
            </tr>
        @endforeach
		</tbody>
	</table>
		</div>
	</div>
@endsection
