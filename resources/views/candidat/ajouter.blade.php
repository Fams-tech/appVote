@extends('layouts.layout')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}     
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-info text-white">
                Ajouter un candidat
            </div>
            <div class="card-body">
                <form action="{{ route('store.candidat') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" id="" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="">Parti</label>
                        <input type="text" name="parti" id="" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="">Biographie</label>
                        <input type="text" name="biographie" id="" class="form-control"> 
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Validate</label>
                        <input type="text" name="validate" id="" class="form-control"> 
                    </div> --}}
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input type="text" name="photo" id="" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Enregistrer</button>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection