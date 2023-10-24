@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/klasifikasi') }}" method="post">
                @csrf
                <label>Gejala:</label><br>
                

                <!-- Checkbox 2 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G2" id="gejalaG2">
                    <label class="form-check-label" for="gejalaG2">Mual</label>
                </div>

                <!-- Checkbox 3 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G3" id="gejalaG3">
                    <label class="form-check-label" for="gejalaG3">Muntah</label>
                </div>
                <!-- Checkbox 4 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G4" id="gejalaG4">
                    <label class="form-check-label" for="gejalaG4">Nyeri</label>
                </div>

                <!-- Checkbox 5 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G5" id="gejalaG5">
                    <label class="form-check-label" for="gejalaG5">Demam &ge; 3Hari</label>
                </div>

                <!-- Checkbox 6 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G6" id="gejalaG6">
                    <label class="form-check-label" for="gejalaG6">Kejang (anak)</label>
                </div>

                <!-- Checkbox 7 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G7" id="gejalaG7">
                    <label class="form-check-label" for="gejalaG7">Demam Tinggi</label>
                </div>

                <!-- Checkbox 8 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G8" id="gejalaG8">
                    <label class="form-check-label" for="gejalaG8">Bintik Bintik Merah</label>
                </div>

                <!-- Checkbox 9 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G9" id="gejalaG9">
                    <label class="form-check-label" for="gejalaG9">Mencret</label>
                </div>

                <!-- Checkbox 10 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G10" id="gejalaG10">
                    <label class="form-check-label" for="gejalaG10">Bab Sulit</label>
                </div>

                <!-- Checkbox 11 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G11" id="gejalaG11">
                    <label class="form-check-label" for="gejalaG11">Keringat Dingin</label>
                </div>

                <!-- Checkbox 12 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G12" id="gejalaG12">
                    <label class="form-check-label" for="gejalaG12">Perut Kembung</label>
                </div>

                <!-- Checkbox 13 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G13" id="gejalaG13">
                    <label class="form-check-label" for="gejalaG13">Batuk</label>
                </div>

                <!-- Checkbox 14 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G14" id="gejalaG14">
                    <label class="form-check-label" for="gejalaG14">Pucat</label>
                </div>

                <!-- Checkbox 15 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G15" id="gejalaG15">
                    <label class="form-check-label" for="gejalaG15">Penurunan Berat Badan</label>
                </div>

                <!-- Checkbox 16 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G16" id="gejalaG16">
                    <label class="form-check-label" for="gejalaG16">Gangguan Pencernaan </label>
                </div>

                <!-- Checkbox 17 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G17" id="gejalaG17">
                    <label class="form-check-label" for="gejalaG17">Lemas</label>
                </div>

                <!-- Checkbox 18 -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G18" id="gejalaG18">
                    <label class="form-check-label" for="gejalaG18">Sesak Nafas</label>
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gejala[]" value="G1" id="gejalaG1">
                    <label class="form-check-label" for="gejalaG1">Demam < 3Hari</label>
                </div>


                <button class="btn btn-primary mt-3" type="submit">Klasifikasikan</button>
            </form>
            <a href="{{ route('klasifikasi.riwayat') }}" class="btn btn-link">Lihat Riwayat Gejala</a>
        </div>
    </div>
@endsection
