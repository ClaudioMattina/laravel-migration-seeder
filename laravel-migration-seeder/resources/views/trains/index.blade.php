@extends('layouts.main')

@section('main-content')

    <div class="row">
        @foreach ($trenis as $treno)
            <div class="col-3 d-flex justify-content-center my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$treno ->station_img}}" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">{{$treno ->azienda}}</p>
                      <p class="card-text">Partenza il giorno: {{$treno ->data}}</p>
                      <p class="card-text">Stazione di Partenza: {{$treno ->stazione_di_partenza}}</p>
                      <p class="card-text">Stazione di Arrivo: {{$treno ->stazione_di_arrivo}}</p>
                      <p class="card-text">Orario di Partenza: {{$treno ->orario_partenza}}</p>
                      <p class="card-text">Orario di arrivo: {{$treno ->orario_arrivo}}</p>
                      <p class="card-text">Treno code: {{$treno ->codice_treno}}</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center my-4">
            {{$trenis->links()}}
        </div>
    </div>

@endsection