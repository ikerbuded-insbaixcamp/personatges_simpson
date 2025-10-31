<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>The Simpsons Personatges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .badge-wrap {
            white-space: normal;
            word-wrap: break-word;
            display: inline-block;
            max-width: 90%;
        }
    </style>
</head>
<body class="bg-warning-subtle d-flex flex-column align-items-center justify-content-center vh-100">

    <div class="card shadow-lg text-center border-0" style="max-width: 400px;">
        <div class="card-body">
            <img src="https://cdn.thesimpsonsapi.com/500{{ $personatge->ruta_imagen }}" 
                 alt="{{ $personatge->nombre }}" 
                 class="rounded-circle border border-4 border-warning mb-3" 
                 style="width: 160px; height: 160px; object-fit: cover;">

            <h2 class="card-title fw-bold mb-3">{{ $personatge->nombre }}</h2>

            <div class="mb-3">
                @if(isset($personatge->ocupacion))
                    <span class="badge bg-info text-dark me-1 badge-wrap">{{ $personatge->ocupacion }}</span>
                @endif

                @if(isset($personatge->edad))
                    <span class="badge bg-secondary badge-wrap">{{ $personatge->edad }} anyss</span>
                @endif
            </div>

            @if(isset($frase) && !empty($frase))
                <p class="fst-italic fs-5 text-dark">"{{ $frase }}"</p>
            @endif

            <a href="{{ route('personatge.show', $personatge->id) }}" 
               class="d-block mt-3 text-decoration-none fw-semibold text-primary">
               Veure frases de {{ $personatge->nombre }}
            </a>

            <form method="GET" action="/" class="mt-4">
                <button class="btn btn-warning text-white fw-semibold px-4 py-2">
                    Altre personatge
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
