@extends('layouts.base')

@section('title', "Панель администратора")
@section('content')
    <div class="container-fluid">
        <div class="container mt-5">
            <br>
            <br>
            <div class="row">
                <div class="col-5">
                    <div class="col-10">
                        <div class="">
                            <div class="mt-2 mb-3">
                                <h4>
                                    <strong>Пользователи</strong>
                                </h4>
                            </div>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">
                                                <a href="{{ route('profiles.index') }}">
                                                    Администраторы
                                                </a>
                                            </div>
                                        </div>
                                        <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">
                                            <a href="{{ route('profiles.index') }}">
                                                Клиенты
                                            </a>
                                        </div>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">
                                            <a href="{{ route('profiles.index') }}">
                                                Модераторы
                                            </a>
                                        </div>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="">
                            <h4 class="text-center mb-3">
                                <strong>Заказы:</strong>
                            </h4>
                            <div class="row">
                                <div class="col-6 card">
                                    <div class="mt-2"></div>
                                    <p class="text-center">Текущие</p>
                                    <ul>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                    </ul>
                                </div>
                                <div class="col-6 card">
                                    <div class="mt-2"></div>
                                    <p class="text-center">Выполненые</p>
                                    <ul>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                        <li># 3g4r344</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <br>
                    <div class="col-12 mb-4">
                        <h4>
                            <strong>Продукция</strong>
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <a href="#">
                                <div class="card p-0">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBkIC09nNqrPo7zaUiVuypkH4S41IjxofDtHzDQN9vLR9SfYdAzG2mas2QBFlhFuRMG0&usqp=CAU" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p>
                                            <strong>
                                                Название
                                            </strong>
                                        </p>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
