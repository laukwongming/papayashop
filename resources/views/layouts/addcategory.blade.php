@extends('layouts.main')

@section('content')

<div class="col-md-6">

    <div class="panel panel-default">
      <div class="panel-heading"><label>Add New Category</label></div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label>Default Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" class="form-control">
            </div>

            <label>Parent</label>
             <div class="form-group" id="div-list-category">
                 <label>
                    <input type="radio" name="category" value="0" checked="true"> None
                 </label>
                @foreach ($categories as $category)
                  <label>
                    <input type="radio" name="category" value="{{$category->id}}"> {{$category->name}}
                  </label>
                @endforeach
            </div>

              <div class="form-group">
                <hr>
                <label>多語言</label>
              </div>
              @foreach ($lans as $lan)
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="{{$lan->name }}">
                </div>
              @endforeach

            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div> <!-- end of class panel-body-->
  </div><!--end of class panel panel-default-->
</div><!-- end of class col-md-6-->

<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div><!-- end of class col-md-6-->

@endsection
