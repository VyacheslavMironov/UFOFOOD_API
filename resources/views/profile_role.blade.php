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
                        <h4 class="text-center">Роли</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4 mt-5">
                            <div class="row">
                                <div class="col-8">
                                    
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <a href="#" class="btn w-50 btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Роль</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Админ</td>
                                    </tr>
                                    <tr>
                                        <td>Клиент</td>
                                    </tr>
                                    <tr>
                                        <td>Модератор</td>
                                    </tr>
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
