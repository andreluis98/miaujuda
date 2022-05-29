
<section>

    <form action="{{url('/genero/alterar'. $pets->idPets)}}" method="post">
        {{@csrf_field()}}

    @csrf
    <div>
    <p>Qual o Pet?</p>
  
    <input type="text" placeholder="Gato ou Cachorro?" name="txPet" value="{{$pets->pets}}">

 
    </div>
    <div>
    <label for="fname">Endereço que o pet se está?</label><br>
        <input type="text" placeholder="Endereço" >
    </div>
    <div>
    <p>Qual o Sexo do Pet?</p>
  
    <input type="text" placeholder="Macho ou Femea?" name="txSx" value="{{$pets->sexo}}">
 
    </div>
    <div>
        <input type="text" placeholder="Observações" name="txObs"value="{{$pets->obs}}">
    </div>
    <div>
        <input type="submit" value="Realizar Ocorrencia"/>
    </div>

</form>

</section>