@extends ('template.template')

@section('titre', 'Acceuil')





@section('contenue')


<form action="/form" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="number" name="age" placeholder="Âge">
    <button type="submit">Envoyer</button>
</form>


@endsection('contenue')