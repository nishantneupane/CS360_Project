<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Compliance Dashboard Template</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- Optional nav items -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2">
                        <!-- Logic commented out; buttons are now placeholders -->
                        <!--
                        <?php
                        // if (!isset($_SESSION['uid'])) {
                        //     genLoginForm();
                        // } else {
                        //     genLogoutForm();
                        // }
                        ?>
                        -->
                        <button class="btn btn-outline-light btn-sm">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light btn-sm">Logout</button>
                    </li>
                </ul>
           </div>
        </div>
    </nav>

    <div class="container my-4">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col">
                <h2>Welcome, John Doe!</h2>
            </div>
        </div>
        
        <!-- Compliance Buttons Section -->
        <div class="row g-4">
            <div class="col-md-3">
                <button class="btn btn-light text-center w-100 p-3 border" style="height:150px;">
                    <h5 class="mb-2">Res Owners Compliance</h5>
                    <!-- Placeholder for icon/chart -->
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-light text-center w-100 p-3 border" style="height:150px;">
                    <h5 class="mb-2">Res Tenants Compliance</h5>
                    <!-- Placeholder for icon/chart -->
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-light text-center w-100 p-3 border" style="height:150px;">
                    <h5 class="mb-2">Commercial Owners Compliance</h5>
                    <!-- Placeholder for icon/chart -->
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-light text-center w-100 p-3 border" style="height:150px;">
                    <h5 class="mb-2">Commercial Tenants Compliance</h5>
                    <!-- Placeholder for icon/chart -->
                </button>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>