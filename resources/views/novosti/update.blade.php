@extends('layouts.app')
@section('content')
<section>
  <div class="col-xs-12">
      <div class="">
        {{ $novosti->novost_title }}
      </div>
      <img style="width: 100%; height: 100%;" src="{{ url('/img/news/'.$novosti->novost_img)}}">
      <div class="">
        {{ $novosti->novost_body }}
      </div>
  </div>
</section>
<div class="container">
  <h3>PROMJENITE VIJEST</h3>
  <form role="form" method="POST" action="{{ url('/novosti/update/save', $novosti->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="novost_title" value="{{ $novosti->novost_title }}"><br/><br/>
    <input type="text" name="novost_body" value="{{ $novosti->novost_body }}"><br/>
    <input class="btn-primary" type="submit" value="UPDATE">
  </form>
</div>
<section class="container">
  <form role="form" method="POST" action="{{ url('/novosti/update/delete', $novosti->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="btn-primary" type="submit" value="DELETE">
  </form>
</section>
@stop
