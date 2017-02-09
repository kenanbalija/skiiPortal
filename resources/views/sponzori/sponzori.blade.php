@extends('layouts.app')

@section('content')
<section class="addSpace">

</section>
<br>
<div class="container">
    <div class="">
        <div class="section-title">
            <!-- <h4></h4> -->
            <h2 style="text-align: center;"><strong>Sponzori</strong></h2>
            <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
        </div>
        <div>

        </div>
        <div class="rezultati_home row">

                @foreach ($sponzori as $sponz)
                    <div style="margin-top: 10px; margin-bottom: 10px;" class="col-xs-12 col-md-4">
                        <h3><strong>{{  $sponz->name  }}</strong></h3>
                        <a href="{{ $sponz->link }}"><img style="width: 100%; height: 100%;" src="{{url('/img/sponzori/'.$sponz->img)}}" alt=""></a>
                        <br><br>
                        @if(Auth::user())
                        <form role="form" method="POST" action="{{ url('/sponzori/delete/'.$sponz->id) }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                        @endif
                    </div>
                @endforeach
            <br>
                    @if(Auth::user())
                        <a class="btn btn-warning col-xs-12" href="{{ url('/sponzori/add') }}">Dodaj novog sponzora</a>
                    @endif

        </div>
    </div>

</div><br><br>
@endsection