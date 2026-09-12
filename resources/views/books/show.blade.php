@extends('layouts.app')

@section('title', $book['title'])

@section('content')

<div class="container py-4">
<div class="row justify-content-center">

    <div class="col-md-8 col-lg-6">

        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0">Book Details</h4>
            </div>

            <div class="card-body p-4">

                <div class="text-center mb-4">

                    <h2 class="fw-bold text-primary">
                        {{ $book['title'] }}
                    </h2>

                    <span class="badge bg-info text-dark">
                        {{ $book['genre'] }}
                    </span>

                </div>

                <div class="list-group">

                    <div class="list-group-item d-flex justify-content-between">
                        <strong>ID</strong>
                        <span>{{ $book['id'] }}</span>
                    </div>

                    <div class="list-group-item d-flex justify-content-between">
                        <strong>Author</strong>
                        <span>{{ $book['author'] }}</span>
                    </div>

                    <div class="list-group-item d-flex justify-content-between">
                        <strong>Year</strong>
                        <span>{{ $book['year'] }}</span>
                    </div>

                    <div class="list-group-item d-flex justify-content-between">
                        <strong>Genre</strong>
                        <span>{{ $book['genre'] }}</span>
                    </div>

                </div>

            </div>

            <div class="card-footer bg-white text-center py-3">

                <a href="{{ route('books.index') }}"
                   class="btn btn-secondary">
                    ← Back to List
                </a>

            </div>

        </div>

    </div>

</div>

</div>

@endsection