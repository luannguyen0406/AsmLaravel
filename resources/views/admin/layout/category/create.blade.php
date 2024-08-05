@extends('admin.layout.master')
@section('title')
    Create
@endsection
@section('content')
    <form action="{{ route('addCate')  }}" method="post" enctype="multipart/form-data">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="col-md-10">
            <h2 class="mt-3 mb-3">Category New</h2>
            <div class="mt-3">
                <label for="posts_name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" id="name"
                    class="form-control">
            </div>
            <div class="mt-3">
                <input type="submit" value="Thêm">
            </div>
        </div>
    </form>
@endsection
<style>
    form {
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        max-width: 800px;
        background-color: #f9f9f9;
    }

    /* Tinh chỉnh tiêu đề và các trường nhập liệu */
    h2 {
        font-size: 24px;
        color: #333;
        text-align: center;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input[type="text"],
    input[type="file"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
