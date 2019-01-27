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
                            <form action="{{ route('wp.post') }}" method="POST" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Nomor</label>
                                    <input name="number" type="text" class="form-control" placeholder="Masukkan Nomor Surat">
                                    @if ($errors->first('number'))
                                        <div class="error-message">
                                            <p>Nomor surat harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                               <div class="form-group">
                                    <label>Perusahaan</label>
                                    <select name="company_id" class="form-control select2" style="width: 100%;">
                                        <option disabled selected>Pilih Perusahaan</option>
                                        @foreach($companies as $company)
                                        <option value={{$company->id}}>{{$company->name}}</option>
                                        @endforeach
                                    </select>
                                   @if ($errors->first('company_id'))
                                       <div class="error-message">
                                           <p>Perusahaan harus diisi.</p>
                                       </div>
                                   @endif
                                </div>

                                <div class="form-group">
                                    <label>Uraian Pekerjaan</label>
                                    <textarea name="job_description" class="form-control" rows="3" placeholder="Masukkan Uraian Pekerjaan Anda"></textarea>
                                    @if ($errors->first('job_description'))
                                        <div class="error-message">
                                            <p>Deskripsi pekerjaan harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Apakah diperlukan padam</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_shutdown_required" class="" id="optionsRadios1" value=1 checked>
                                            Ya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_shutdown_required" class="" id="optionsRadios2" value=0>
                                            Tidak
                                        </label>
                                    </div>
                                    @if ($errors->first('is_shutdown_required'))
                                        <div class="error-message">
                                            <p>Keperluan pemadaman harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Apakah diperlukan grounding</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_grounding_required" class="" id="optionsRadios1" value=1 checked>
                                            Ya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_grounding_required" class="" id="optionsRadios2" value=0>
                                            Tidak
                                        </label>
                                    </div>
                                    @if ($errors->first('is_grounding_required'))
                                        <div class="error-message">
                                            <p>Keperluan grounding harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Peralatan yag perlu dipadamkan</label>
                                    <input type="text" name="required_isolating_point" class="form-control" placeholder="Masukkan ">
                                    @if ($errors->first('required_isolating_point'))
                                        <div class="error-message">
                                            <p>Peralatan yang dipadamkan harus diisi. Isi dengan "-" apabila kosong.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Alat keselamatan kerja disediakan oleh</label>
                                    <input type="text" name="safety_equipment_provided_by" class="form-control" placeholder="Masukkan penyedia alat keselamatan kerja">
                                    @if ($errors->first('safety_equipment_provided_by'))
                                        <div class="error-message">
                                            <p>Penyedia alat K3 harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Lokasi/Area Kerja</label>
                                    <select name="location_id" class="form-control select2" style="width: 100%;">
                                        <option disabled selected>Pilih Lokasi</option>
                                        @foreach($locations as $location)
                                        <option value={{$location->id}}>{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->first('location_id'))
                                        <div class="error-message">
                                            <p>Lokasi kerja harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Penanggung Jawab Pekerjaan</label>
                                    <select name="manager_id" class="form-control select2" style="width: 100%;">
                                        <option disabled selected>Pilih Manager</option>
                                        @foreach($managers as $manager)
                                        <option value={{$manager->id}}>{{$manager->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->first('manager_id'))
                                        <div class="error-message">
                                            <p>Penanggungjawab pekerjaan harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Pengawas Pekerjaan</label>
                                    <select name="job_supervisor_id" class="form-control select2" style="width: 100%;">
                                        <option disabled selected>Pilih Manager</option>
                                        @foreach($jobSupervisors as $jobSupervisor)
                                        <option value={{$jobSupervisor->id}}>{{$jobSupervisor->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->first('job_supervisor_id'))
                                        <div class="error-message">
                                            <p>Pengawas pekerjaan harus diisi.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Pengawas K3</label>
                                    <select name="safety_supervisor_id" class="form-control select2" style="width: 100%;">
                                        <option disabled selected>Pilih Manager</option>
                                        @foreach($safetySupervisors as $safetySupervisor)
                                        <option value={{$safetySupervisor->id}}>{{$safetySupervisor->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->first('safety_supervisor_id'))
                                        <div class="error-message">
                                            <p>Pengawas K3 harus diisi.</p>
                                        </div>
                                    @endif
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
