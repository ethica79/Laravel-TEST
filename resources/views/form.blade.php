@extends ('template.template')

@section('titre', 'Acceuil')





@section('contenue')


<form action="/confirm" method="GET">
        <div>
            <div>
                <label for="nom" class="form-label">nom</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div>
                <label for="prenom" >prenom</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div>
                <label for="age" >age</label>
                <input type="number" id="age" name="age">
            </div>
            <div>
                <button type="submit">valide</button>
            </div>
        </div>
</form>

@endsection('contenue')