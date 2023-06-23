@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Mahasiswa</h3>
        <form action="{{url('/mahasiswa/' . $row->mhsw_id)}}" method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label>NIM</label>
                <input type="text" class="form-control" name="mhsw_nim" value="{{ $row->mhsw_nim}}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control" name="mhsw_nama" value="{{ $row->mhsw_nama}}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control" name="mhsw_alamat" value="{{ $row->mhsw_alamat}}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-success">
            </div>
        </form>
    </div>
@endsection