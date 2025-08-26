<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Query Builder Insert View</title>
</head>
<body>
    <h1>Query Builder Insert View</h1>
    <p>This is the view for inserting records using Query Builder.</p>
    @foreach($data as $record)
        <li>{{ $record->id }} - {{ $record->name }} - {{ $record->email }} - {{ $record->contact }}</li>
    @endforeach

</body>
</html>
