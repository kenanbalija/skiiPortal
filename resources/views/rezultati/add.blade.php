@extends('layouts.app')

@section('content')
<section class="addSpace">

</section>
<br><br>
<div class="container">
    <form role="form" method="POST" action="{{ url('/rezultati/save') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input class="form-control" type="text" name="name" placeholder="Naslov Takmicenja" required=""><br/><br/>
        <input class="form-control" type="date" name="date" placeholder="Datum Takmicenja" required=""><br/><br/>
        <textarea class="form-control" type="text" name="results" placeholder="" required=""></textarea><br/><br/>
        <input class="btn btn-warning" type="submit" value="Sačuvaj">
    </form>
</div><br><br>

@endsection
