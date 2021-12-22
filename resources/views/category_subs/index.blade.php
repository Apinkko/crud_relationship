@extends('layouts.default')

@section('title', 'Category Sub')

{{-- @dd($category_subs) --}}
@section('content')
<h1 class="text-center">Category Sub</h1>
<a href="{{ route('category_subs.create') }}" class="btn btn-primary mb-3">Add Data</a>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category_subs as $category_sub)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category_sub->name }}</td>
                    <td>{{ $category_sub->category->name }}</td>
                    <td>
                        <a href="{{ route('category_subs.edit', $category_sub->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('category_subs.destroy', $category_sub->id) }}" method='POST'
                            class="d-inline">
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