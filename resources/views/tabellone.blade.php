<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
</head>
<body>
    <div class="container">

        <h1>Treni</h1>
        @foreach ($trains as $train)
            <div class="d-flex align-items-center justify-content-between border-bottom mb-3">
                <strong>Treno:</strong> {{ $train->azienda }}<br>
                <strong>Partenza:</strong> {{ $train->stazione_di_partenza }}<br>
                <strong>Arrivo:</strong> {{ $train->stazione_di_arrivo }}<br>
                <strong>Orario di partenza:</strong> {{ $train->orario_di_partenza }}<br>
                <strong>Codice treno:</strong> {{ $train->codice_treno }}<br>
            </div>
    
        @endforeach
    </div>


</body>
</html>