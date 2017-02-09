@extends('layouts.app')

@section('content')
<section class="addSpace">

</section>
<br><br>
@if(Auth::user())
<div class="container">
    <form role="form" method="POST" action="{{ url('/sponzori/save') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control" type="text" name="name" placeholder="Ime sponzora" required=""><br/><br/>
        <input class="form-control" type="text" name="link" placeholder="Link do sponzora"><br/><br/>
        <input type="file" name="img" placeholder="" required=""><br/><br/>
        <input class="btn btn-warning" type="submit" value="Sačuvaj">
    </form>
</div>
@endif
<br><br>
@endsection
