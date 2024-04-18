<x-layout>

    <div class="row justify-content-start m-5">
        <div class="col-lg-6">
            <h1>Modifica ordine!</b></h1>
            <x-success/>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col-lg-6">
            <form action="{{ route('orders.update', $order) }}" method="POST">
                @csrf
                @method('PUT')

            <div class="mb-3">
                <label for="car_id" class="form-label">Seleziona  Auto</label>
                <select class="form-select" name="car_id" aria-label="Default select example">
                        @foreach($cars as $car)
                            <option @selected($car->id === $order->car_id) value="{{ $car->id }}">{{ $car->name }} - {{ $car->model }}</option>
                        @endforeach
                </select>
            </div>

            <div class="mb-3">  
                @foreach($accessories as $accessory)
                    <div class="form-check">
                        <input @checked($order->accessories->contains($accessory->id)) class="form-check-input" type="checkbox" value="{{ $accessory->id }}" name="accessories[]" id="accessories[]">
                        <label class="form-check-label" for="accessories[]">
                            {{ $accessory->name }}
                        </label>
                    </div>
                @endforeach
            </div>  

            <div class="mb-3">
                <label for="customer" class="form-label">Proprietario</label>
                <input type="text" class="form-control" id="customer" name="customer" value="{{ old('customer', $order->customer) }}">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Procedi all'ordine</button>
            </div>




            </form>
        </div>
    </div>


</x-layout>