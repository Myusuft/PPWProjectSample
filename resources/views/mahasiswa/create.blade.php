<div class="container">
<h4>Tambah Mahasiswa</h4>
<form action="{{route('mahasiswa.store')}}" method="POST">
    @csrf
    <div>Judul
        <input type="text" name="nama" id="nama" >
    </div>
    <div>Jurusan
        <input type="text" name="jurusan" id="jurusan">
        
    </div>
    <div><button type="submit">Simpan</button></div>
    <a href="/mahasiswa"> Batal</a>
</form>
</div>