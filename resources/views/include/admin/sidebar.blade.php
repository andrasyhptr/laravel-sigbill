<!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{!!asset('/assets/img/user.jpg')!!}" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>{{ Auth::user()->name }}</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="">
                        <a href="{!!URL::route('home')!!}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li class="">
                        <a href="{!!URL::route('info.index')!!}"><i class="fa fa-file fa-fw"></i>Kelola Data Lokasi Billboard</a>
                    </li>
                    <li class="">
                        <a href="{!!URL::route('kecamatan.index')!!}"><i class="fa fa-file fa-fw"></i>Kelola Data Status</a>
                    </li>
                    <li class="">
                        <a href="{!!URL::route('jenis.index')!!}"><i class="fa fa-file fa-fw"></i>Kelola Data Jenis</a>
                    </li>
                    <li class="">
                        <a href="{!!URL::route('kategori.index')!!}"><i class="fa fa-file fa-fw"></i>Kelola Data Media</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->