<!DOCTYPE html>
<html>
<head>
    <title>Room Invitation</title>
</head>
<body>

<h2>ルームに招待されました!</h2>
<p>招待を承諾してルームに参加するには、下のリンクをクリックしてください: {{ $room->name }}</p>
<a href="{{ url('/accept-invite/' . $token) }}">Accept Invitation</a>

</body>
</html>