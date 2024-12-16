@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Уведомления --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Кнопка добавления объекта --}}
        <a href="{{ route('moderator.objects.create') }}" class="btn btn-primary mb-3">Добавить объект</a>

        {{-- Таблица объектов --}}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Регион</th>
                <th>Город</th>
                <th>Тип здания</th>
                <th>Улица</th>
                <th>Дом</th>
                <th>Корпус</th>
                <th>Широта</th>
                <th>Долгота</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($objects as $object)
                <tr>
                    <td>{{ $object->id }}</td>
                    <td>{{ $object->region->name ?? 'N/A' }}</td>
                    <td>{{ $object->city->name ?? 'N/A' }}</td>
                    <td>{{ $object->buildingType->name ?? 'N/A' }}</td>
                    <td>{{ $object->street->name ?? 'N/A' }}</td>
                    <td>{{ $object->house }}</td>
                    <td>{{ $object->corpus ?? '-' }}</td>
                    <td>{{ $object->latitude }}</td>
                    <td>{{ $object->longitude }}</td>
                    <td>{{ $object->status }}</td>
                    <td>
                        <a href="{{ route('moderator.objects.edit', $object) }}" class="btn btn-sm btn-warning">Редактировать</a>
                        <form action="{{ route('moderator.objects.destroy', $object) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены, что хотите удалить этот объект?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center">Нет объектов для отображения</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{-- Пагинация --}}
        <div class="d-flex justify-content-center">
            {{ $objects->links() }}
        </div>
    </div>
@endsection
