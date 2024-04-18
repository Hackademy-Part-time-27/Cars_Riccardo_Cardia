<x-layout>
    <div class="row jutify-content-start m-4">
        <div class="col-lg-6">
            <h1>Elenco degli ordini</h1>
        </div>
    </div>

    <div class="row justify-content-center m-3">
        <div class="col-lg-6">
            <table class="table">
                <thead>
                    <th>Auto</th>
                    <th>Proprietario</th>
                    <th>Accessori</th>
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
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>