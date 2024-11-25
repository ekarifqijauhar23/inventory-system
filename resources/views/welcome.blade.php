<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: url('https://static.vecteezy.com/system/resources/previews/011/635/825/non_2x/abstract-square-interface-modern-background-concept-fingerprint-digital-scanning-visual-security-system-authentication-login-vector.jpg/1500x500') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
        }

        .card-custom {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card-custom:hover {
            transform: scale(1.05);
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-3">Welcome to Our App!</h1>
            <p class="lead">A great place to start your journey with amazing features.</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Easy to Use</h5>
                        <p class="card-text">Our platform is user-friendly and designed to provide a seamless experience for everyone.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Secure</h5>
                        <p class="card-text">We prioritize your security with robust encryption and safe authentication methods.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Responsive</h5>
                        <p class="card-text">Our app is designed to work perfectly on any device, whether it’s a desktop, tablet, or smartphone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="text-center py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2>Ready to start?</h2>
            <p>Sign up or log in to explore all the features we have to offer!</p>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg">Sign Up</a>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg ml-3">Log In</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <p>
            <a href="#" class="text-white">Privacy Policy</a> | 
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
