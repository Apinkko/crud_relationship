@extends('layouts.default')

@section('title', 'Category')


@section('content')

{{-- @dd($categories) --}}
<h1 class="text-center">Category</h1>
<a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add Data</a>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category Sub</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        @foreach ($category->category_subs as $sub)
                        {{ $sub->name }}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}"
                            class="btn btn-sm btn-primary">Detail</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method='POST' class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="confirm('Are u sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection