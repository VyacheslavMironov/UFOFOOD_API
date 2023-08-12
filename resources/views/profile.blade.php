@extends('layouts.base')

@section('title', "Панель администратора")
@section('content')
    <div class="container-fluid">
        <div class="container mt-5">
            <br>
            <br>
            <div class="row">
                <div class="col-12 mb-4 mt-5">
                    <div class="row">
                        <div class="col-8">
                            <h4>Пользователи</h4>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <div class="col-5">
                                <a href="{{ route('profiles.role') }}" class="btn w-100 btn-primary">Роли</a>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <a href="#" class="btn w-100 btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Номер телефона</th>
                                <th scope="col">Роль</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Админ</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Модератор</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                            <tr>
                                <td>Илья</td>
                                <td>Макаров</td>
                                <td>+7 (999) 462-12-88</td>
                                <td>Клиент</td>
                            </tr>
                        </tbody>
                    </table>
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
                            <label class="form-label">Номер телефона</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Укажите роль</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Нажмите что бы выбрать</option>
                                <option value="Администратор">Администратор</option>
                                <option value="Модератор">Модератор</option>
                                <option value="Клиент">Клиент</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Укажите пароль</label>
                        <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
