<x-layout>

<div class="row justify-content-center">
    <div class="col-lg-6 m-3">
        <h1>Catalogo auto</h1>
    </div>
    <div class="col-lg-6 m-3">
        <x-success/>
    </div>
    <div class="col-lg-3 text-end m-3">
        <a class="btn btn-primary"  href="{{  route('cars.create') }}">Aggiungi una nuova macchina al catalogo</a>
    </div>

</div>


<div class="row justify-content-center">

    <div class="col-lg-6">
        <table class="table">

            <thead>
                <th class="text-primary">Marca</th>
                <th class="text-primary">Modello</th>
                <th class="text-primary">Prezzo</th>
                <th class="text-primary">Ordini</th>
                <th></th>
            </thead>

            <tbody>
            @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ Number::currency( $car->price , in: 'EUR', locale: 'it') }}</td>
                        <td>
                            <ul class="list-group">
                                @foreach($car->orders as $order) 
                                <li class="list-group-item">{{ $order->customer }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-secondary" href="{{ route('cars.edit', $car) }}">Modifica</a>
                            <form class="d-inline" action="{{ route('cars.delete', $car ) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-danger" type="submit">Elimina</button>
                            
                            </form>
                        </td>
                    </tr>
            @endforeach
                
            </tbody>


        </table>

    </div>   

</div>


</x-layout>
