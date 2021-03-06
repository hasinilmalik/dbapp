@extends('layout.master')
@section('content')
    <div class="container grid-md bg-gray card rounded">
        <form class="px-2 mx-2" id="form" action="{{ route('teachers.input_data') }}" method="POST">
            @csrf
            <fieldset>
                <br />
                <h4 class="text-center bg-primary p-2">
                    FORMULIR KARYAWAN
                </h4>

                <br />
                <!-- Identitas Pendidik dan Tenaga Kependidikan -->
                <h4 class="text-center">
                    Identitas
                </h4>
                <hr class="text-primary" />

                <div class="mb-3 pt-2">
                    <label class="form-label" for="namalengkap">Nama Lengkap (tanpa gelar)</label>
                    <input class="form-control" type="text" id="namalengkap" name="nama" placeholder="Nama Lengkap"
                        required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="nik">NIK</label>
                    <input class="form-control" type="number" id="nik" name="nik" placeholder="NIK" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="jeniskelamin">Jenis Kelamin </label>
                    <select class="form-select" id="jeniskelamin" name="jk" required>
                        <option selected disabled>Pilih</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="mb-3">
                            <label class="form-label" for="tempatlahir">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempatlahir" name="tempat_lahir"
                                placeholder="Tempat Lahir" required />
                        </div>
                    </div>
                    <div class="column">
                        <div class="mb-3">
                            <label class="form-label" for="tanggallahir">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggallahir" name="tanggal_lahir"
                                placeholder="Tanggal Lahir" required />
                        </div>
                    </div>
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label" for="namaibukandung">Nama Ibu Kandung</label>
                    <input class="form-control" type="text" id="namaibukandung" name="nama_ibu"
                        placeholder="Nama Ibu Kandung" required />
                </div> --}}

                <div class="mb-3">
                    <label class="form-label" for="nohp">No.Telp/HP</label>
                    <input class="form-control" type="number" name="no_hp" id="nohp" placeholder="No. Telp/HP" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">E-Mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                        readonly />
                </div>
                <br />
                <div class="columns">
                    <div class="column">
                        <input type="submit" value="Simpan" class="btn float-end btn-lg col-12 btn-primary" />
                    </div>
                    <div class="column">
                        <input type="submit" value="Batal" class="btn float-end btn-lg col-12 btn-primary" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
