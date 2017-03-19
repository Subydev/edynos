@extends('auth.passwords.layout')

@section('content')
  <body class="gray-bg">

      <div class="passwordBox animated fadeInDown">
          <div class="row">

              <div class="col-md-12">
                  <div class="ibox-content">

                      <h2 class="font-bold">Forgot password</h2>

                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      <p>
                          Enter your email address and your password will be reset and emailed to you.
                      </p>

                      <div class="row">

                          <div class="col-lg-12">
                              <form class="m-t" role="form" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>

                                  <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <hr/>
          <div class="row">
              <div class="col-md-6">
                  Edynos
              </div>
              <div class="col-md-6 text-right">
                 <small>© 2017</small>
              </div>
          </div>
      </div>
@endsection
