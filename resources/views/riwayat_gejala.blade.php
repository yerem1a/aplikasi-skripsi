@extends('layouts.app')

@section('content')
    <h1>Riwayat Gejala</h1>

    <ul>
        @foreach($riwayat_gejala as $item)
            <li>{{ $item->gejala }} - {{ $item->created_at }} - {{ $item->penyakit }}</li>
        @endforeach
    </ul>
@endsection
