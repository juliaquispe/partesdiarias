<!DOCTYPE html>
        <h3 class="card-title">
            <table border="1" style="background-color:rgb(148, 237, 253);" align="center" width= "100%;">
                <tr style="text-align: rigth">
                    <td><b>Unidad:</b> &nbsp;{{$Unidad->nombre}}</td>
                    <td><b>Sigla:</b>  &nbsp;{{$Unidad->sigla}}</td>
                </tr>
            </table>
        </h3><br><br>
    <table align="center" border="1" width= "80%;">
        <tr style="background-color: rgb(109, 187, 45)">
            <th>Item</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
            @foreach($Personal as $Per)
            @if ($Per->unidad->nombre==$Unidad->nombre)
                <tr>
                    <td style="text-align: center; background-color: rgb(168, 179, 170)">{{$Per->item}}</td>
                    <td style="text-align: center;">{{$Per->nombre}}</td>
                    <td style="text-align: center;">{{$Per->apellido}}</td>
                </tr>
            @endif
        @endforeach
    </table>
</html>
{{-- .table{
    width: 100%;
    border: 1px solid #000;
}
th, td {
    width: 25%;
    text-align: left;
    vertical-align: top;
    border: 1px solid #000;
    border-collapse: collapse;
    padding: 0.3em;
    caption-side: bottom;
}
caption {
    padding: 0.3em;
    color: #fff;
    background: #000;
}
th {
    background: #eee;
} --}}