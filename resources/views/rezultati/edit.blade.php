@extends('layouts.app')

@section('content')
<section class="addSpace">

</section>
<br><br>
<div class="container">
    <form role="form" method="POST" action="{{ url('/rezultati/update/'.$rezultat->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control" type="text" name="name" value="{{  $rezultat->name  }}" ><br/><br/>
        <input class="form-control" type="date" name="date" value="{{  $rezultat->date  }}" ><br/><br/>
        <textarea class="form-control" type="text" name="results" value="" >{{  $rezultat->results  }}</textarea><br/><br/>
        <input class="btn btn-warning" type="submit" value="Sačuvaj">
</div><br><br>

@endsection
