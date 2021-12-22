@extends('layouts.default')

@section('title', 'Edit Category Sub')

@section('content')
{{-- @dd($categories) --}}
<div class="card">
    <h1 class="text-center">Edit Category Sub</h1>
    <div class="card-body">
        <form action="{{ route('category_subs.update', $category_sub->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $category_sub->name }}">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="category_id" class="form-label">Category</label>
                </div>
                <div class="col-md-6 ">
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="" disabled>Choose Category
                        </option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }} ">
                            {{
                            $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection