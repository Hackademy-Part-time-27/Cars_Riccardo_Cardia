<x-layout>

    <div class="row justify-content-start m-5">
        <div class="col-lg-6">
            <h1>Benvenuti su <b>{{ config('app.name') }}</b></h1>
        </div>
    </div>

    <div class="row text-end">
        <div class="col-lg-3">
            <a class="btn btn-primary" href="{{ route('orders.create') }}">Effettua un nuovo ordine</a>
        </div>
    </div>


</x-layout>