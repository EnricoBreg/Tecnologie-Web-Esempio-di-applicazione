@extends('layouts.app')

@section('content')

<div class="container">
    <h1> Inserisci una nuova Spesa </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ URL::action('ExpenseController@store') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="payed_at">Data</label>
          <input type="date" class="form-control" name="payed_at" >
          <small class="form-text text-muted">Inserisci la data del pagamento</small>
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <input type="text" class="form-control" name="description" >
            <small class="form-text text-muted">Inserisci una piccola descrizione</small>
        </div>

        <div class="form-group">
            <label for="amount">Cifra</label>
            <input type="number" class="form-control" name="amount" >
            <small class="form-text text-muted">Inserisci la cifra spesa</small>
        </div>

        <div class="form-group">
            <label for="">Seleziona una Categoria</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
          </div>
        
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ URL::action('ExpenseController@index') }}" class="btn btn-secondary">Indietro</a>

    </form>    
</div>

@endsection
