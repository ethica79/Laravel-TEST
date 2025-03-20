@extends('template.template')

@section('titre', 'confirm')

@section('contenue')

<div>
    <div class="box">
        <h2>vous avez bien été enregistré</h2>
        <p>nom: {{$nom}}</p>
        <p>prenom: {{$prenom}}</p>
        <p>age: {{$age}}</p>
    </div>
</div>

@endsection('contenue')