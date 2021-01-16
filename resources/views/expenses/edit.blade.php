@extends('layouts.app')

@section('content')

<div class="container">
    <h1> Modifica Spesa </h1>

    <form action="{{ URL::action('ExpenseController@update', $expense) }}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="payed_at">Data</label>
          <input type="date" class="form-control" name="payed_at" value="{{ $expense->payed_at }}">
          <small class="form-text text-muted">Modifica la data del pagamento</small>
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <input type="text" class="form-control" name="description" value="{{ $expense->description }}">
            <small class="form-text text-muted">Modifica una piccola descrizione</small>
        </div>

        <div class="form-group">
            <label for="amount">Cifra</label>
            <input type="number" class="form-control" name="amount" value="{{ $expense->amount }}">
            <small class="form-text text-muted">Modifica la cifra spesa</small>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
        
        <a href="{{ URL::action('ExpenseController@destroy', $expense) }}" class="btn btn-danger">Cancella</a>

        <a href="{{ URL::action('ExpenseController@index') }}" class="btn btn-secondary">Indietro</a>

    </form>    
</div>

@endsection
