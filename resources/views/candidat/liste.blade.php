@extends('layouts.layout')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">Liste des candidats</div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Parti</th>
                        <th>Biographie</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($candidat as $candidats)
                        <tr>
                            <td>{{ $candidats->id }}</td>
                            <td>{{ $candidats->nom }}</td>
                            <td>{{ $candidats->prenom }}</td>
                            <td>{{ $candidats->parti }}</td>
                            <td>{{ $candidats->biographie }}</td>
                            <td>{{ $candidats->photo }}</td>
                            <td>
                                <a href=" {{ route('edit-candidat',$candidats->id) }} " class="btn btn-warning">Editer</a>
                                <a  onclick="return confirm('Voulez vraiment supprimer ce candidat ?');" href="{{ route('delete-candidat',$candidats->id) }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection