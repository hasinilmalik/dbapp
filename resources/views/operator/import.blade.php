@extends('layout.master')
@section('page_judul', 'IMPORT')
@section('content')
    @include('operator.modal.import_guru')
    @include('operator.modal.import_siswa')
    @include('operator.modal.import_temp_student')
    <div id="page_info" class="card rounded  p-3">
        <div class="mb-3">
            <p class="fs-5">
                1. Download template disini
            </p>
            <a href="{{ route('admin.export_teachers') }}" class="btn btn-primary">Guru</a>
            <a href="{{ route('admin.export_students') }}" class="btn btn-primary">Siswa</a>
        </div>
        <div class="mb-3">
            <p class="fs-5">
                2. Perhatikan hal berikut sebelum Import
            </p>
            <ul>
                <li class="list-group-item">
                    A. Data siswa
                    - Pastikan data siswa : <b> Nama, NISN, dan Grade_id </b> tidak kosong di excel.
                </li>
                <li class="list-group-item">
                    B. Data Guru
                    - Pastikan data guru : <b> Nama, NIK </b> tidak kosong di excel.
                </li>
                <li class="list-group-item">
                    C. Data tidak akan diimport jika sudah ada di database.
                </li>
            </ul>

        </div>
        <div class="mb-3">
            <p class="fs-5">
                3. Import
            </p>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importGuru">
                Import Guru
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importSiswa">
                Import Siswa
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tempStudent">
                Temp Student
            </button>
        </div>

    </div>
    @include('operator.import_error')

@endsection

@section('css')

    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

@endsection
@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
