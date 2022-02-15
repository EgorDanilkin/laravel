@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {!! Form::open(['route' => 'admin::profile::update']) !!}

    {!! Form::label('name', 'Имя') !!}
    {!! Form::text('name', $user->name) !!}<br>

    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', $user->email) !!}<br>

    {!! Form::label('password', 'Пароль') !!}
    {!! Form::password('password') !!}<br>

    {!! Form::label('current_password', 'Текущий пароль') !!}
    {!! Form::password('current_password') !!}<br>

    {!! Form::submit('Изменить') !!}

    {!! Form::close() !!}
@endsection
