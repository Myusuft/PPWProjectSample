<div class="container">
<h4>Tambah Mahasiswa</h4>
<form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="POST">
    @csrf
    <div>Judul
        <input type="text" name="nama" id="nama" value="{{$mahasiswa->nama}}">
    </div>
    <div>Jurusan
        <input type="text" name="jurusan" id="jurusan" value="{{$mahasiswa->jurusan}}">
        
    </div>
    <div><button type="submit">Simpan</button></div>
    <a href="/mahasiswa"> Batal</a>
</form>
</div>