<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>{{ $personatge->nombre }} - Detalls</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff7d1; /* Fondo tipo papel */
        }

        .book-card {
            background: #fffdf4;
            border: 2px solid #f5d34e;
            border-radius: 15px;
            box-shadow: 0 6px 16px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 100%;
            max-width: 900px;
        }

        .left-side {
            background-color: #fff6bf;
            border-right: 2px solid #f5d34e;
            flex-shrink: 0;
        }

        .right-side {
            background-color: #ffffff;
            overflow-y: auto;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .badge-wrap {
            white-space: normal;
            word-wrap: break-word;
            display: inline-block;
            max-width: 90%;
        }

        .quote {
            border-left: 4px solid #ffc107;
            padding-left: 10px;
            margin-bottom: 1rem;
            font-style: italic;
            overflow-wrap: break-word;
        }

        @media (max-width: 768px) {
            .left-side {
                border-right: none;
                border-bottom: 2px solid #f5d34e;
            }
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="book-card d-flex flex-column flex-md-row">

        <div class="left-side d-flex flex-column align-items-center justify-content-center p-4 text-center" style="max-width: 350px;">
            <img src="https://cdn.thesimpsonsapi.com/500{{ $personatge->ruta_imagen }}" 
                 alt="{{ $personatge->nombre }}" 
                 class="rounded-circle border border-4 border-warning mb-3"
                 style="width: 160px; height: 160px; object-fit: cover;">

            <h2 class="fw-bold">{{ $personatge->nombre }}</h2>

            @if(isset($personatge->ocupacion))
                <p class="text-muted mb-1">{{ $personatge->ocupacion }}</p>
            @endif

            <div class="mt-2 mb-3">
                @if(isset($personatge->edad))
                    <span class="badge bg-secondary me-1 badge-wrap">{{ $personatge->edad }} años</span>
                @endif
                @if(isset($personatge->genero))
                    <span class="badge bg-primary me-1 badge-wrap">{{ $personatge->genero }}</span>
                @endif
                @if(isset($personatge->estado))
                    @if(strtolower($personatge->estado) === 'alive')
                        <span class="badge bg-success badge-wrap">{{ $personatge->estado }}</span>
                    @else
                        <span class="badge bg-danger badge-wrap">{{ $personatge->estado }}</span>
                    @endif
                @endif

            </div>

            <a href="/" class="btn btn-warning text-white fw-semibold mt-2 px-4 py-2">
                Tornar
            </a>
        </div>

        <div class="right-side p-4 flex-grow-1">
            <h4 class="fw-semibold mb-3 text-center text-md-start">Frases icòniques</h4>

            @if(isset($personatge->frases) && count($personatge->frases) > 0)
                <div class="mx-auto" style="max-width: 500px;">
                    @foreach($personatge->frases as $frase)
                        <p class="quote">"{{ $frase }}"</p>
                    @endforeach
                </div>
            @else
                <p class="text-muted fst-italic text-center">Aquest personatge no té frases registrades</p>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
