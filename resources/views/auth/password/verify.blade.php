<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Verificați adresa e-mail</div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('Linkul pentru resetare parola.') }}
                        </div>
                    @endif
                    <a href="{{ url('/reset-password/'.$token) }}">Aici</a>.
                </div>
            </div>
        </div>
    </div>
</div>