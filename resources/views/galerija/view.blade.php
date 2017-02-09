@extends('layouts.app')

@section('content')
<div  class="addSpace">

</div>
<br/>
<div class="container">
    @if(Auth::user())
    <div class="row">
      <div class="col-xs-12">
        <form class="dropzone" id="addImages" action="{{ url('image/do-upload') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="album_id" value="{{ $album->id }}">
        </form>
      </div>
    </div>
        <br><br>

    @endif
                <div style="text-align: center;" class="">
                    <h2 style="text-align: center;" class="titleAnimate"><strong>{{ $album -> name}}</strong></h2>
                    <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
                </div>

                <div class="lightboxDiv row">
                    @foreach ($album->images as $img)
                        {{--<a class="col-xs-12 col-md-3" href="{{ url($img->file_path)}}" data-lightbox="{{$img->file_name}}" data-title="">--}}
                            {{--<img class="lightboxImg" src="{{ url($img->file_path)}}" alt="">--}}
                        {{--</a>--}}
                        <a class="col-xs-12 col-md-3" href="{{ url($img->file_path)}}" data-gallery="gallery" data-toggle="lightbox">
                            <img class="lightboxImg" src="{{ url($img->file_path)}}" class="img-fluid">
                        </a>
                    @endforeach
                </div>
    <br><br>
</div><br><br>

@endsection
