@extends('base', ['titre => 'Liste etudiant'])

@section('vitrine')
<h1>Liste des etudiant</h1>
<ul>
    @foreach ($etudiants as $etudiant)
    <li>{{$etudiants->prenom}} {{ $etudiant->nom}} </li>
    @endforeach
</ul>
@stop