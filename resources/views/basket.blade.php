@extends('master')
@section('title', 'trash')
@section('content')

    <div class="basket">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">count</th>
                    <th scope="col">price</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{asset('./templates/images/child.jpg')}}"> <span>childs shirt</span></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <div class="count-span"><span>1</span></div>
                            <button   type="button" class="btn btn-danger">-</button>
                            <button  type="button" class="btn btn-success">+</button>
                        </div>
                    </td>
                    <td>$ 125</td>
                    <td>$125</td>
                </tr>
            </tbody>
        </table>
        <button id="basket-order" type="button" class="btn btn-primary">оформить заказ</button>
    </div>

@endsection
