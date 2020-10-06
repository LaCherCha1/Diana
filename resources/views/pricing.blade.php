@extends('layouts.home') {{-- extender de la plantilla home --}}

@section('title','Planes') 

@section('styles')
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endsection

@section('body')

<div class="section bg-light">
    <div class="container">
            @if (session('comprado'))
            <div class="container">
                    <div class="alert alert-success shadow py-3 text-center mx-auto my-5 rounded alert-dismissible fade show" role="alert">
                            Su compra se ha realizado con éxito, pronto recibirá un correo!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
            </div>
            @endif

        <div class="row card-deck mb-3">
            <!-- plan 1 -->
            <div class="offset-lg-1 col-lg-5 col-md-6 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal text-center">Pago completo</h4>
                    </div>
                    <div class="card-body">
                        {{-- <h4 class="text-center mb-0"><del>$888</del></h4> --}}
                        <h1 class="card-title pricing-card-title text-center">$888</h1>
                        <ul class="bonus list-unstyled mt-3 mb-4">
                            <li class="text-center">
                                <p class="badge badge-light">1 pago de $888 USD</p>
                            </li>
                            <li><i class="fas fa-plus"></i> Acceso de por vida al programa y sus ediciones</li>
                            <li class="text-center">
                                <h5 class="mt-3">Bonus <i class="fas fa-gift"></i></h5>
                            </li>
                            <li><i class="fas fa-plus"></i> Libro de trabajo para manifestar dinero</li>
                            <li><i class="fas fa-plus"></i> Libro de trabajo sobre el arte de recibir</li>
                            <li><i class="fas fa-plus"></i> 3 semanas de asesoría privada por Voxer</li>
                            <li><i class="fas fa-plus"></i> 20% de descuento en un boleto de reunión VIP</li>
                        </ul>
                        {{-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="XFREQ46SZQXS6">
                            <input type="submit" class="seleccionar btn btn-lg btn-block btn-primary" border="0"
                                value="Seleccionar" name="submit" alt="Pago Completo">
                        </form> --}}
                        <a class="btn btn-lg btn-block btn-primary" href="{{ URL('create-payment') }}">Seleccionar</a>
                    </div>
                </div>
            </div>
            <!-- plan 2 -->
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="card  mb-4">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal text-center">Pago parcial</h4>
                    </div>
                    <div class="card-body">
                        
                        <h1 class="card-title pricing-card-title text-center">$444<small class="text-muted">/ cada 22
                                días</small>
                        </h1>
                        <ul class="bonus list-unstyled mt-3 mb-4">
                            <li class="text-center">
                                <p class="badge badge-light">2 pagos de $444 USD</p>
                            </li>
                            <li><i class="fas fa-plus"></i> Acceso de por vida al programa y sus ediciones</li>
                            <li class="text-center">
                                <h5 class="mt-3">Bonus <i class="fas fa-gift"></i></h5>
                            </li>
                            {{-- <li><i class="fas fa-plus"></i> 25% próximo programa</li> --}}
                            <li><i class="fas fa-plus"></i> Libro de trabajo para manifestar dinero</li>
                            <li><i class="fas fa-plus"></i> Libro de trabajo sobre el arte de recibir</li>
                        </ul>
                        {{-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="XFREQ46SZQXS6">
                            <input type="submit" class="seleccionar btn btn-lg btn-block btn-primary" border="0"
                                value="Seleccionar" name="submit" alt="Pago Completo">
                        </form> --}}
                        <a class="btn btn-lg btn-block btn-primary" href="{{ route('crear-subscripcion') }}">Seleccionar</a>

                    </div>
                </div>
            </div>           
        </div>




    </div>
</div>
@endsection
