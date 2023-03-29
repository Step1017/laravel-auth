@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')
                <h1>
                    {{ $project->title }}
                </h1>
                @if ($project->image)
                    <div>
                        <img src="{{ asset('storage/'.$project->image) }}" style="width: 300px" alt="">
                    </div>
                @endif
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