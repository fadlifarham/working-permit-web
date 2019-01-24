@extends('layout')

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
                    <div class="box box-warning">
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
                                    <input type="text" class="form-control" placeholder="Masukkan Manager Anda">
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

                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
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
