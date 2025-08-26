<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eloquent ORM Create View</title>
</head>
<body>
    <h1>Eloquent ORM Create View</h1>
    <p>This is the view for creating records using Eloquent ORM.</p>
     @foreach($products as $record)
        <li>{{ $record->title }} - {{ $record->description }} - {{ $record->price }} - {{ $record->contact }}</li>
    @endforeach
</body>
</html>
