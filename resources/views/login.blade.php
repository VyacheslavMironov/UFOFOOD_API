@extends('layouts.base')

@section('title', "Вход")
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto mt-5">
                    <br>
                    <div class="card p-3">
                        <div class="row mb-4">
                            <h3 class="text-center">Вход</h3>
                        </div>
                        <form action="{{ route('user.code') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputTelephone" class="form-label">Введите номер телефона <b><small class="text-danger">*</small></b></label>
                                <input type="tel"
                                       class="form-control"
                                       name="phone"
                                       id="exampleInputTelephone"
                                       @if (isset($success)) value="{{ $phone }}" @endif
                                       @error('phone') is-invalid @enderror>
                                <small>
                                    @error('phone') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                </small>
                            </div>
                            {{-- Открыть после успешной отправки кода --}}
                            @if (isset($success))
                                @if ($status['code'] == 'ok')
                                    <div class="mb-3">
                                        <label for="exampleInputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="code" value="000000" id="exampleInputPassword">
                                    </div>
                                @endif
                            @endif
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">ОТПРАВИТЬ</button>
                            </div>
                        </form>
                    </div>
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
