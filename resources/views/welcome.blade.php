<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>

        {{-- CSS BOOSTRAP --}}
        <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        {{-- END CSS BOOSTRAP --}}
        <style>
            body{
                font-family: 'Poppins', sans-serif !important;
            }
        </style>
    </head>
    <body class="bg-primary">
        <div class="container d-flex vh-100">
            <div class="row my-auto">
                {{-- INI BARU --}}
                {{-- INI YANG BARU TAK TAMBAHKAN -> NAVY --}}
                {{-- INI BUDI --}}
                @php
                    $image_list = [
                        'https://cdn.wallpapersafari.com/41/38/Mc7ELF.jpg',
                        'https://th.bing.com/th/id/OIP.hlduMA5uG4kl3fw7fBrVjgHaE8?pid=ImgDet&rs=1',
                        'https://th.bing.com/th/id/OIP.3jZOJIPAXxiBbdnIZfuv5gHaEN?pid=ImgDet&w=1406&h=800&rs=1',
                        'https://th.bing.com/th/id/OIP.Y7vDJJa9e-60GoO_BB1qIAHaFP?pid=ImgDet&w=200&h=141&c=7&dpr=1,5',
                    ];
                @endphp
                {{-- INI BARU --}}
                @foreach (range(0,3) as $value)
                    <div class="col-6 col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ $image_list[$value] }}" style="aspect-ratio:4/2.5" class="card-img-top" alt="image-1">
                            <div class="card-body">
                                <h5 class="card-title">Judul {{ $value + 1 }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#xx">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="xx" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        {{-- <small class="fs-4 text-start text-uppercase text-danger fw-bold">title</small> <br>
        <small class="fs-5 text-start text-capitalize fst-italic">sub title</small> <br>
        <small class="fs-6 text-start text-lowercase lh-1">lorem ismallsum dolor sit amet consectetur adipisicing elit. Perferendis eveniet dolorum assumenda corrupti tempore sunt obcaecati dolores itaque, vel eligendi earum voluptatem fuga eaque? Eveniet aut rerum minus animi ratione.</p>

        <div class="row">
            <div class="col-12 col-md-4 col-lg-2">Kolom 1</div>
            <div class="col-12 col-md-4 col-lg-2">Kolom 2</div>
            <div class="col-12 col-md-4 col-lg-2">Kolom 3</div>
        </div> --}}

        {{-- JS BOOSTRAP --}}
        <script src="{{ asset('app-assets/js/bootstrap.bundle.min.js') }}"></script>
        {{-- END JS BOOSTRAP --}}
    </body>
</html>
