@extends('layouts.guest-layout')

{{-- PAGE TITLE --}}
@section("title", __('Cadastrar Administrador'))

{{-- CONTENT PAGE --}}
@section('main-content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                {{-- REGISTER --}}
                <div class="col-lg-5 d-flex align-items-center justify-content-center auth-form-light">
                    <div class="text-left p-3">
                        <div class="brand-logo">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo">
                        </div>
                        <h4>Administrador</h4>
                        <form class="pt-3">
                        <div class="form-group">
                            <label for="name">Nome completo</label>
                            <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                <i class="fa fa-user text-primary"></i>
                                </span>
                            </div>
                            <input type="text" id="name" class="form-control form-control-lg border-left-0" placeholder="Nome completo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Usuário</label>
                            <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                <i class="fas fa-envelope-open text-primary"></i>
                                </span>
                            </div>
                            <input type="text" name="username" id="username" class="form-control form-control-lg border-left-0" placeholder="Email ou Telemovel">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                <i class="fa fa-lock text-primary"></i>
                                </span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control form-control-lg border-left-0" placeholder="Senha">                        
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirmar senha</label>
                            <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                <i class="fa fa-lock text-primary"></i>
                                </span>
                            </div>
                            <input type="password" name="confirm-password" id="confirm-password" class="form-control form-control-lg border-left-0" placeholder="Confirmar senha">                        
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                            <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input">
                                Concordo com os termos e condições
                            </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index-2.html">Cadastrar</a>
                        </div>
                        </form>
                    </div>
                </div>

                {{-- WELCOME --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center"> 
                    <div class="card-body">
                        <h4 class="card-title">Seja benvindo</h4>
                        <p class="text-justify d-flex align-items-center justify-content-between">
                            <img src="../../images/carousel/banner_4.jpg" class="ml-2 mb-2 w-50" alt="img">
                            <img src="../../images/carousel/banner_5.jpg" class="ml-2 mb-2 w-50" alt="img">
                        </p>

                        <h5 class="card-title">Quem somos?</h5>
                        <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <h5 class="card-title">Onde estamos?</h5>
                        <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <h5 class="card-title">Nosso objectivo?</h5>
                        <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
