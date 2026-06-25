<!DOCTYPE html>
<html>
<head>
    <title>MedSync - Patients</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">🩺 MedSync - Patient Records</h3>

            <a href="/patients/create" class="btn btn-light">
                + Add Patient
            </a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="GET" action="/patients" class="mb-3">

<div class="input-group">

<input
type="text"
name="search"
class="form-control"
placeholder="Search Patient">

<button class="btn btn-primary">
Search
</button>

</div>

</form>
            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Blood Group</th>
                        <th>Disease</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($patients as $patient)

                <tr>

                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->blood_group }}</td>
                    <td>{{ $patient->disease }}</td>

                    <td>

                        <a href="/patients/{{ $patient->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/patients/{{ $patient->id }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this patient?')">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="7" class="text-center">
                        No Patients Found
                    </td>
                </tr>

                @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>