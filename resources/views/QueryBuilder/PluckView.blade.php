<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Query Builder Pluck View</title>
</head>
<body>
    <h1>Query Builder Pluck View</h1>
    <p>This is the view for plucking records using Query Builder.</p>
    @foreach($data as $id => $email)
        <li>{{ $id }} - {{ $email }}</li>
    @endforeach

</body>
</html>
