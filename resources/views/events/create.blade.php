@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>     
         <div class="form-group">
            <label for="title">Imagem do evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento">
        </div>       
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" name="date" id="date" >
        </div>   
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Cidade do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title"> Descrição:</label>
        </div>
        <textarea name="description" id="description" class="form-control" placeholder="Oque vai acontecer no evento..."></textarea>
        
        <div class="form-group">
            <label for="title">Adicione itens de infrestrutura:</label>
            <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
            <input type="checkbox" name="items[]" value="Open bar"> Open bar
            </div>
            <div class="form-group">
            <input type="checkbox" name="items[]" value="Open food"> Open food
            </div>
            <div class="form-group">
            <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        
        <input type="submit" class="btn btn-primary"  value="Criar evento">
    </form>
</div>

@endsection