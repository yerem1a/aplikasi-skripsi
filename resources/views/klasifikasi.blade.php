@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/klasifikasi') }}" method="post">
                @csrf
                <label>Gejala:</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G1" id="gejalaG1">
                    <label class="form-check-label" for="gejalaG1">demam < 3hari</label>
                </div>

                <!-- Checkbox 2 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G2" id="gejalaG2">
                    <label class="form-check-label" for="gejalaG2">mual</label>
                </div>

                <!-- Checkbox 3 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G3" id="gejalaG3">
                    <label class="form-check-label" for="gejalaG3">muntah</label>
                </div>
                <!-- Checkbox 4 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G4" id="gejalaG4">
                    <label class="form-check-label" for="gejalaG4">nyeri</label>
                </div>

                <!-- Checkbox 5 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G5" id="gejalaG5">
                    <label class="form-check-label" for="gejalaG5">demam &ge; 3hari</label>
                </div>

                <!-- Checkbox 6 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G6" id="gejalaG6">
                    <label class="form-check-label" for="gejalaG6">kejang (anak)</label>
                </div>

                <!-- Checkbox 7 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G7" id="gejalaG7">
                    <label class="form-check-label" for="gejalaG7">demam tinggi</label>
                </div>

                <!-- Checkbox 8 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G8" id="gejalaG8">
                    <label class="form-check-label" for="gejalaG8">bintik bintik merah</label>
                </div>

                <!-- Checkbox 9 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G9" id="gejalaG9">
                    <label class="form-check-label" for="gejalaG9">mencret</label>
                </div>

                <!-- Checkbox 10 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G10" id="gejalaG10">
                    <label class="form-check-label" for="gejalaG10">bab sulit</label>
                </div>

                <!-- Checkbox 11 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G11" id="gejalaG11">
                    <label class="form-check-label" for="gejalaG11">keringat dingin</label>
                </div>

                <!-- Checkbox 12 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G12" id="gejalaG12">
                    <label class="form-check-label" for="gejalaG12">Perut Kembung</label>
                </div>

                <!-- Checkbox 13 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G13" id="gejalaG13">
                    <label class="form-check-label" for="gejalaG13">batuk</label>
                </div>

                <!-- Checkbox 14 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G14" id="gejalaG14">
                    <label class="form-check-label" for="gejalaG14">pucat</label>
                </div>

                <!-- Checkbox 15 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G15" id="gejalaG15">
                    <label class="form-check-label" for="gejalaG15">penurunan berat badan</label>
                </div>

                <!-- Checkbox 16 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G16" id="gejalaG16">
                    <label class="form-check-label" for="gejalaG16">gangguan pencernaan (mencret)</label>
                </div>

                <!-- Checkbox 17 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G17" id="gejalaG17">
                    <label class="form-check-label" for="gejalaG17">lemas</label>
                </div>

                <!-- Checkbox 18 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G18" id="gejalaG18">
                    <label class="form-check-label" for="gejalaG18">sesak nafas</label>
                </div>
                <!-- Checkbox 19 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G19" id="gejalaG19">
                    <label class="form-check-label" for="gejalaG19">Batuk Pilek</label>
                </div>
                <!-- Checkbox 20 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G20" id="gejalaG20">
                    <label class="form-check-label" for="gejalaG20">Diare</label>
                </div>
                <!-- Checkbox 21 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G21" id="gejalaG21">
                    <label class="form-check-label" for="gejalaG21">Nyeri(dada)</label>
                </div>


                <button class="btn btn-primary mt-3" type="submit">Klasifikasikan</button>
            </form>
            <a href="{{ route('klasifikasi.riwayat') }}" class="btn btn-link">Lihat Riwayat Gejala</a>
        </div>
    </div>
@endsection
