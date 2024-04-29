<H2>UNIVERSIDAD TECNOLÓGICA DE LOS ANDES - UTEA</H2>
<h2>--------------------------------------------</h2>
{{-- @if ($firstBoletaId)
  <h2>Boleta de pago N° {{ $firstBoletaId }}</h2>
  <h2>---------------------------------------</h2>
@else
    <h2>No se encontraron boletas</h2>
@endif --}}

{{-- <style>
    .table-bordered {
    border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #dee2e6;
}

.table-bordered th {
    background-color: #f8f9fa; /* Color de fondo para el encabezado */
    text-align: left; /* Alinear texto a la izquierda */
}

.table-bordered td {
    padding: 8px; /* Espaciado dentro de las celdas */
}
</style> --}}

<style>
 
 .fixed-width {
    width: 150px; /* Ancho fijo para la columna de etiquetas */
}

.table th, .table td {
    padding: 10px; /* Espaciado uniforme para todas las celdas */
    text-align: left; /* Alinea texto a la izquierda para consistencia */
}

.wide-spacing {
    padding: 15px; /* Ajusta el espaciado interno para más claridad */
}
</style>
<div class="card shadow">
   
    <div class="card-body">
        {{-- @if(session('notification'))
          <div class="alert alert-success" role="alert">
              {{session('notification')}}
          </div>
        @endif --}}

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


    </div>
    <div class="table-responsive">
      <!-- Projects table -->
      @if($boletas->isNotEmpty())
    <table class="table table-bordered align-items-center table-flush">
      {{-- <table class="table align-items-center table-flush"> --}}
        <thead class="thead-light">
         
           
            
          </tr>
        </thead>
        <tbody>
            @foreach ($boletas as $boleta)           
          <tr>
            <th class="wide-spacing">Nro boleta: </th>
            <td class="wide-spacing">{{ $boleta->id}}</td>  
          </tr>  
          
          <tr>  
            <th class="wide-spacing">Nombre: </th>
            <td class="wide-spacing">{{$boleta->user->name}}</td>
          </tr>
          <tr>
            <th class="fixed-width">Apellido Paterno: </th>
            <td class="wide-spacing">{{$boleta->user->apellidopaterno}}</td>
          </tr>
          <tr>
            <th class="wide-spacing">Apellido Materno: </th>
            <td class="wide-spacing">{{$boleta->user->apellidomaterno}}</td>
          </tr>
          <tr>
            <th class="wide-spacing">Descripcioón: </th>
            <td class="wide-spacing">{{ $boleta->description }}</td>
          </tr>
          <tr>
            <th class="wide-spacing">Mes: </th>
            <td class="wide-spacing">  {{ $boleta->mes  }}      </td>
          </tr>
          <tr>
            <th class="wide-spacing">Año: </th>
            <td class="wide-spacing">  {{$boleta->año  }}          </td>
            </tr>
           
             <tr>
              <th class="wide-spacing">Descuento: </th>
              <td class="wide-spacing">{{$boleta->descuentos}}</td>
              </tr>
              <tr>
                <th class="wide-spacing">Subtotal: </th>
                <td class="wide-spacing">{{$boleta->subtotal}}</td>
              </tr>
              <tr>
                <th class="wide-spacing">Total: </th>
                <td class="wide-spacing">{{ $boleta->total}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <p>No se encontraron boletas para el año y mes seleccionados.</p>
      @endif
    </div>
  </div>