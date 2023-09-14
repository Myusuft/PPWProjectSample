<h1>Mahasiswa</h1>

@foreach($mahasiswa as $data)
<p>nama : {{$data->nama}}</p>
<p>jurusan : {{$data->jurusan}}</p>
<p>created at : {{date('d/m/Y', strtotime($data->created_at))}} </p>
<p>updated at : {{\Carbon\Carbon::parse($data->updated_at)->format('d/m/Y')}}</p>
<hr>
@endforeach