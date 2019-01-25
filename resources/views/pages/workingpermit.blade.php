@extends('layout')

@section('title', 'Form | Working Permit')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Working Permit
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
                            <form action="" method="" role="form">

                                <div class="form-group">
                                    <label>Uraian Pekerjaan</label>
                                    <textarea class="form-control" rows="3" placeholder="Masukkan Uraian Pekerjaan Anda"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Lokasi Anda">
                                </div>

                                <div class="form-group">
                                    <label>Area Kerja</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Area Kerja Anda">
                                </div>

                                <div class="form-group">
                                    <label>Manager</label>
                                    <select class="form-control">
                                        <option disabled selected>Pilih Manager</option>
                                        <option>Manager Aktivasi dan Pembangunan</option>
                                        <option>Manager HAR</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Pengawas</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Pengawas Anda">
                                </div>

                                <div class="form-group">
                                    <label>K3</label>
                                    <input type="text" class="form-control" placeholder="Masukkan K3 Anda">
                                </div>

                                <div class="form-group">
                                    <label>App</label>
                                    <input type="text" class="form-control" placeholder="Masukkan App Anda">
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Mulai:</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker">
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Selesai:</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker2">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Waktu Mulai:</label>
                                        <div id="datetimepicker" class="input-append">
                                            <input  data-format="hh:mm:ss" type="text">
                                            <span class="add-on">
                                              <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Waktu Selesai:</label>
                                        <div id="datetimepicker2" class="input-append">
                                            <input data-format="hh:mm:ss" type="text">
                                            <span class="add-on">
                                          <i class="fa fa-clock-o">
                                          </i>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Pemohon</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Pemohon">
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
