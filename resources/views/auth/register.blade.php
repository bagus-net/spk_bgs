@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Register')
@endsection
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('index') }}" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="{{ url('index') }}" class="mb-5 d-block auth-logo">
                            <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="150" class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="150" class="logo logo-light">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">


                            {{-- @if(session()->has('success'))
                            <div class= "alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif --}}


                            <div class="text-center mt-2">
                                <h5 class="text-primary">Register Account</h5>
                                <p class="text-muted"></p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ url('\register') }}" method="post">
                                    {{ csrf_field() }}

                            <div class="mb-3">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="form-label" for="name">Name</label>
                           
                   
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" id=name placeholder="Enter name" required autofocus>

                        </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="form-label" for="email">Email</label>
                           
                   
                                <input id="email" type="text" class="form-control" email="email" value="{{ old('email') }}" id=email placeholder="Enter email" required autofocus>

                        </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name= "password"class="form-control" id="password" placeholder="Enter password" required>


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >Confirm Password</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
                            </div>


                            

            </form>
        </div>
    </div>

</div>
</div>
<div class="mt-4 text-center">
<p class="mb-0">Already have an account  ? <a href="{{ url('/login') }}">
Login</a></p>
</div>
</form>
</div>

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
    
    