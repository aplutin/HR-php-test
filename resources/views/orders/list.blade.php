<?php

use App\Database\Entities\Order;

/**
 * @var Order $order
 */
?>
@extends('layout.main')

@section('content-wrapper')
    <h1 class="page-header">Заказы</h1>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Партнер</th>
                <th scope="col">Статус</th>
                <th scope="col">Email</th>
                <th scope="col">Выполнить до</th>
                <th scope="col">Создано</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->getId() }}</th>
                    <td> {{ $order->getPartnerId() }}</td>
                    <td> {{ $order->getStatus() }}</td>
                    <td> {{ $order->getClientEmail() }}</td>
                    <td> {{ $order->getDeliveryDt() }}</td>
                    <td> {{ $order->getCreatedAt() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{ $orders->links() }}
@endsection
