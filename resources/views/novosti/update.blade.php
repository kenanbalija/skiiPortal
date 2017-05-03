@extends('layouts.app')
@section('content')
<section class="addSpace">

</section><br><br>
<section class="container">
    <div class="row">
      <div class="col-xs-12">
          <div class="newsTitle">
           {{ $novosti->novost_title }}
          </div><br/>
          @if($novosti->novost_img)
            <img class="col-xs-12 col-md-6 " src="{{ url('/img/news/'.$novosti->novost_img)}}">
          @endif
          <div class="col-xs-12 col-md-6 " style="">
            {!!$novosti->novost_body !!}
              <div class="col-xs-12">
                  <div class="col-xs-4">
                      <div class="fb-share-button " data-href="{{ url('/novosti/update/'.$novosti->id )}}" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                          <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                              Podjeli
                          </a>
                      </div>
                  </div>
                  <div class="col-xs-4">
                      <a class="twitter-share-button ">
                          href="https://twitter.com/intent/tweet?text={{ url('/novosti/update/'.$novosti->novost_body )}}">
                          Tweet
                      </a>
                  </div>
                  <div class="col-xs-4">
                      <div class="g-plus " data-action="share" data-annotation="bubble" data-height="60" data-href="{{ url('/novosti/update/'.$novosti->id )}}"></div>
                  </div>
              </div>
          </div>
        <section class="row" style="text-align: center;">

        </section>
      </div>


    </div>
</section>
<br>
@if(Auth::user())
<div class="container">
  <h3 style="text-align: center;"><strong>PROMJENITE VIJEST</strong></h3>
  <form class="" role="form" method="POST" action="{{ url('/novosti/update/save', $novosti->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="form-control" type="text" name="novost_title" value="{{ $novosti->novost_title }}"><br/><br/>
    <textarea type="text" name="novost_body" value="">{{ $novosti->novost_body }}</textarea><br/><br>
    <input  class="" size="60" type="file" placeholder="Slika" name="novost_img"><br/>

    <input class="btn btn-warning" type="submit" value="UPDATE">
  </form>
    <br>

</div>
<section class="container">
  <form role="form" method="POST" action="{{ url('/novosti/update/delete', $novosti->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="btn btn-danger" type="submit" value="DELETE">
  </form>
</section>
@endif
<br><br>
@stop
