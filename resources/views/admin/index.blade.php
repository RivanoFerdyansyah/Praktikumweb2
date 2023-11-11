@extends('layouts.main')
@section('content')
<!-- Isi Konten -->
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <p>Hallo , {{Auth::user()->nama}}. Anda berhasil login !.</p>
                <form action="{{Route('auth.logout')}}" method="POST">
                @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Log Out</button>
                </form>
            </div>
        </div>
    </div>
@endsection