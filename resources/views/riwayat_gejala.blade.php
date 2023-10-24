@extends('layouts.app')

@section('content')
<div class="card mx-auto ">
    <div class="card-body">
        <h1 class="card-title">Riwayat Gejala</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Gejala</th>
                    <th>Tanggal</th>
                    <th>Penyakit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayat_gejala as $item)
                    <tr>
                        <td>{{ $item->gejala }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->penyakit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
