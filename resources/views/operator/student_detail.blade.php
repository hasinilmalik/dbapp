    @extends('layout.master')
    @section('page_judul', 'Detail Siswa')
    @section('content')
        <div id="page_info" class="card rounded">
            <div id="tab-menu">
                <ul class="nav tab px-1">
                    <li class="tab-item">
                        <a href="#" id="defaultOpen" class="nav-link tablinks" onclick="openTab(event, '1')">
                            Identitas
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#" class="nav-link tablinks" onclick="openTab(event, '2')">
                            Data Ayah
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#" class="nav-link tablinks" onclick="openTab(event, '3')">
                            Data Ibu
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#" class="nav-link tablinks" onclick="openTab(event, '4')">
                            Data Wali
                        </a>
                    </li>

                    <li class="tab-item">
                        <a href="#" class="nav-link tablinks" onclick="openTab(event, '5')">
                            Prestasi
                        </a>
                    </li>
                </ul>
            </div>
            <!-- isi tab -->
            <div id="tab-details" class="px-3">
                <div id="1" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-start">Identitas Peserta Didik</h4>
                        <a class="btn btn-primary float-end" href="{{ route('student_edit', $item->id) }}">edit form</a>
                    </div>
                    <hr class="text-primary" />
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>{{ $item->nama }}</td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>{{ $item->nisn }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $item->jk }}</td>
                            </tr>

                            <tr>
                                <td>NIK</td>
                                <td>{{ $item->nik }}</td>
                            </tr>
                            <tr>
                                <td>No. KK</td>
                                <td>{{ $item->no_kk }}</td>
                            </tr>

                            <tr>
                                <td>Tempat Lahir</td>
                                <td>{{ $item->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Agama & Kepercayaan</td>
                                <td>{{ $item->agama }}</td>
                            </tr>
                            {{-- <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{ $item->negara }}</td>
                        </tr> --}}
                            <tr>
                                <td>Berkebutuhan Khusus</td>
                                <td>{{ $item->kebutuhan_khusus }}</td>
                            </tr>
                            <tr>
                                <td>Alamat Jalan</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                            <tr>
                                <td>RT</td>
                                <td>{{ $item->rt }}</td>
                            </tr>
                            <tr>
                                <td>RW</td>
                                <td>{{ $item->rw }}</td>
                            </tr>
                            <tr>
                                <td>Dusun</td>
                                <td>{{ $item->dusun }}</td>
                            </tr>
                            <tr>
                                <td>Desa/Kelurahan</td>
                                <td>{{ $item->kelurahan }}</td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>{{ $item->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td>Kabupaten/Kota</td>
                                <td>{{ $item->kota }}</td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>{{ $item->provinsi }}</td>
                            </tr>
                            <tr>
                                <td>Kode POS</td>
                                <td>{{ $item->kode_pos }}</td>
                            </tr>
                            <tr>
                                <td>Lintang</td>
                                <td>{{ $item->lintang }}</td>
                            </tr>
                            <tr>
                                <td>Bujur</td>
                                <td>{{ $item->bujur }}</td>
                            </tr>

                            <tr>
                                <td>Tempat Tinggal</td>
                                <td>{{ $item->jenis_tinggal }}</td>
                            </tr>
                            <tr>
                                <td>Moda Transportasi</td>
                                <td>{{ $item->alat_transportasi }}</td>
                            </tr>

                            <tr>
                                <td>Anak Ke Berapa</td>
                                <td>{{ $item->anak_ke }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah saudara</td>
                                <td>{{ $item->jumlah_saudara_kandung }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="2" class="tabcontent">
                    <br />

                    <div class="clearfix">
                        <h4 class="float-start">Data Ayah Kandung</h4>
                        <a class="btn btn-primary float-end" href="{{ route('student_edit', $item->id) }}">edit form</a>
                    </div>

                    <hr class="text-primary" />
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama ayah Kandung</td>
                                <td>{{ $item->nama_ayah }}</td>
                            </tr>
                            <tr>
                                <td>NIK ayah</td>
                                <td>{{ $item->nik_ayah }}</td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>{{ $item->tanggal_lahir_ayah }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>{{ $item->pendidikan_ayah }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $item->pekerjaan_ayah }}</td>
                            </tr>
                            <tr>
                                <td>Penghasilan Bulanan</td>
                                <td>{{ $item->penghasilan_ayah }}</td>
                            </tr>
                            <tr>
                                <td>No. Telp/HP</td>
                                <td>{{ $item->hp_ayah }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="3" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-start">Data Ibu Kandung</h4>
                        <a class="btn btn-primary float-end" href="{{ route('student_edit', $item->id) }}">edit form</a>
                    </div>
                    <hr class="text-primary" />
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama ibu Kandung</td>
                                <td>{{ $item->nama_ibu }}</td>
                            </tr>
                            <tr>
                                <td>NIK ibu</td>
                                <td>{{ $item->nik_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>{{ $item->tanggal_lahir_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>{{ $item->pendidikan_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $item->pekerjaan_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Penghasilan Bulanan</td>
                                <td>{{ $item->penghasilan_ibu }}</td>
                            </tr>
                            <tr>
                                <td>No. Telp/HP</td>
                                <td>{{ $item->hp_ibu }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="4" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-start">Data Wali</h4>
                        <a class="btn btn-primary float-end" href="{{ route('student_edit', $item->id) }}">edit form</a>
                    </div>
                    <hr class="text-primary" />
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama wali</td>
                                <td>{{ $item->nama_wali }}</td>
                            </tr>
                            <tr>
                                <td>NIK wali</td>
                                <td>{{ $item->nik_wali }}</td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td>{{ $item->tanggal_lahir_wali }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>{{ $item->pendidikan_wali }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $item->pekerjaan_wali }}</td>
                            </tr>
                            <tr>
                                <td>Penghasilan Bulanan</td>
                                <td>{{ $item->penghasilan_wali }}</td>
                            </tr>
                            <tr>
                                <td>No. Telp/HP</td>
                                <td>{{ $item->hp_wali }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="5" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-start">Data Prestasi</h4>
                    </div>
                    <hr class="text-primary" />
                    <table class="table table-striped tab-details" id="8">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Prestasi</th>
                                <th>Tingkat</th>
                                <th>Nama Prestasi</th>
                                <th>Tahun</th>
                                <th>Ket</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($item->achievements as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenis_prestasi }}</td>
                                    <td>{{ $item->tingkat }}</td>
                                    <td>{{ $item->nama_prestasi }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">
                                            <span><i class="las la-edit"></i></span>
                                        </a>
                                        <a href="#" class="btn btn-primary">
                                            <span><i class="las la-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @section('css')
    @endsection
    @section('js')
    @stop
