 <nav class="navbar navbar-expand-lg bg-black fixed-top">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand"><img class="navbar-brand" style="object-fit: cover; height: 80px;" src="{{ url('assets/img/logo.png') }}"></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link" style="color: aliceblue;">Início</a></li>
                    <li class="nav-item"><a href="{{ url('sobre') }}" class="nav-link" style="color: aliceblue;">Sobre Nós</a></li>
                    <li class="nav-item"><a href="{{ url('servicos') }}" class="nav-link" style="color: aliceblue;">Serviços</a></li>
                    <li class="nav-item"><a href="{{ url('contato') }}" class="nav-link" style="color: aliceblue;">Contato</a></li>
                    <li class="nav-item"><a href="{{ url('reserva') }}" class="nav-link" style="color: aliceblue;">Reserva</a></li>
                </ul>
            </div>
        </div>
    </nav>

