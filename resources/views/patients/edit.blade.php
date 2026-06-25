<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>

<h2>Edit Patient</h2>

<form action="/patients/{{ $patient->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $patient->name }}"><br><br>

    <input type="number" name="age" value="{{ $patient->age }}"><br><br>

    <input type="text" name="gender" value="{{ $patient->gender }}"><br><br>

    <input type="text" name="phone" value="{{ $patient->phone }}"><br><br>

    <input type="text" name="blood_group" value="{{ $patient->blood_group }}"><br><br>

    <input type="text" name="disease" value="{{ $patient->disease }}"><br><br>

    <button type="submit">Update Patient</button>

</form>

</body>
</html>