@extends('layouts.app')
@section('content')
<div class="container">
  <form role="form" method="POST" action="{{ url('/novosti/save') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="novost_title" placeholder="Naslov" required=""><br/><br/>
    <input type="text" name="novost_body" placeholder="Tekst" required=""><br/>
    <input type="file" name="novost_img"><br/>

    <input class=".btn-primary" type="submit" value="Save">
  </form>
</div>
@stop
