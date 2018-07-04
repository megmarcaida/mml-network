@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-light text-center"><h4>{{ __('Sign Up') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label> -->

                            <div class="col-md-12">
                                <label for="sponsor_id" class="col-md-12 alert text-white bg-danger">Sponsor Name: {{ $name }} </label>
                                <input id="sponsor_id" type="hidden" name="sponsor_id" value="{{ $sponsor_id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="upline_id" placeholder="Upline ID" type="text" class="form-control" name="upline_id" value="{{ old('upline_id') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label> -->

                            <div class="col-md-12">
                                <select id="position" placeholder="Position" type="text" class="form-control" name="position" value="{{ old('position') }}" autofocus>
                                  <option value="">Select Position</option>
                                  <option value="0">Left</option>
                                  <option value="1">Right</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="firstname" placeholder="First Name" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __(' Middle Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="lastname" placeholder="Middle Name" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}" required autofocus>

                                @if ($errors->has('middlename'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __(' Last Name') }}</label> -->

                            <div class="col-md-12">
                                <input id="lastname" placeholder="Last Name" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" placeholder="Email Address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label> -->

                            <div class="col-md-12">
                                <input id="mobile" placeholder="Mobile Number" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="username" placeholder="Username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn text-white bg-info btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
