<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session('status'))
        {{ session('status') }}
    @endif
    <form name="cars" id="cars" method="post" action="{{route('store-form-car')}}" >
        @csrf
        <p>New Team: </p>
        Team Name: <input type="text" id="team_name" name="team_name" >
        Team Score: <input type="text" id="team_score" name="team_score" >
        <input type="submit" value="Add Team">
    </form>
    <table>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        @foreach ($cars as $car)
            <tr>
                <th>{{ $car->team_name }}</th>
                <th>{{ $car->team_score }}</th>
            </tr>
        @endforeach
    </table>
</body>

</html>
