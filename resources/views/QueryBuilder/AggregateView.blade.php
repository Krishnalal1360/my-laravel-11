<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Query Builder Aggregate View</title>
</head>
<body>
    <h1>Query Builder Aggregate View</h1>
    <p>This is the view for aggregating price column using Query Builder.</p>
    <ul>
        <li> Count - {{ $data['count'] }}</li>
        <li> Min - {{ $data['min'] }}</li>
        <li> Max - {{ $data['max'] }}</li>
        <li> Sum - {{ $data['sum'] }}</li>
        <li> Avg - {{ $data['avg'] }}</li>
    </ul>
</body>
</html>
