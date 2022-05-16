<table border = "1">
    @foreach($pets as $p)
    <tr>
        <td>
            {{$p->idPets}}
        </td>

        <td>
            {{$p->pets}}
        </td>

        <td>
            {{$p->sexo}}
        </td>

        <td>
            {{$p->Obs}}
        </td>

        <td>
            <a href="/pets-view/{{$p->idPets}}">Excluir</a>
        </td>    

    </tr>
    @endforeach 
</table>