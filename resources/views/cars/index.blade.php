<x-layout>

<div class="row justify-content-center">
    <div class="col-lg-6 m-3">
        <h1>Catalogo auto</h1>
    </div>
</div>


<div class="row justify-content-center">

    <div class="col-lg-6">
        <table class="table">

            <thead>
                <th class="text-primary">Marca</th>
                <th class="text-primary">Modello</th>
                <th class="text-primary">Prezzo</th>
                <th></th>
            </thead>

            <tbody>
            @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->price }}</td>
                        <td></td>
                    </tr>
            @endforeach
                
            </tbody>


        </table>

    </div>   

</div>


</x-layout>
