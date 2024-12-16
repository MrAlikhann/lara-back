@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактирование объекта</h1>

        <form action="{{ route('moderator.objects.update', $object) }}" method="POST">
            @csrf
            @method('PUT')
            @include('moderator.objects.partials.form', ['object' => $object])

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
