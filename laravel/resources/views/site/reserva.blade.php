@extends('layouts.app')

@section('home')
<br>
<section class="reserva py-5" data-aos="fade-up">
    <br>
    <div class="container">
        <h1 class="text-center mb-4">Solicitar Orçamento / Reserva</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Seu nome completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Seu telefone">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Data da Viagem</label>
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Local de Partida</label>
                        <input type="text" class="form-control" id="location" placeholder="Cidade ou endereço de partida" required>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destino</label>
                        <input type="text" class="form-control" id="destination" placeholder="Cidade ou endereço de destino" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Informações Adicionais</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Digite detalhes adicionais, se houver"></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar Solicitação</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


