@extends('layout.template')

@section('title', 'Shop List')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>All Shop</h1>
    </div>

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($shop as $shop)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ Str::limit($article->body, 50, ' ...') }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No articles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
