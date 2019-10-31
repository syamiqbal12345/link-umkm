@extends('base')

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="card-title">
				<h2 class="text-blue fw-bold">DATA DIRI</h2>
				<div class="pull-right">
					<a style="color:#fff" href="#" class="btn btn-primary">Edit</a>
				</div>
			</div>
		</div>

		<div class="card-body">
		<table class="table table-bordered">
		<tr>
        <td rowspan="15" width="250px">
            <img src="../assets/img/iqbal.jpg" width="250px" height="420px"/>
        </td>
    </tr>
    <tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td>Muhammad Iqbal Syamwardana</td>
    </tr>
    <tr>
            <td><b>Nomor KTP</b></td>
            <td>:</td>
            <td>640002472627736</td>
    </tr>
    <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>:</td>
            <td>Laki - Laki</td>
    </tr>
    <tr>
            <td><b>Email</b></td>
            <td>:</td>
            <td>syamiqbal1234@gmail.com</td>
    </tr>
    <tr>
            <td><b>Alamat</b></td>
            <td>:</td>
            <td>Jalan.Pesugihan, Komplek Harapan Baru, Samarinda Sebrang, Kalimantan Timur</td>
    <tr>
            <td><b>Kurir</b></td>
            <td>:</td>
 <td colspan="1" align="left">
 Ingin Jadi Kurir? <a href="#"style="text-decoration: none;" target="_parent"><input
 type="button" class="btn btn-success"value="Come Join Us "/></a>
 </td>
    </tr>
			</tr>
         </table>
	</div>
</div>
@endsection