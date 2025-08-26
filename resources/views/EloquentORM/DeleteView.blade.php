<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eloquent ORM Delete View</title>
</head>
<body>
    <h1>Eloquent ORM Delete View</h1>
    <p>This is the view for deleting records using Eloquent ORM.</p>
    @foreach($data as $record)
        <li>{{ $record->id }} - {{ $record->title }} - {{ $record->description }} - {{ $record->price }}</li>
    @endforeach

</body>
</html>
