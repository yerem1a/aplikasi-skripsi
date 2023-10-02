@extends('layouts.app')

@section('content')
    <form action="{{ url('/klasifikasi') }}" method="post">
        @csrf
        <label>Gejala:</label><br>

        <input type="checkbox" name="gejala[]" value="G1">demam > 3hari<br>
        <input type="checkbox" name="gejala[]" value="G2">mual<br>
        <input type="checkbox" name="gejala[]" value="G3">muntah<br>
        <input type="checkbox" name="gejala[]" value="G4">nyeri<br>
        <input type="checkbox" name="gejala[]" value="G5">demam >= 3hari<br>
        <input type="checkbox" name="gejala[]" value="G6">kejang (anak)<br>
        <input type="checkbox" name="gejala[]" value="G7">demam tinggi<br>
        <input type="checkbox" name="gejala[]" value="G8">bintik bintik merah<br>
        <input type="checkbox" name="gejala[]" value="G9">mencret<br>
        <input type="checkbox" name="gejala[]" value="G10">bab sulit<br>
        <input type="checkbox" name="gejala[]" value="G11">keringat dingin<br>
        <input type="checkbox" name="gejala[]" value="G12">Perut Kembung<br>
        <input type="checkbox" name="gejala[]" value="G13">batuk<br>
        <input type="checkbox" name="gejala[]" value="G14">pucat<br>
        <input type="checkbox" name="gejala[]" value="G15">penurunan berat badan<br>
        <input type="checkbox" name="gejala[]" value="G16">gangguan pencernaan (mencret)<br>
        <input type="checkbox" name="gejala[]" value="G17">lemas<br>
        <input type="checkbox" name="gejala[]" value="G18">sesak nafas<br>

        <button type="submit">Klasifikasikan</button>
    </form>
    <a href="{{ route('klasifikasi.riwayat') }}">Lihat Riwayat Gejala</a>

@endsection
