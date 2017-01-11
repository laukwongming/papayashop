@extends('_master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <a href="#" class="active" id="login-form-link">Papaya Shop</a>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @if (count($errors))
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="col-md-12">
                            <form id="login-form" action="{{route('post-login')}}" method="post" role="form" style="display: block;">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="{{trans('auth.username')}}" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="{{trans('auth.password')}}">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6  col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="{{trans('auth.login')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="id_btn_language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                {{$curLan}}
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu">
                                                @foreach ($lan as $key=> $value)
                                                    <li><a href="{{route('get-login',['lan'=>$key])}}">{{$value}}</a></li>
                                                @endforeach
                                              </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-center">
                                                <a href="#" tabindex="5" class="forgot-password">{{trans('auth.forgot_password')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection