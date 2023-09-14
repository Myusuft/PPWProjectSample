
@foreach ( $all_student as  $student)
<div>
    nama : <b>{{$student->nama}}</b>
    jurusan : <b>{{$student->jurusan}}</b>
    <hr>
    <br>
</div> 
    
@endforeach     