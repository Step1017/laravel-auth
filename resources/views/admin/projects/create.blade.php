@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Crea Progetto
                </h1>
            </div>
        </div>
        @if ($errors->any())
        <div class="row mb-4">
            <div class="col">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="title"
                            name="title"
                            required
                            maxlength="128" 
                            placeholder="Inserisci il titolo...">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input 
                            type="textarea" 
                            class="form-control" 
                            id="description"
                            name="description"
                            required
                            maxlength="2000" 
                            placeholder="Inserisci la descrizione...">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="link"
                            name="link"
                            required
                            maxlength="255" 
                            placeholder="Inserisci il link del progetto...">
                    </div>
                    <div class="mb-3">
                        <label for="preview" class="form-label">Preview</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="preview"
                            name="preview"
                            required
                            maxlength="255" 
                            placeholder="Inserisci anteprima del progetto...">
                    </div>
                    <div class="btn-box mt-5">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-warning text-light">
                            <i class="fa-solid fa-rotate-left"></i>
                        </a>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection