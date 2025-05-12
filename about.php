<?php
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Fonts CDN-->

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Welcome | Transform Voting Experience</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        .hero-section {
            text-align: center;
            padding: 100px 20px;
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            margin-top: 20px;
            line-height: 1.2;
        }

        .hero-section p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: auto;
        }

        .features-section {
            padding: 70px 20px;
            background: #ffffff;
            text-align: center;
        }

        .features-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: 700;
            font-size: 2.5rem;
            color: #333;
        }

        .features-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .feature-card {
            width: 300px;
            background: white;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-card img {
            width: 80px;
            margin-bottom: 20px;
        }

        .feature-card h5 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: #222;
        }

        .feature-card p {
            font-size: 1rem;
            color: #555;
            line-height: 1.5;
        }

        .stats-section {
            background-image: linear-gradient(to right, #00c6ff, #0072ff);
            color: white;
            padding: 70px 20px;
            text-align: center;
        }

        .stats-section h2 {
            margin-bottom: 40px;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .stats-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .stat-card {
            width: 240px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: scale(1.1);
        }

        .stat-card h3 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .stat-card p {
            font-size: 1rem;
            line-height: 1.4;
        }
    </style>
</head>

<body>
    <section class="hero-section">
        <h1>Shape the Future with Every Vote</h1>
        <p>Join a secure, seamless, and transparent voting platform that empowers you to make a difference. Let your voice be heard!</p>
        <a href="#features"><button class="magnifyBtn" style="margin-top: 20px;">Explore Features</button></a>
    </section>

    <section class="features-section" id="features">
        <h2>Why You'll Love Us</h2>
        <div class="features-row">
            <div class="feature-card">
                <img src="img/secure-icon.png" alt="Secure Voting">
                <h5>Unmatched Security</h5>
                <p>Your votes are encrypted with cutting-edge technology to ensure absolute protection and privacy.</p>
            </div>
            <div class="feature-card">
                <img src="img/easy-icon.png" alt="Ease of Use">
                <h5>Effortless Experience</h5>
                <p>Our intuitive interface makes voting accessible for everyone, from tech-savvy users to beginners.</p>
            </div>
            <div class="feature-card">
                <img src="img/transparent-icon.png" alt="Transparency">
                <h5>Instant Insights</h5>
                <p>Real-time updates ensure you stay informed about voting outcomes as they happen.</p>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <h2>Our Impact in Numbers</h2>
        <div class="stats-row">
            <div class="stat-card">
                <h3>1.5M+</h3>
                <p>Votes Cast</p>
            </div>
            <div class="stat-card">
                <h3>800+</h3>
                <p>Campaigns Hosted</p>
            </div>
            <div class="stat-card">
                <h3>99.99%</h3>
                <p>Uptime Reliability</p>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery (full version) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js (for Bootstrap dropdowns, tooltips, etc.) -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            new bootstrap.Collapse(document.getElementById('navbarNav'), {
                toggle: false
            });

            $(".navbar-toggler").click(function() {
                $("#navbarNav").collapse("toggle");
            });
        });
    </script>

</body>

</html>
<?php
include("footer.html");
?>