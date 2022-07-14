@extends('layout_sheren.master')

@section('content')

<div id=peminjam>
    <h2>Data Mahasiswa Peminjam</h2>
    @if(!empty($peminjam))
        <ul>
            @foreach($peminjam as $data)
            <li>{{$data}}</li>
            @endforeach
        </ul>
    @else
    <p>Data Peminjam di Perpustakaan Sheren sedang Kosong</p>
    @endif
</div>

@endsection

