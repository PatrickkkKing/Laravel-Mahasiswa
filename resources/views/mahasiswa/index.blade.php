@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>
                Data Mahasiswa
                <a class="btn btn-sm float-end" href="{{url('mahasiswa/create')}}"><input type="submit" value="TAMBAH" class="btn btn-success"></input></a>
            </h3>
        </div>
<table class="table table-bordered border-primary table-hover">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>
    @foreach ($rows as $row)
    
    <tr>
        <td>{{$row->mhsw_id}}</td>
        <td>{{$row->mhsw_nim}}</td>
        <td>{{$row->mhsw_nama}}</td>
        <td>{{$row->mhsw_alamat}}</td>
        <td><a class="btn btn-primary" href="{{ url('mahasiswa/'. $row->mhsw_id . '/edit')}}">Edit</a></td>
        <td>
            <form action="{{url('mahasiswa/' . $row->mhsw_id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>    
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection