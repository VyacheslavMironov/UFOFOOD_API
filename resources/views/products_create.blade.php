@extends('layouts.base')

@section('title', "Панель администратора")
@section('content')
    <div class="container-fluid">
        <div class="container mt-5">
            <br>
            <br>
            <div class="row">
                <div class="col-12 mb-4 mt-5">
                    <div class="col-12">
                        <h4 class="text-center">Добавить новый товар</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="col-5 mx-auto">
                                <form action="{{ route('products.create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Название</label>
                                        <input type="text" name="Title" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Категория</label>
                                        <select class="form-select" name="CategoryId" aria-label="Default select example">
                                            @foreach ($categoryes as $category)
                                                <option value="{{ $category->id }}">{{ $category->Title}}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Категория</label>
                                        <textarea name="Description" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Цена</label>
                                        <input type="file" name="Image" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Цена</label>
                                        <input type="number" name="Price" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Создать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
