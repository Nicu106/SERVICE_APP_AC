<link rel="stylesheet" href="{{ asset('style/layout.css') }}">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/manifest.json">
    <title>@yield('title', 'My Mobile App')</title>
    <link href="{{ asset('style/header.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        .navbar-icons {
            font-size: 1.5rem;
            color: #ffffff; /* Ensures icons are visible on dark background */
        }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Logo at the Top -->
        <header class="custom-header">
            <h1>SkillSource <i class="bi bi-tools"></i></h1>
            <button class="header-search">
                <i class="bi bi-search"></i>
            </button>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>

        <!-- Bottom Dark Navigation Bar -->
        <nav class="custom-navbar">
            <div class="container d-flex justify-content-around">
                <!-- Home -->
                <a href="{{route('home')}}" class="navbar-icons text-center" style="font-size: 1rem; padding: 0.4rem;">
                    <i class="bi bi-house-door" style="font-size: 1.25rem;"></i>
                    <!-- <div class="small" style="font-size: 0.8rem;">Home</div> -->
                </a>
                <!-- Chat -->
                <a href="{{route('chat')}}" class="navbar-icons text-center" style="font-size: 1rem; padding: 0.4rem;">
                    <i class="bi bi-chat" style="font-size: 1.25rem;"></i>
                    <!-- <div class="small" style="font-size: 0.8rem;">Chat</div> -->
                </a>
                <!-- Booked -->
                <a href="{{route('booked')}}" class="navbar-icons text-center" style="font-size: 1rem; padding: 0.4rem;">
                    <i class="bi bi-calendar-check" style="font-size: 1.25rem;"></i>
                    <!-- <div class="small" style="font-size: 0.8rem;">Booked</div> -->
                </a>
                <!-- Profile -->
                <a href="{{route('profile')}}" class="navbar-icons text-center" style="font-size: 1rem; padding: 0.4rem;">
                    <i class="bi bi-person" style="font-size: 1.5rem;"></i>
                    <!-- <div class="small" style="font-size: 0.8rem;">Profile</div> -->
                </a>
            </div>
        </nav>
    </div>
    <script>
        // Detect iOS
        const isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);

        // Check if app is not installed as standalone
        const isInStandaloneMode = () => window.navigator.standalone === true;

        if (isIOS && !isInStandaloneMode()) {
            document.addEventListener('DOMContentLoaded', () => {
                const prompt = document.createElement('div');
                prompt.innerHTML = `
            <div style="position: fixed; bottom: 20px; left: 20px; right: 20px; padding: 10px; background: rgba(0,0,0,0.8); color: white; text-align: center; font-size: 14px; border-radius: 8px;">
            <p style="margin: 0;">To add this app to your home screen: tap <strong>Share</strong> and then <strong>Add to Home Screen</strong>.</p>
            </div>
        `;
                document.body.appendChild(prompt);

                // Remove prompt after a few seconds
                setTimeout(() => {
                    prompt.remove();
                }, 4000);
            });
        }
    </script>
    <!-- Bootstrap Icons and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
