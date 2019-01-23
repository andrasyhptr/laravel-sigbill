<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!!URL::route('map.home')!!}">
                <img src="{{asset('images/').'/'.'logo.JPG'}}" class="img-responsive" height="75px" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="{!!URL::route('map.kecamatan')!!}">PETA</a>
                </li>
                <li class="dropdown">
                    <a href="{!!URL::route('map.kategori')!!}">DAFTAR BILLBOARD</a>
                </li>
                <li>
                    <a href="{!!URL::route('map.directions')!!}">TENTANG</a>
                </li>
                <li>
                    <a href="{!!URL::route('login')!!}">LOG IN</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>