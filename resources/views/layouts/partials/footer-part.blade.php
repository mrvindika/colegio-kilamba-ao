<footer class="footer">
    <div class="text-muted d-sm-flex justify-content-center justify-content-sm-between">
        {{-- COPYRIGHT --}}
        <span class="text-center text-sm-left d-block d-sm-inline-block">
            Copyright &copy;, 
            {{ config('app.name').('. Todos direitos reservados.')}}
        </span>

        {{-- VERSION --}}
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> 
            {{ __('Versão 1.0') }}
        </span>
    </div>

    {{-- SOCIAL MEDIAS --}}
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <a href="" class="d-flex align-items-center">
            <button class="btn btn-social-icon btn-facebook btn-rounded">
                <i class="fab fa-facebook-f"></i>
            </button>
            <div class="ml-1">
                <span class="mb-0">FaceBook</span>
            </div>
        </a>
        <a href="" class="d-flex align-items-center">
            <button class="btn btn-social-icon btn-whatsapp btn-rounded btn-success">
                <i class="fab fa-whatsapp"></i>
            </button>
            <div class="ml-1">
                <span class="mb-0">WhatsApp</span>
            </div>
        </a>
        <a href="" class="d-flex align-items-center">
            <button class="btn btn-social-icon btn-linkedin btn-rounded">
                <i class="fab fa-linkedin-in"></i>
            </button>
            <div class="ml-1">
                <span class="mb-0">LinkedIn</span>
            </div>
        </a>
    </div>  
</footer>