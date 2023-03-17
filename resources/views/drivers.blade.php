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
    <form name="drivers" id="drivers" method="post" action="{{route('store-form-driver')}}">
        @csrf
        <p>New Driver: </p>
        Driver Name: <input type="text" id="driver_name" name="driver_name" >
        Driver Team: <input type="text" id="driver_team" name="driver_team" >
        Driver Score: <input type="text" id="driver_score" name="driver_score" >
        <input type="submit" value="Add Team">
    </form>
    <br>
    <table>
        <tr>
            <th>Name</th>
            <th>Team</th>
            <th>Score</th>
        </tr>
        @foreach ($drivers as $driver)
            <tr>
                <th>{{ $driver->driver_name }}</th>
                <th>{{ $driver->driver_team }}</th>
                <th>{{ $driver->driver_score }}</th>
            </tr>
        @endforeach
    </table>
</body>

</html>
