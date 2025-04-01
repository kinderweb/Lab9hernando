<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4 text-center" style="width: 400px;">
        <h2 class="text-success">Registration Successful</h2>

        <p><strong>First Name:</strong> {{ $user['Fname'] }}</p>
        <p><strong>Last Name:</strong> {{ $user['Lname'] }}</p>
        <p><strong>Email:</strong> {{ $user['email'] }}</p>

        <a href="/register" class="btn btn-secondary mt-3">Go Back</a>
    </div>
</body>
</html>
