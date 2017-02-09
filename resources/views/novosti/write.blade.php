@extends('layouts.app')
@section('content')
<section class="addSpace">

</section>
@if(Auth::user())
<div class="container">
  <form id="writeStory" class="form-group" role="form" method="POST" action="{{ url('/novosti/save') }}" enctype="multipart/form-data">
    <input  type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="form-control" type="text" name="novost_title" placeholder="Naslov" required=""><br>
      <textarea class="form-control" type="text" name="novost_body" placeholder="Tekst" required=""></textarea><br>
    <input  class="" size="60" type="file" placeholder="Slika" name="novost_img"><br/>
    <input class="btn btn-warning" type="submit" value="Save">
  </form>
</div>
<br>
  @endif
@stop
