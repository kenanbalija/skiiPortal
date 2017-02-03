@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Rezultati</div>

                <div class="panel-body">
                    <table>
                      <tr>
                        <th>Naslov Takmičenja</th>
                        <th>Datum Takmičenja</th>
                        <th>Rezultat Takmičenja</th>
                        <th>DELETE</th>

                      </tr>
                      @foreach ($results as $result)
                        <tr>
                          <th>{{  $result->name  }}</th>
                          <th>{{  $result->date  }}</th>
                          <th>{{  $result->results  }}</th>
                          <th>
                            <form role="form" method="POST" action="{{ url('/rezultati/delete/'.$result->id) }}" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input class="btn-primary" type="submit" value="DELETE">
                            </form>
                          </th>

                        </tr>
                      @endforeach
                    </table>
                </div>
                <a href="{{ url('/rezultati/add') }}">Dodaj novi</a>
            </div>
        </div>
    </div>
</div>
@endsection
