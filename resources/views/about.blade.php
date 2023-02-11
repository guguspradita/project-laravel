@extends('layouts.main')

@section('container')
    <h1>Tentang Penulis</h1><br><br>
    <h4>{{ $nama }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200">
    <br><br>
@endsection


