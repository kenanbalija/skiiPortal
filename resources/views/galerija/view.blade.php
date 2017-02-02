@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form class="dropzone" id="addImages" action="{{ url('image/do-upload') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="album_id" value="{{ $album->id }}">
        </form>
      </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $album -> name}}</div>

                <div class="panel-body">
                    @foreach ($album->images as $img)
                      <img src="{{ url($img->file_path)}}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
