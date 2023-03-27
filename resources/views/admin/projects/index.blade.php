@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Tutti i progetti
                </h1>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-success">
                    Aggiungi progetto
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Link</th>
                            <th scope="col">Preview</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->link }}</td>
                                <td>{{ $project->preview }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">
                                        Dettagli
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                    <button class="btn btn-danger">
                                        Elimina
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection