
<section>

    <form action="{{url('/pet/ocorrencia')}}" method="post">
        @csrf
        <div>
            <p>Qual o Pet?</p>
                <input type="text" placeholder="Gato ou Cachorro?" name="txPet" >
        </div>
        <div>
            <label for="fname">Endereço que o pet se está?</label><br>
                <input type="text" placeholder="Endereço" >
        </div>
        <div>
            <p>Qual o Sexo do Pet?</p>
    
                <input type="text" placeholder="Macho ou Femea?" name="txSx" >

        </div>
        <div>
            <input type="text" placeholder="Observações" name="txObs">
        </div>
        <div>
            <input type="submit" value="Realizar Ocorrencia"/>
        </div>

    </form>

</section>

<section>
    <div>
        <h2> Pets Resgatados  </h2>
    </div>
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
                <td>
                    <a href="/pets-editar/{{$p->idPets}}/editar">Editar</a>
                </td> 
            </tr>
            @endforeach 
        </table>
</section>