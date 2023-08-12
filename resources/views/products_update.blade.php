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
                        <h4 class="text-center">Обновить "{{ $menu['Title'] }}"</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="col-5 mx-auto">
                                <form action="{{ route('products.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="Id" value="{{ $menu['id'] }}" class="form-control">
                                    <input type="hidden" name="ImageOld" value="{{ $menu['Image'] }}" class="form-control">
                                    <div class="mb-3">
                                        <label class="form-label">Название</label>
                                        <input type="text" name="Title" value="{{ $menu['Title'] }}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Категория</label>
                                        <select class="form-select" name="CategoryId" aria-label="Default select example">
                                            @foreach ($categoryes as $category)
                                                <option value="{{ $category->id }}" @if ($menu['CategoryId'] == $category->id) checked @endif">
                                                    {{ $category->Title }}
                                                </option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Описание</label>
                                        <textarea name="Description" cols="30" rows="10" class="form-control">{{ $menu['Description'] }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Изображение</label>
                                        <input type="file" name="Image" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Цена</label>
                                        <input type="number" name="Price" value="{{ $menu['Price'] }}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
