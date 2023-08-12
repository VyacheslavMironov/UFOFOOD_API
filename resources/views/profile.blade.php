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
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user["LastName"] }}</td>
                                    <td>{{ $user["FirstName"] }}</td>
                                    <td>{{ $user["Phone"] }}</td>
                                    <td>{{ $user["Role"] }}</td>
                                </tr>
                            @endforeach
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
                    <form action="{{ route('create.profiles') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Укажите имя</label>
                                    <input type="text" name="LastName" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Укажите фамилию</label>
                                    <input type="text" name="FirstName" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Номер телефона</label>
                            <input type="tel" id="exampleInputTelephone" name="Phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Укажите роль</label>
                            <select class="form-select" name="Role" aria-label="Default select example">
                                <option selected>Нажмите что бы выбрать</option>
                                <option value="Администратор">Администратор</option>
                                <option value="Клиент">Клиент</option>
                            </select>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#exampleInputTelephone")
                .mask("+7 (999) 999-99-99");
        });
    </script>
@endsection
