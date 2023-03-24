@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    {{ $project->title }}
                </h1>
                <h2>
                    {{ $project->preview }} {{-- Aggiungere immagine --}}
                </h2>
                <h6>
                    Slug: {{ $project->slug }}
                </h6>
                <p>
                    {{ $project->description }}
                </p>
                <h5>
                    {{ $project->link }}
                </h5>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-success">
                    Aggiungi progetto
                </a>
            </div>
        </div>
    </div>
@endsection