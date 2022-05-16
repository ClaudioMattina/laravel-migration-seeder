@extends('layouts.main')

@section('main-content')

   @foreach ($trenis as $treno)
       <h1>
           {{$treno -> azienda}}
       </h1>
   @endforeach
@endsection