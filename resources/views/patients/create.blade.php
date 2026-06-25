<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">
    <h3>Add New Patient</h3>
</div>

<div class="card-body">

@if($errors->any())

<div class="alert alert-danger">

<ul>

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif
<form action="/patients" method="POST">

@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Age</label>
<input type="number" name="age" class="form-control">
</div>

<div class="mb-3">
<label>Gender</label>

<select name="gender" class="form-control">
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>

</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label>Blood Group</label>

<select name="blood_group" class="form-control">

<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>

</select>

</div>

<div class="mb-3">
<label>Disease</label>
<input type="text" name="disease" class="form-control">
</div>

<button class="btn btn-success">
Save Patient
</button>

<a href="/patients" class="btn btn-secondary">
Back
</a>

</form>

</div>

</div>

</div>

</body>
</html>