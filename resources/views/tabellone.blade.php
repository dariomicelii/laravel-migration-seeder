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

        <h1 class="text-light">Treni</h1>
    </div>
    <div>

    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Treno</th>
            <th scope="col">Partenza</th>
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
      <td class="text-warning">{{ $train->azienda }}</td>
      <td class="text-warning">{{ $train->stazione_di_partenza }}</td>
      <td class="text-warning">{{ $train->stazione_di_arrivo }}</td>
      <td class="text-warning">{{ $train->orario_di_partenza }}</td>
      <td class="text-warning">{{ $train->orario_di_arrivo }}</td>
      <td class="text-warning">{{ $train->totale_carrozze }}</td>
      <td class="text-warning">{{ $train->in_orario ? 'Sì' : 'No' }}</td>
      <td class="text-warning">{{ $train->cancellato ? 'Sì' : 'No' }}</td>
      <td class="text-warning">{{ $train->codice_treno }}</td>
    </tr>

  </tbody>
  @endforeach
</table>
        

    </div>


</body>
</html>