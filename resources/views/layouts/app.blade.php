<!DOCTYPE html>
<html lang="id">
<head> 
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKU - Boiler & Sparepart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            font-family: Arial, sans-serif;
        }

        .navbar{
            background:#ffffff;
        }

        .hero{
            min-height:100vh;
            display:flex;
            align-items:center;
            background:linear-gradient(
                rgba(0,0,0,.6),
                rgba(0,0,0,.6)
            ),
            url('https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=2000');

            background-size:cover;
            background-position:center;
            color:white;
        }

        .section-title{
            color:#0d47a1;
            font-weight:bold;
        }

        footer{
            background:#001f3f;
            color:white;
        }

        .product-card{
    transition:0.3s;
}

.product-card:hover{
    transform:translateY(-10px);
}

.feature-box{
    padding:30px;
    border-radius:10px;
    background:#f8f9fa;
    height:100%;
}

.stat-box{
    text-align:center;
    padding:20px;
}

.stat-box h2{
    color:#0d47a1;
    font-weight:bold;
}

.cta-section{
    background:#0d47a1;
    color:white;
}

    </style>

</head>
<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>