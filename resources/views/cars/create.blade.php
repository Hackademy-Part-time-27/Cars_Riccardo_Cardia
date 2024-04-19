<x-layout>

    <div class="row justify-content-start m-5">
        <div class="col-lg-6">
            <h1>{{ $title }}</b></h1>
            <x-success/>
        </div>
        <div class="col-lg-3 text-end m-3">
            <a class="text-secondary" href="{{ route('cars.index') }}">Indietro</a>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col-lg-6">

            <form action="{{  $route }}" method="POST">
                @csrf
                @if($car->id)
                @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Marca</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name" value="{{ $value_name }}">
                    @error('name') <span class="text-danger ">{{ $message }}</span>  @enderror
                </div>

                
                <div class="mb-3">
                    <label for="model" class="form-label">Modello</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror " id="model" name="model" value="{{ $value_model }}" >
                    @error('model') <span class="text-danger ">{{ $message }}</span>  @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror " id="price" name="price" value="{{ $value_price }}" >
                    @error('price') <span class="text-danger ">{{ $message }}</span>  @enderror
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">{{ $btn }}</button>
                </div>




            </form>
        </div>
    </div>


</x-layout>