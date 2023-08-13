@extends('layouts.base')

@section('title', "Панель администратора")
@section('content')
    <div class="container-fluid">
        <div class="container mt-5">
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="col-12 mb-5 mx-auto">
                        <div class="card w-100 p-4">
                            <div class="mb-4">
                                <h4 class="text-center">Добавить ингридиент</h4>
                            </div>
                            <form action="{{ route('ingridient.create') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label">Укажите название ингридиента</label>
                                  <input type="text" name="Title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Выберите категорию</label>
                                    <select class="form-select" name="CategoryId" aria-label="Default select example">
                                        @foreach ($categoryes as $category)
                                            <option value="{{ $category->id }}">{{ $category->Title }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                <button type="submit" class="btn btn-success">Добавить</button>
                              </form>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-hover ">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Наименование ингридиента</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingridients as $ingridient)
                            <tr>
                                <th>{{ $ingridient->id }}</th>
                                <td>{{ $ingridient->Title }}</td>
                                <td class="w-100 d-flex justify-content-start">
                                    <form action="{{ route('ingridient.delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="Id" value="{{ $ingridient->id }}">
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
@endsection
