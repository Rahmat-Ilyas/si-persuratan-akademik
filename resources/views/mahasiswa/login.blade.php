<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon_1.ico') }}">

    <title>Login - Sistem Informasi Persuratan</title>

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>

</head>
<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
     <div class=" card-box">
        <div class="panel-heading"> 
            <h3 class="text-center"> LOGIN </h3>
        </div> 


        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input id="nim" type="text" class="form-control" name="nim" value="{{ old('nim') }}" placeholder="Username" required autofocus>
                        @if ($errors->has('nim'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nim') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-default btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form> 
            
        </div>   
    </div>  

</div>




<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/detect.js') }}"></script>
<script src="{{ asset('/assets/js/fastclick.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('/assets/js/waves.js') }}"></script>
<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.scrollTo.min.js') }}"></script>


<script src="{{ asset('/assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.app.js') }}"></script>

</body>
</html>