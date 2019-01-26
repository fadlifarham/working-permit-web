@extends('layout')

@section('title', 'Permohonan Ijin Kerja | Working Permit')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Permohonan Ijin Kerja
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Isi Data Anda</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="/wp" method="POST" role="form">
                                @csrf

                                <div class="form-group">
                                    <label>Nomor</label>
                                    <input name="number" type="text" class="form-control" placeholder="Masukkan Nomor Surat">
                                </div>

                                <div class="form-group">
                                    <label>Uraian Pekerjaan</label>
                                    <textarea name="job_description" class="form-control" rows="3" placeholder="Masukkan Uraian Pekerjaan Anda"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Apakah diperlukan padam</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_shutdown_required" class="" id="optionsRadios1" value="true" checked>
                                            Ya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_shutdown_required" class="" id="optionsRadios2" value="false">
                                            Tidak
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Apakah di perlukan grounding</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_grounding_required" class="" id="optionsRadios1" value="true" checked>
                                            Ya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_grounding_required" class="" id="optionsRadios2" value="false">
                                            Tidak
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Peralatan yag perlu di padamkan</label>
                                    <input type="text" name="required_isolating_point" class="form-control" placeholder="Masukkan ">
                                </div>

                                <div class="form-group">
                                    <label>Alat keselamatan kerja di sediakan oleh</label>
                                    <select name="company_id" class="form-control select2" style="width: 100%;">

                                        <option selected="selected">PT Indonesia Comnet Plus</option>
                                        <option>PT PLN Persero</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Lokasi/Area Kerja</label>
                                    <select name="location_id" class="form-control select2" style="width: 100%;">
                                        <option selected="selected" name="company_id">PT Indonesia Comnet Plus</option>
                                        <option name="company_id">PT PLN Persero</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Penanggung Jawab Pekerjaan</label>
                                    <select name="manager_id" class="form-control">
                                        <option disabled selected>Pilih Manager</option>
                                        <option>Manager Aktivasi dan Pembangunan</option>
                                        <option>Manager HAR</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Pengawas Pekerjaan</label>
                                    <select name="job_superviser_id" class="form-control">
                                        <option disabled selected>Pilih Manager</option>
                                        <option>Manager Aktivasi dan Pembangunan</option>
                                        <option>Manager HAR</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Pengawas K3</label>
                                    <select name="safety_supervisor_id" class="form-control">
                                        <option disabled selected>Pilih Manager</option>
                                        <option>Manager Aktivasi dan Pembangunan</option>
                                        <option>Manager HAR</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-block btn-primary btn-lg">
                                </div>

                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
