@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
  <div class="card">
    <div class="card-body">
    <h3>Nama Teman : {{ $friend['nama'] }}</h3>
    <h3>Nomor Telepon Teman : {{ $friend['no_tlp'] }}</h3>
    <h3>Alamat Teman: {{ $friend['alamat'] }}</h3>
    </div>
 </div>
@endsection