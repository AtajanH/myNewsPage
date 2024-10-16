@extends('layouts.app')

@section('content')
<div class="container text-left">
    <h2 >Изменить пароль</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update.password') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="new_password" class="form-label">Новый пароль</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>
        <div class="mb-3">
            <label for="new_password_confirmation" class="form-label">Подтверждение пароля</label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Изменить пароль</button>
    </form>
</div>
@endsection
