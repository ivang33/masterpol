<!-- resources/views/partners/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Добавление партнера</h1>

    <form action="{{ route('partners.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Наименование</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Тип</label>
            <input type="text" name="type" id="type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Рейтинг</label>
            <input type="number" name="rating" id="rating" class="form-control" min="0" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Адрес</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="director_name" class="form-label">ФИО директора</label>
            <input type="text" name="director_name" id="director_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
