@extends('layouts.app') <!-- Подключение макета (layout) -->

@section('content') <!-- Начало секции контента -->
<div class="container mt-4">
    <h1 class="mb-4">Список партнеров</h1>

    <!-- Кнопка "Добавить партнера" -->
    <a href="{{ route('partners.create') }}" class="btn btn-primary mb-3">Добавить партнера</a>

    <!-- Таблица со списком партнеров -->
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Тип</th>
            <th>Рейтинг</th>
            <th>Адрес</th>
            <th>Скидка</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($partners as $partner) <!-- Цикл для вывода партнеров -->
        <tr>
            <td>{{ $partner->id }}</td>
            <td>{{ $partner->name }}</td>
            <td>{{ $partner->type }}</td>
            <td>{{ $partner->rating }}</td>
            <td>{{ $partner->address }}</td>
            <td>Скидка: {{ $partner->calculateDiscount() }}%</td>
            <td>
                <!-- Кнопка "Редактировать" -->
                <a href="{{ route('partners.edit', $partner) }}" class="btn btn-sm btn-warning me-2">
                    Редактировать
                </a>

                <!-- Кнопка "История" -->
                <a href="{{ route('partners.history', $partner) }}" class="btn btn-sm btn-info me-2">
                    История
                </a>

                <!-- Форма для удаления партнера -->
                <form action="{{ route('partners.destroy', $partner) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены, что хотите удалить партнера?')">
                        Удалить
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection <!-- Конец секции контента -->
