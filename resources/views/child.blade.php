@extends('layouts.app')
@section('title')
    Aplikasi toko online
@endsection
    
@section('content')
    @component('alert', ["type" => "danger"])
        Alert - latihan berhasil
    @endcomponent

    Konten dari child view
@endsection