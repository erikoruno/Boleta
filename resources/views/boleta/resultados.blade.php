@if ($boletas->isNotEmpty())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Usuario</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Descuentos</th>
                <th>Subtotal</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($boletas as $boleta)
                <tr>
                    <td>{{ $boleta->id }}</td>
                    <td>{{ $boleta->user->name }}</td>
                    <td>{{ $boleta->user->apellidopaterno }}</td>
                    <td>{{ $boleta->user->apellidomaterno }}</td>
                    <td>{{ $boleta->descuentos }}</td>
                    <td>{{ $boleta->subtotal }}</td>
                    <td>{{ $boleta->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No se encontraron boletas para el año y mes seleccionados.</p>
@endif