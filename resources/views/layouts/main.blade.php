@extends('_master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sb-admin.css') }}">
<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

@endsection

@section('body')
  <div id="wrapper">
        <!-- include navation header to main -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>

            @include('partial.nav_top')
            @include('partial.nav_slidermenu')
        </nav>

        <div id="page-wrapper">
            <div class="row" style="margin: 10px; padding-top: 10px">
                 @yield('content')
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection
