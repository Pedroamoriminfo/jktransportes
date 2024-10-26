@extends('layouts.app')
<br>
@section('home')

    <!-- Seção de Banner da Frota -->
    <section id="frota-banner" class="py-5 bg-light" data-aos="fade-up">
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="frotaCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- <div class="carousel-item active">
                                <img src="1.png" class="d-block w-100" alt="Veículo 3">
                            </div> -->
                            <div class="carousel-item active">
                                <img src="{{ url('/assets/img/2.png') }}" class="d-block w-100" alt="Veículo 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/3.pn') }}g" class="d-block w-100" alt="Veículo 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/4.png') }}" class="d-block w-100" alt="Veículo 4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#frotaCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#frotaCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero  text-center py-5" style=" background-image: url('teste.svg'); repeating-radial-gradient();  "
        data-aos="fade-up">
        <div class="container">
            <h1 class="display-4">Conforto e Segurança em Cada Viagem</h1>
            <p class="lead">Transporte executivo de alta qualidade para você ou sua empresa.</p>
            <a href="reserva.html" class="btn btn-primary btn-lg">Solicitar Orçamento</a>
        </div>
    </section>

    <section class="sobre-nos py-5" data-aos="fade-up">
        <div class="container text-center">
            <h2>Bem-vindo à JK Transportes</h2>
            <p>Com anos de experiência, oferecemos o melhor serviço de transporte executivo, com motoristas altamente
                qualificados e uma frota de luxo.</p>
        </div>
    </section>

    <section class="depoimentos py-5 bg-light" data-aos="fade-up">
        <div class="container text-center">
            <h2>Depoimentos de Clientes</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="container mt-1 mb-1">
                            <img class="img-fluid" src="{{ url('/assets/img/cliente1.png') }}" alt=""
                                style="border-radius: 100%; height: 200px;" srcset="">
                        </div>
                        <p>"A JK Transportes proporcionou uma viagem tranquila e confortável. Super recomendo!"</p>
                        <span>- João Silva</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="container mt-1 mb-1">
                            <img class="img-fluid" src="{{ url('/assets/img/cliente2.png') }}" alt=""
                                style="border-radius: 100%; height: 200px;" srcset="">
                        </div>
                        <p>"Serviço de primeira classe, com motoristas profissionais e atenciosos."</p>
                        <span>- Maria Oliveira</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


