@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавление объекта</h1>
        <form action="{{ route('moderator.objects.store') }}" method="POST">
            @csrf
            @include('moderator.objects.partials.form')
            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </div>
@endsection
