@extends('layouts.app')

@section('content')
    <section class="addSpace">

    </section>
    <br>
    <div class="container">
        <div class="">
            <div class="section-title">
                <!-- <h4></h4> -->
                <h2 style="text-align: center;"><strong>Rezultati</strong></h2>
                <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
            </div>
            <div class="rezultati_home">
                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Naslov Takmičenja</th>
                        <th>Datum Takmičenja</th>
                        <th>Disciplina</th>
                        <th>Rezultat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($results as $result)

                    <tr>
                        <th scope="row">{{  $result->name  }}</th>
                        <td>{{  $result->date  }}</td>
                        <td>{{  $result->disciplina  }}</td>
                        <td>{!!  $result->results !!}
                            @if(Auth::user())
                                <form role="form" method="POST" action="{{ url('/rezultati/delete/'.$result->id) }}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input class="btn btn-danger" type="submit" value="IZBRIŠI">
                                </form>
                                <br>
                                <a class="btn btn-warning" href="{{ url('/rezultati/edit/'.$result->id)}}">EDIT</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            @if(Auth::user())
            <a class="btn btn-warning col-xs-12" href="{{ url('/rezultati/add') }}">Dodaj novi</a>
            @endif
        </div>
    </div><br><br>
    <br><br>
@endsection
