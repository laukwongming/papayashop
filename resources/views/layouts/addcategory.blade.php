@extends('layouts.main')

@section('content')

<div class="col-md-6">
    @include('partial.error')

    <div class="panel panel-default">
      <div class="panel-heading"><label>{{trans('main.add_new_category')}}</label></div>
        <div class="panel-body">
          <form action="{{route('store-category')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>{{trans('main.name')}}</label>
              <input type="text" class="form-control" name="category_name" value="{{old('category_name')}}" required maxlength="100">
            </div>
            <div class="form-group">
              <label>Slug</label>
              <input type="text" class="form-control" name="category_slug" value="{{old('category_slug')}}" required maxlength="100">
            </div>

            <label>{{trans('main.parent')}}</label>
             <div class="form-group" id="div-list-category">
                 <label>
                    <input type="radio" name="category" value="0" @if(old('category') == 0) checked @endif> {{trans('main.none')}}
                 </label>
                @foreach ($categories as $category)
                  <label>
                    <input type="radio" name="category" value="{{$category->id}}"  @if(old('category') == $category->id) checked @endif> {{$category->name}}
                  </label>
                @endforeach
            </div>

              <div class="form-group">
                <hr>
              </div>
              @foreach ($allLan as $lan)
                <div class="form-group">
                <label>
                  {{$lan->name }}:
                </label>
                <input type="text" class="form-control" name="mutilan[{{$lan->id}}]" value="{{old('mutilan.'.$lan->code)}}">
                </div>
              @endforeach

            <button type="submit" class="btn btn-default">{{trans('main.submit')}}</button>
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
