@extends('template')
@section('main')
<div id="siswa">
	<h2>Mahasiswa</h2>
	@if (!empty($mahasiswa))
		<ul>
			@foreach($mahasiswa as $anak)
				<li><?= $anak ?></li>
			@endforeach
		</ul>
	@else

	<p>Tidak ada data siswa</p>
	@endif
</div>
@stop

@section('footer')
<div id="footer">
	<p>&copy; 2017 Lubna | LaravelApp_DataMahasiswa.dev</p>
</div>
@stop