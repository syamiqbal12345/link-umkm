@extends('base')

@section('content')
<<<<<<< HEAD
	<h3>Data Toko</h3>
	<hr>
	<a href="{{ route("toko.create") }}" class="btn
btn-primary">Tambah</a>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Pemilik</th>
				<th>Ktp_Pemilik</th>
				<th>Nomor_hp</th>
				<th>Telepon</th>
				<th>Email</th>
				<th>Status<th></th>
			</tr>
		</thead>
<tbody>
@foreach ($toko as $no=>$toko)
	<tr>
		<td>{{ $no + 1 }}</td>
		<td>{{ $toko->nama }}</td>
		<td>{{ $toko->alamat }}</td>
		<td>{{ $toko->pemilik }}</td>
		<td>{{ $toko->ktp_pemilik }}</td>
		<td>{{ $toko->nomor_hp }}</td>
		<td>{{ $toko->telepon }}</td>
		<td>{{ $toko->email }}</td>
		<td>{{ $toko->status }}</td>
		<td>
		<div class="btn-group btn-group-sm">
			<a class="btn btn-warning"
href="{{ route('toko.edit', ['id' => $toko->id]) }}">Edit</a> <a class="btn btn-danger"
href="{{ route('toko.delete', ['id' => $toko->id]) }}">Del</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
=======
	<div class="card">
        <div class="card-header">
            <div class="card-title">Toko</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Pemilik</th>
                    <th>Nomor_hp</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($toko as $no=>$toko)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $toko->nama }}</td>
                        <td>{{ $toko->pemilik }}</td>
                        <td>{{ $toko->nomor_hp }}</td>
                        <td>{{ $toko->telepon }}</td>
                        <td>{{ $toko->email }}</td>
                        <td>{{ $toko->status }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-warning"
                                   href="{{ route('toko.edit', ['id' => $toko->id]) }}">Edit</a>
                                <a class="btn btn-danger"
                                   href="{{ route('toko.delete', ['id' => $toko->id]) }}">Del</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
>>>>>>> 885b8197b4c0154ceca5c95bfe292e4e334a0ac5
