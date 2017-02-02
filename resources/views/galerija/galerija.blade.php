@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Galerija</div>

                <div class="panel-body">
                    @foreach ($albums as $album)
                      <div class="col-xs-12">
                      <a href="{{ url('/galerija/view/'.$album->id)}}"><h3>{{ $album->name }}</h3></a>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container">
  <form class="form" action="{{ url('/galerija/save') }}" method="post">
    <input  type="hidden" name="_token" value="{{ csrf_token() }}">
    <input id="album_name" type="text" name="album_name" placeholder="Ime Novog albuma">
    <input type="submit" name="" value="Izradi">
  </form>
</section>
@endsection
