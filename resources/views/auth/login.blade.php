@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Login')
@endsection
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('/') }}" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="mb-5 d-block auth-logo">
                            <span class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="150">
                        </span> 
                        <span class="logo logo-light">
                            <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="150">
                        </span>  
                        </a>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">

                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Sistem Manajemen IT MGM</h5>
                                    <p class="text-muted">Sign in to continue.</p>
                                </div>
                            <div class="p-2 mt-4">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}


                        <div class="mb-3">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="form-label" for="username">Email</label>
                           
                   
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" id=email placeholder="Enter username" required autofocus>

                        </div>

                        {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus> --}}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name= "password"class="form-control" id="password"
                                            placeholder="Enter password" required>



                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                                
                            

                                <div class="mt-4 text-center">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log
                                        In</button>
                                    </div>
                    </form>
                </div>
            </div>
    
    </div>
</div>
{{-- <div class="mt-4 text-center">
    <p class="mb-0">Don't have an account ? <a href="{{ url('/register') }}">
        Register</a></p>
</div>
</form>
</div> --}}

</div>
</div>

<div class="mt-5 text-center">
<p>© <script>
document.write(new Date().getFullYear())

</script> ITMGM. Created with <i class="mdi mdi-heart text-danger"></i> by Bagus Setyawan</p>
</div>

</div>
</div>
<!-- end row -->
</div>
<!-- end container -->
</div>
@endsection

