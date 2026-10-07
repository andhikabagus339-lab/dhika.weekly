@extends('layouts.main')

@section('content')
    @foreach ($beritas as $berita)
     <h2>{{ $berita["judul"] }}}</h2>
     <h5>{{ $berita["penulis"]}}</h5>
     <p>{{ $berita["konten"]}}</p>
    @endforeach
@endsection