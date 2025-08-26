<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eloquent ORM Condtional Clause View</title>
</head>
<body>
    <h1>Eloquent ORM Conditional Clause View</h1>
    <p>This is the view for conditional clause records using Eloquent ORM.</p>
    @foreach($data as $record)
        <li>{{ $record->id }} - {{ $record->title }} - {{ $record->description }} - {{ $record->price }}</li>
    @endforeach

</body>
</html>
