<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nueva boleta</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/home')}}" class="btn btn-sm btn-success" >
                <i class="ti ti-arrow-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

        <div class="card-body">
            @if ($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="ti ti-bolt"></i>
                    <strong>Por favor!</strong> {{ $error}}
                </div>
                @endforeach

             @endif
            <form role="form" action="{{ url('/home')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" name="description" class="form-control" value="{{old('description')}}"  required>
                </div>

                <div class="form-group">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" class="form-control" value="{{old('mes')}}"  required>
                </div>

                <div class="form-group">
                    <label for="año">año</label>
                    <input type="text" name="año" class="form-control" value="{{old('año')}}"  required>
                </div>

               
                <div class="form-group">
                    <label for="descuentos">Descuentos</label>
                    <input type="numeric" name="descuentos" class="form-control" value="{{old('descuentos')}}"  required>
                </div>

                <div class="form-group">
                    <label for="subtotal">Subtotal</label>
                    <input type="numeric" name="subtotal" class="form-control" value="{{old('subtotal')}}"  required>
                </div>

                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="numeric" name="total" class="form-control" value="{{old('total')}}"  required>
                </div>

                <div class="form-group">
                    <label for="user_id">Usuario</label>
                    <select name="user_id" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{$user->dni }} {{ $user->name }} {{ $user->apellidopaterno}} {{ $user->apellidomaterno}}</option>
                        @endforeach
                    </select>
                </div>
        
                

                <button type="submit" class="btn btn-sm btn-primary">Crear boleta</button>
            </form>

        </div>
      </div>