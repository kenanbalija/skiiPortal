@extends('layouts.app')

@section('content')
<section class="addSpace">

</section>
@if(Auth::user())
<div class="container">
  <form id="writeStory" class="form-group" role="form" method="POST" action="{{ url('/home/about/save', 1) }}" enctype="multipart/form-data">
    <input  type="hidden" name="_token" value="{{ csrf_token() }}">
      @foreach($texts as $text)
      <textarea class="form-control" type="text" name="naslov1" placeholder="" >@if ($text->naslov1) {{ $text->naslov1 }} @endif</textarea><br>

      <textarea class="form-control" type="text" name="naslov1_body" placeholder="Tekst" required="">
      	@if ($text->naslov1_body)
      		{{ $text->naslov1_body }}
      	@endif
      </textarea><br><br/><br><br/>

      <input  type="hidden" name="_token" value="{{ csrf_token() }}">
    <textarea class="form-control" type="text" name="naslov2" placeholder="" >@if ($text->naslov2) {{ $text->naslov1 }} @endif</textarea><br>
      <textarea class="form-control" type="text" name="naslov2_body" placeholder="Tekst" required="">
       @if ($text->naslov2_body)
          {{ $text->naslov2_body }}
        @endif</textarea><br><br/><br><br/>

      <input  type="hidden" name="_token" value="{{ csrf_token() }}">
    <textarea class="form-control" type="text" name="naslov3" placeholder="" >@if ($text->naslov3) {{ $text->naslov1 }} @endif</textarea> <br>
      <textarea class="form-control" type="text" name="naslov3_body" placeholder="Tekst" required="">
        @if ($text->naslov3_body)
          {{ $text->naslov3_body }}
        @endif
      </textarea><br><br/><br><br/>

      <input  type="hidden" name="_token" value="{{ csrf_token() }}">
    <textarea class="form-control" type="text" name="naslov4" placeholder="" >@if ($text->naslov4) {{ $text->naslov1 }} @endif</textarea><br>
      <textarea class="form-control" type="text" name="naslov4_body" placeholder="Tekst" required="">
       @if ($text->naslov4_body)
          {{ $text->naslov4_body }}
        @endif
      </textarea><br><br/>
      @endforeach

    <input class="btn btn-warning" type="submit" value="Save">
  </form>
</div>
<br>
  @endif
@endsection
