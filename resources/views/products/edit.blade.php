@extends('layouts.default')

@section('title', 'Edit Product')

@section('content')
{{-- @dd($category_subs) --}}
<div class="card">
    <h1 class="text-center">Edit Product</h1>
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="category_id" class="form-label">Category</label>
                </div>
                <div class="col-md-6 ">
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="" disabled>Choose Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="category_id" class="form-label">Category Sub</label>
                </div>
                <div class="col-md-6 ">
                    <select name="category_sub_id" id="category_sub_id" class="form-select">
                        <option value="" disabled>Choose Category</option>
                        @foreach($category_subs as $category_sub)
                        <option value="{{ $category_sub->id }}">{{ $category_sub->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
</div>

@endsection