@extends('layouts.main')

@section('content')

<div class="panel panel-default">
  <div class="panel-body">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Default</a></li>
            <li role="presentation"><a href="#">+新增其它語言</a></li>
        </ul>
  </div>
  <div class="panel-footer">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Product Name:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Product category:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
  </div>
</div>




@endsection
