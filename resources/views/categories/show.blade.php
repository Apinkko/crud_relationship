@extends('layouts.default')

@section('title', 'Add Category')

@section('content')
{{-- @dd($category) --}}
<div class="card">
    <h1 class="text-center">Add Category</h1>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-md-6">
                @foreach($category->category_subs as $sub)
                <input type="text" class="form-control" name="name" value="{{ $sub->name }}">
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection