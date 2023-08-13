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
                        <h4 class="text-center">Продукция</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4 mt-5">
                            <div class="row">
                                <div class="col-8">
                                    <a href="{{ route('menu.category') }}" class="btn btn-primary">Категории</a>
                                    <a href="{{ route('ingridient') }}" class="btn btn-primary">Ингридиенты</a>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <a href="{{ route('products.products_create') }}" class="btn w-50 btn-success">Добавить</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th colspan="1">Изображение</th>
                                        <th colspan="2">Наименование</th>
                                        <th colspan="4">Описание</th>
                                        <th colspan="1">Тип</th>
                                        <th colspan="1">Цена</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td colspan="1">
                                                <img src="{{ asset('/storage/'.$menu["Image"]) }}" alt="{{ $menu["Title"] }}" class="img-fluid">
                                            </td>
                                            <td colspan="2">
                                                <a href="{{ route('products.products_update', ['id' => $menu['Id']]) }}">
                                                    {{ $menu["Title"] }}
                                                </a>    
                                            </td>
                                            <td colspan="4">{{ $menu["Description"] }}</td>
                                            <td colspan="1">{{ $menu["Category"] }}</td>
                                            <td colspan="1">{{ $menu["Price"] }} р</td>
                                            <td colspan="2">
                                                <form action="{{ route('products.delete') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="Id" value="{{ $menu["Id"] }}">
                                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить пользователя</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                        <label class="form-label">Укажите роль</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
