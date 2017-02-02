@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vijesti</div>

                <div class="panel-body">
                    <div class="row">
                      @foreach ($novosti as $news)
                        <a href="{{ url('/novosti/update/'.$news->id )}}">
                          <div class="col-xs-12">
                              <div class="">
                                {{ $news->novost_title }}
                              </div>
                              <img style="width: 100%; height: 100%;" src="{{ url('/img/news/'.$news->novost_img)}}">
                              <div class="">
                                {{ $news->novost_body }}
                              </div>
                          </div>
                        </a>
                      @endforeach

                    </div>
                </div>
                <section>
                  <a href="{{ url('/novosti/write')}}">NOVO</a>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
