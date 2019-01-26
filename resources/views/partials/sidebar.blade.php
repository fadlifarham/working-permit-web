<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @if(Request::route()->getName() == 'dashboard')
                <li class="active">
            @else
                <li class="">
            @endif
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            @if(Request::route()->getName() == 'wp')
                <li class="active">
            @else
                <li class="">
            @endif
                <a href="/wp">
                    <i class="fa fa-edit"></i> <span>Form</span>
                </a>
            </li>

            @if(Request::route()->getName() == 'ijinKerja')
                <li class="active">
            @else
                <li class="">
                    @endif
                    <a href="/ijinKerja">
                        <i class="fa fa-edit"></i> <span>Permohonan Ijin Kerja</span>
                    </a>
                </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
