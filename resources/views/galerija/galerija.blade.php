@extends('layouts.app')

@section('content')
<div  class="addSpace">

</div><br>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6">
                <img src="img/02.png" class="img-responsive">
            </div> -->
            <div class="col-md-12">
                <div class="about-text">
                    <div class="section-title">
                        <!-- <h4></h4> -->
                        <h2 style="text-align: center;"><strong>Albumi</strong></h2>
                        <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
                    </div>
                    @foreach ($albums as $album)
                      <div class="col-xs-12 col-sm-6">
                        <a style="text-align:center;" href="{{ url('/galerija/view/'.$album->id)}}"><h3>{{ $album->name }}</h3>
                            <div class="row">
                                @if (count($album->images) > 0)
                                    @for ($i = 0; $i < 1; $i++)
                                        <div class="albumImageCont">
                                            <img  class="albumImage"  src="{{ url($album->images[$i]->file_path)}}" alt="">
                                        </div>

                                    @endfor
                                @endif
                            </div>
                        </a>

                      </div>
                    @endforeach
                </div>

                </div>

            </div>
        </div><br><br>

@if(Auth::user())
    <section class="container">
      <form class=" albumForm form" action="{{ url('/galerija/save') }}" method="post">
        <input  type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control" id="album_name" type="text" name="album_name" placeholder="Ime Novog albuma"><br>
        <input class="btn btn-warning" type="submit" name="" value="Izradi">
      </form>
    </section>
@endif
<br/></br/>
<br/></br/>
<br/></br/>
@endsection
