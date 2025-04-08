<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
</head>
<body>

    <header></header>

    <div class="container my-5">

        <h1>Treni</h1>
    </div>
    <div>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Treno</th>
            <th scope="col">Psrtenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
            <th scope="col">Codice treno</th>
        </tr>
  </thead>
  @foreach ($trains as $train)
  <tbody>
    <tr>
      <td>{{ $train->azienda }}</td>
      <td>{{ $train->stazione_di_partenza }}</td>
      <td>{{ $train->stazione_di_arrivo }}</td>
      <td>{{ $train->orario_di_partenza }}</td>
      <td>{{ $train->orario_di_arrivo }}</td>
      <td>{{ $train->totale_carrozze }}</td>
      <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
      <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
      <td>{{ $train->codice_treno }}</td>
    </tr>

  </tbody>
  @endforeach
</table>
        

    </div>


</body>
</html>