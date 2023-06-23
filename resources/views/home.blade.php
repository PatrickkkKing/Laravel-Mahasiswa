@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div>
                <a class="btn btn-sm float-end" href="{{url('mahasiswa/')}}"><input type="submit" value="OK" class="btn btn-success"></input></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
