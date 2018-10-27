@extends('admin.admin_layout.ad_app')

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="/app-assets/images/logo/logo-dark.png" alt="branding logo">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Create Account</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple"  method="POST" action="{{ route('register') }}">

                      {{ csrf_field() }}
                      <fieldset class="form-group position-relative has-icon-left mb-1 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control form-control-lg input-lg" name="name" id="user-name"  placeholder="Enter Username" value="{{ old('name') }}" required autofocus>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control form-control-lg input-lg" name="email" value="{{ old('email') }}" 
                        placeholder="Your Email Address" required>
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </fieldset>

                      <fieldset class="position-relative has-icon-left form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control form-control-lg input-lg" name="password" placeholder="Enter Password" required>

                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </fieldset>
                      
                      <fieldset class="form-group position-relative has-icon-left">
                        <input id="password-confirm" type="password" class="form-control form-control-lg input-lg" name="password_confirmation" placeholder="Enter Confirm Password" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                    </form>
                  </div>
                  <p class="text-center">Already have an account ? <a href="/{{ route('login') }}" class="card-link">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

@endsection