<h1>Mahasiswa</h1>
<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
@foreach ($mahasiswa as $data)
    <p>nama : {{ $data->nama }}</p>
    <p>jurusan : {{ $data->jurusan }}</p>
    <p>created at : {{ date('d/m/Y', strtotime($data->created_at)) }} </p>
    <p>updated at : {{ \Carbon\Carbon::parse($data->updated_at)->format('d/m/Y') }}</p>
    <p>
    <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="post">@csrf <button
            onclick="return confirm('yakin mau dihapus?')">Hapus</button></form>
    </p>
    <a href="{{ route('mahasiswa.edit', $data->id) }}">Edit</a> 
    <hr>
@endforeach
