@extends('layout.maindashboard')
@section('title')
    Login Page
@endsection
@section('content')
<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title"><center><strong>Log In Admin SIGBill</strong></center></h3>
                    </div>
                       @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
                    <div class="panel-body">
                    
                        <form role="form" method="POST" action="{{URL::route('login')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Log In</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <center><strong>Hubungi Admin Untuk Permintaan Log In</strong></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection