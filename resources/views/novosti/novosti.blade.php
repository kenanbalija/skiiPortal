@extends('layouts.app')

@section('content')
<section class="addSpace">

</section>
<br>

      <div class="container">
          <div class="row">
              <!-- <div class="col-md-6">
                  <img src="img/02.png" class="img-responsive">
              </div> -->
              <div class="col-md-12">
                  <div class="about-text">
                      <div class="section-title">
                          <!-- <h4></h4> -->
                          <h2 style="text-align: center;"><strong>Vijesti</strong></h2>

                          <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
                      </div>
                      <div>
                          @if(Auth::user())
                            <a class="btn btn-warning col-xs-12" href="{{url('/novosti/write')}}">Dodaj novu vijest</a>
                              <br>
                          @endif
                      </div>
                      <div class="novosti_home row">
                      @foreach ($novosti as $news)
                          <div class="col-xs-12 col-sm-6">
                              <a href="{{ url('/novosti/update/'.$news->id )}}">

                              <div class="newsTitle">
                                {{ $news->novost_title }}
                              </div>
                              @if($news->novost_img)
                                    <div  class="newsImageContainer">
                                      <img class="newsImage" src="{{ url('/img/news/'.$news->novost_img)}}">
                                    </div> 
                                @endif
                              <div class="">
                                {!! $news->novost_body !!}
                              </div>
                            </a><br>
                            <section class="row" style="text-align: center;">
                              <div class="col-xs-4">
                                  <div class="fb-share-button " data-href="{{ url('/novosti/update/'.$news->id )}}" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                      <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                                          Podjeli
                                      </a>
                                  </div>
                              </div>
                                  <div class="col-xs-4">
                                      <a class="twitter-share-button ">
                                          href="https://twitter.com/intent/tweet?text={{ url('/novosti/update/'.$news->id )}}">
                                          Tweet
                                      </a>
                                  </div>
                              <div class="col-xs-4">
                                  <div class="g-plus " data-action="share" data-annotation="bubble" data-height="60" data-href="{{ url('/novosti/update/'.$news->id )}}"></div>
                              </div>
                            </section>

                          </div>

                          @endforeach
                      </div>
                  </div>
                  <section style="margin: 0 auto; position: relative; width: 100%; text-align:center;">
                    {{ $novosti->links() }}
                  </section>
                  </div>

              </div>
          </div><br>

@endsection
