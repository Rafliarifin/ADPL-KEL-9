@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Selamat datang, Admin! Ini adalah halaman dashboard khusus untuk admin.</p>

    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
</div>
@endsection