@extends('layouts.app')
<br>
@section('home')
<br>
    <section class="contato py-5" data-aos="fade-up">
        <div class="container">
            <h1 class="text-center mb-5">Fale Conosco</h1>
            <div class="row justify-content-center">
                <div class="col-12 mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4383.931810556852!2d-41.92258415412777!3d-22.487948924507403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x97b5c3f04cb47f%3A0x18bff567445c74c!2sJK%20Transportes%20%7C%20Rio%20das%20Ostras%20-%20RJ!5e0!3m2!1spt-BR!2sbr!4v1729956844111!5m2!1spt-BR!2sbr"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Seu nome" required>
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
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Sua mensagem" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
