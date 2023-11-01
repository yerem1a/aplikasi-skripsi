<!-- resources/views/hasil_klasifikasi.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="card-title display-1">Hasil Klasifikasi:</h1>
        <p class="card-text lead">{{ $hasil_klasifikasi }}</p>
        <!-- Progress bar -->
        <div class="progress" style="height: 30px;">
            <div class="progress-bar rounded-pill" role="progressbar" style="width: {{ $persentase }}%;" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100">{{ round($persentase) }}%</div>
        </div>

    </div>
</div>
@endsection
