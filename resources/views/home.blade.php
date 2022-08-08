<x-main title="Home">
        @if(session('status'))
        <div class="container">
                <div class="row">
                        <div class="col-md-6 m-auto">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>{{ session('status') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div> 
                        </div>
                </div>
        </div>
        @endif
        <div class="container">
                <div class="row">
                        <div class="col-md-6 m-auto">
                                <div class="card">
                                        <div class="card-header">Welcome! </div>
                                        <div class="card-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, molestiae labore id nesciunt, sequi mollitia porro harum reprehenderit illum hic sapiente fugit voluptates ratione voluptatum consequuntur quibusdam! Facilis, asperiores veritatis!</div>
                                </div>
                        </div>
                </div>
        </div>
</x-main>