@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <form role="form" method="POST" action="{{ url('/rezultati/save') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text" name="name" placeholder="Naslov Takmicenja" required=""><br/><br/>
                    <input type="date" name="date" placeholder="Datum Takmicenja" required=""><br/><br/>
                    <input type="text" name="results" placeholder="Rezultat" required=""><br/><br/>
                    <input class=".btn-primary" type="submit" value="Sačuvaj">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
