@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Panel artykułów
        </div>
        <div class="card-body">
            <h5 class="card-title">Prześlij artykuł </h5>
            <p class="card-text">Jeżeli napisałeś/as materiał na EyeSoft.pl możesz go wysłać za pomocą formularza.  </p>
         <a href="/formularz">  <button class="button-primary"> Otwórz formularz <a/> </button>
        </div>
        <div class="card-body">
            <h5 class="card-title">Zobacz swoje artykuły </h5>
            <p class="card-text">Chcesz zobaczyć swoje artykuły?   </p>
        </div>
        <div class="alert alert-info" role="alert">
           Ta funkcjonalność nie jest jeszcze dostępna
        </div>
        </div>

@endsection
