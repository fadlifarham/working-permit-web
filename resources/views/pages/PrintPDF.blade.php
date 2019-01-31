@extends('PDFLayout')

@section('content')
    {{--<div id="pf2" class="pf w0 h0" data-page-no="2">--}}
        <div class="pc pc2 w0 h0 opened">
            <img class="bi x0 y15 w1 h10" alt="" src="topdf/bg2.png">
            <div class="c x1 y16 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">
                    No. Dokumen
                    <span class="_ _0"> </span>
                    FK3/0
                    <span class="_ _1"></span>07
                </div>
            </div>

            <div class="c x1 y17 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">
                    Edisi / Revisi
                    <span class="_ _2"> </span>
                    <span class="ls1">02/00</span>
                </div>
            </div>

            <div class="c x1 y18 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">
                    Berlaku Efektif
                    <span class="_ _3"> </span>
                    11 September 2013
                </div>
            </div>

            <div class="c x1 y19 w2 h2">
                <div class="t m0 x3 h4 y2 ff2 fs0 fc0 sc0 ls0 ws0">
                    2
                    <span class="ff1"> dari 6</span>
                </div>
            </div>

            <div class="c x1 y1a w2 h11">
                <div class="t m0 x5 h12 y1b ff1 fs5 fc0 sc0 ls0 ws0">
                    PERUSAHAAN :
                    <span class="_ _4"></span>
                    <?=  $workingPermit->company->name  ?>
                </div>

                <div class="t m0 x5 h13 y1c ff3 fs5 fc0 sc0 ls0 ws0">
                    COMPANY
                </div>

                <div class="t m0 x5 h12 y1d ff1 fs5 fc0 sc0 ls0 ws0">
                    URAIAN PEKERJAAN :
                    <span class="_ _4"></span>
                    <?=  $workingPermit->job_description  ?>
                </div>

                <div class="t m0 x5 h13 y1e ff3 fs5 fc0 sc0 ls0 ws0">
                    JOB DESCRIPTION
                </div>

                <div class="t m0 x5 h12 y1f ff1 fs5 fc0 sc0 ls0 ws0">
                    APAKAH DIPERLUKAN PADAM :
                </div>
            </div>

            <div class="c x1 y20 w2 h14">
                <div class="t m0 x4 h12 y21 ff1 fs5 fc0 sc0 ls3 ws0">
                    <?= ($workingPermit->is_shutdown_required)?"Ya":"Tidak" ?>

                </div>
            </div>

            <div class="c x1 y1a w2 h11">
                <div class="t m0 x5 h13 y22 ff3 fs5 fc0 sc0 ls0 ws0">
                    IS SHUTDOWN REQUIRED
                </div>
            </div>

            <div class="c x1 y23 w2 h14">
                <div class="t m0 x4 h13 y14 ff3 fs5 fc0 sc0 ls0 ws0">
                    <?= ($workingPermit->is_shutdown_required)?"Ya":"Tidak" ?>

                </div>
            </div>

            <div class="c x1 y1a w2 h11">
                <div class="t m0 x5 h12 y24 ff1 fs5 fc0 sc0 ls0 ws0">
                    APAKAH DIPERLUKAN GROUNDING/EARTHING :
                </div>
            </div>

            <div class="c x1 y1b w2 h14">
                <div class="t m0 x4 h12 y14 ff1 fs5 fc0 sc0 ls3 ws0">
                    <?= ($workingPermit->is_grounding_required)?"Ya":"Tidak" ?>

                </div>
            </div>

            <div class="c x1 y1a w2 h11">
                <div class="t m0 x5 h13 y25 ff3 fs5 fc0 sc0 ls0 ws0">
                    IS GROUNDING(EARTHING) REQUIRED
                </div>
            </div>

            <div class="c x1 y1c w2 h14">
                <div class="t m0 x4 h13 y21 ff3 fs5 fc0 sc0 ls0 ws0">
                    <?= ($workingPermit->is_grounding_required)?"Ya":"Tidak" ?>

                </div>
            </div>

            <div class="c x1 y1a w2 h11">
                <div class="t m0 x5 h12 y26 ff1 fs5 fc0 sc0 ls0 ws0">
                    PERALATAN YANG PERLU DIPADAMKAN :
                    <span class="_ _4"></span>
                    <?= $workingPermit->required_isolating_point ?>
                </div>

                <div class="t m0 x5 h13 y27 ff3 fs5 fc0 sc0 ls0 ws0">
                    REQUIRED ISOLATING POINT/EQUIPMENT
                </div>

                <div class="t m0 x5 h12 y28 ff1 fs5 fc0 sc0 ls0 ws0">
                    ALAT KESELAMATAN KERJA DISEDIAKAN OLEH :
                    <span class="_ _4"></span>
                    <?= $workingPermit->company->name ?>
                </div>

                <div class="t m0 x5 h13 y29 ff3 fs5 fc0 sc0 ls0 ws0">
                    SAFETY EQUIPMENT PROVIDED BY
                </div>

                <div class="t m0 x5 h12 y2a ff1 fs5 fc0 sc0 ls0 ws0">
                    LOKASI/AREA KERJA :
                    <span class="_ _4"></span>
                    <span class="_ _4"></span>
                    <?= $workingPermit->location->name ?>
                </div>
                <div class="t m0 x5 h13 y2b ff3 fs5 fc0 sc0 ls0 ws0">
                    JOB LOCATION/AREA
                </div>

                <div class="t m0 x5 h12 y2c ff3 fs5 fc0 sc0 ls0 ws0">
                    (Ruang, Lemari,
                    <span class="_ _1"></span>
                    Rak, Terminal)
                    <span class="_ _6"> </span>
                    <span class="ff1">
                        PLC
                    </span>
                </div>

                <div class="t m0 x5 h12 y2d ff1 fs5 fc0 sc0 ls0 ws0">
                    PENANGGUNG JAWAB PEKERJAAN : <?= $workingPermit->manager->name ?>
                    <span class="_ _7"> </span>
                    JABATAN : MANAGER
                </div>

                <div class="t m0 x5 h13 y2e ff3 fs5 fc0 sc0 ls0 ws0">
                    JOB DIRECTOR
                    <span class="_ _8"> </span>
                    POSITION
                </div>
            </div>

            <div class="c x1 y2f w6 h14">
                <div class="t m0 x5 h12 y21 ff1 fs5 fc0 sc0 ls0 ws0">
                    PENGAWAS PEKERJAAN :       <?= $workingPermit->jobSupervisor->name ?>
                </div>
            </div>

            <div class="c x1 y1a w2 h11">
                <div class="t m0 x4 h12 y30 ff1 fs5 fc0 sc0 ls0 ws0">
                    JABATAN : FIELD SUPPORT
                </div>

                <div class="t m0 x5 h13 y31 ff3 fs5 fc0 sc0 ls0 ws0">
                    JOB SUPERVISOR
                    <span class="_ _9"> </span>
                    POSITION
                </div>

                <div class="t m0 x5 h12 y32 ff1 fs5 fc0 sc0 ls0 ws0">
                    PENGAWAS K3:              <?= $workingPermit->safetySupervisor->name ?>
                    <span class="_ _a"> </span>
                    JABATAN : ENGINEER
                </div>

                <div class="t m0 x5 h13 y33 ff3 fs5 fc0 sc0 ls0 ws0">
                    SAFETY SUPERVISOR
                    <span class="_ _b"> </span>
                    POSITION
                </div>
            </div>

            <div class="c x1 y34 w7 hc">
                <div class="t m0 xc h8 y10 ff2 fs2 fc0 sc0 ls0 ws0">
                    PERMOHONAN IJIN KERJA
                </div>
            </div>

            <div class="c x1 y35 w7 hc">
                <div class="t m0 xd h15 y36 ff4 fs2 fc0 sc0 ls0 ws0">
                    Request For Clear
                    <span class="_ _4"></span>
                    ance
                </div>
            </div>

            <div class="c x1 y37 w7 hc">
                <div class="t m0 xe h8 y36 ff5 fs2 fc0 sc0 ls0 ws0">
                    Nomor : …....……
                </div>
            </div>

            <div class="c xf y38 w8 hc">
                <div class="t m0 x10 h16 y39 ff2 fs6 fc0 sc0 ls0 ws0">
                    FORM : WP 1A
                </div>
            </div>

            <div class="c x1 y3a w3 h17">
                <div class="t m0 x5 h8 y3b ff2 fs2 fc0 sc0 ls2 ws0">
                    PT PLN (PER
                    <span class="_ _4"></span>
                    SERO
                    <span class="_ _4"></span>
                    )
                </div>

                <div class="t m0 x5 h8 yb ff2 fs2 fc0 sc0 ls2 ws0">
                    UNIT TRANSM
                    <span class="_ _4"></span>
                    ISI J
                    <span class="_ _4"></span>
                    AWA BAGIAN TE
                    <span class="_ _4"></span>
                    NGAH
                </div>
            </div>

            <div class="c x1 y3c w4 hd">
                <div class="t m0 xa he y13 ff2 fs4 fc0 sc0 ls0 ws0">
                    FORMULIR IJIN
                    <span class="_ _1"></span>
                    KERJA
                </div>
            </div>

            <div class="c xb y3c w5 hf">
                <div class="t m0 x5 h3 y21 ff1 fs0 fc0 sc0 ls0 ws0">
                    Halaman
                </div>
            </div>
        {{--</div>--}}

        {{--<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}">--}}

        {{--</div>--}}
    </div>
@endsection
