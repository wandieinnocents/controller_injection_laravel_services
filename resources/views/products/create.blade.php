@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Product</h1>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"> <br>
                @if ($errors->has('name'))
                    <div class="alert alert-danger" role="alert">

                        {{ $errors->first('name') }}
                    </div>
                @endif

            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control">
                    <option value="">-- Select --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select><br>

                @if ($errors->has('category_id'))
                    <div class="alert alert-danger" role="alert">

                        {{ $errors->first('category_id') }}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
