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
            <form></form>

    @endif
                <div style="text-align: center;" class="">
                    <h2 style="text-align: center;" class="titleAnimate"><strong>{{ $album -> name}}</strong></h2>
                    <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
                </div>

                <div class="lightboxDiv row">
                    @foreach ($album->images as $img)
<!--                         <a class="col-xs-12 col-md-3" href="{{ url($img->file_path)}}" data-lightbox="{{$img->file_name}}" data-title="">
                            <img class="lightboxImg" src="{{ url($img->file_path)}}" alt="">
                        </a> -->
                        <div class="col-xs-12 col-md-3">
                        <a  href="{{ url($img->file_path)}}" data-gallery="gallery" data-toggle="lightbox">
                            <img class="lightboxImg" src="{{ url($img->file_path)}}" class="img-fluid"><br/>
                        </a>
                        @if(Auth::user())
                        <form class="col-md-3 albumForm form" action="{{ url('destroy/'.$img->id) }}" method="post">
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="btn btn-danger" type="submit" name="" value="DELETE">
                        </form>
                        @endif

                        </div>
                        
                    @endforeach
                </div>
    <br><br>
</div><br><br>

@if(Auth::user())
<section class="container">
      <form class=" albumForm form" action="{{ url('/galerija/update/' . $album->id ) }}" method="post">
        <input  type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control" id="album_name" type="text" name="album_name" placeholder="{{ $album->name }}"><br>
        <input class="btn btn-warning" type="submit" name="" value="Update">
      </form>
    </section><br/>
<section style="text-align: center; margin-bottom: 200px;">
    <h2 class="text-danger">IZBRIŠITE GALERIJU</h2><br/>
    <form role="form" method="POST" action="{{ url('/galerija/view/delete', $album->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-danger" type="submit" value="DELETE">
    </form>
</section>
@endif

@endsection
