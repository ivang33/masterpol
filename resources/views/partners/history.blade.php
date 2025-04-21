@extends('layouts.app')

@section('content')
    <h1>История продаж партнера: {{ $partner->name }}</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Продукция</th>
            <th>Количество</th>
            <th>Дата продажи</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->product->name }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>{{ $sale->sale_date }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('partners.index') }}" class="btn btn-secondary">Назад</a>
@endsection
