<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-section {
            background: url('your-image.jpg') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 600;
        }
        .btn-primary-custom {
            background-color: #0069d9;
            color: white;
            padding: 10px 20px;
            font-size: 1.1rem;
            border: none;
            border-radius: 30px;
        }
        .btn-primary-custom:hover {
            background-color: #0056b3;
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navbar and other content goes here -->

    <div class="hero-section">
        <h1>Welcome to Our Application</h1>
        <p>Discover amazing features and manage your inventory easily.</p>
        <a href="{{ route('items.index') }}" class="btn btn-primary-custom">Get Started</a>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
