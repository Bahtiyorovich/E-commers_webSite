@extends('master')
@section('title', 'orders')
@section('content')

    <div class="order-input">
        <h1>Подвердите заказ: </h1>
        <p>Общая стоимость: $125</p>
        <p>Введите ваше имя и номер телефона, чтобы менеджер по продажам мог связаться с вами</p>
        
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Имя: </label>
            <div class="input-place col-sm-6">
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Телефона: </label>
            <div class="input-place col-sm-6">
                <input type="number" class="form-control"  >
            </div>
        </div>
        <button type="button" class="btn-input btn btn-secondary">Подвердите заказ</button>
    </div>

@endsection
