<x-layout>
    <div class="row jutify-content-start m-4">
        <div class="col-lg-6">
            <h1>Elenco degli ordini</h1>
            <x-success/>
        </div>
        <div class="col-lg-3 text-end">
            <a class="btn btn-primary" href="{{ route('orders.create') }}">Effettua un nuovo ordine</a>
        </div>
    </div>



    <div class="row justify-content-center m-3">
        <div class="col-lg-6">
            <table class="table">
                <thead>
                    <th class="text-primary">Auto</th>
                    <th class="text-primary">Proprietario</th>
                    <th class="text-primary">Accessori</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->car->name }} - {{ $order->car->model }}</td>
                        <td>{{ $order->customer }}</td>
                        <td>
                            @foreach($order->accessories as $accessory)
                            <ul class="list-group">
                                <li class="list-group-item">{{ $accessory->name }}</li>
                            </ul>
                            @endforeach
                        </td>
                        <td>
                            <a class="btn btn-sm btn-secondary" href="{{ route('orders.edit', $order) }}">Modifica</a>
                            <button type="button" class="btn btn-danger btn-sm m-2 d-inline" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                                    data-action="{{ route('orders.destroy', $order)}}"> 
                                Elimina
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare definitivamente ordine ?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Procedendo, non si potrà più recuperare l'ordine
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Indietro</button>
            <form action="" method="POST" id="formdelete">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Elimina ordine</button>
            </form>
            
        </div>
        </div>
    </div>
    </div>
</x-layout>