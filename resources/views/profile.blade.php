@extends('layout.base')

@section('title', 'Profile | SkillSource')

@section('content')
    <div class="profile-container">
        <div>
            <div class="top-section">
                <div class="user-photo">
                    <img src="profile-img/nicu.png" alt="User Logo">
                </div>
                <div class="user-job">
                    Developer
                </div>
            </div>
            <p class="user-name">
                Cociorva Nicolae
            </p>
            <p class="member-since">
                Membru din Martie 2024
            </p>
            <div class="user-actions">
                <button>
                    <i class="bi bi-calendar-fill"></i>
                    Programează-te
                </button>
                <button>
                    <i class="bi bi-telephone-fill"></i>
                    Sună
                </button>
                <button>
                    <i class="bi bi-envelope-fill"></i>
                    Email
                </button>
            </div>
        </div>

        <div class="profile-section">
            <h5>Skill-uri</h5>
            <div class="skills-container">
                <div class="skill">
                    Coding
                </div>
                <div class="skill">
                    Mentorat
                </div>
                <div class="skill">
                    Web Development
                </div>
            </div>
        </div>

        <div class="profile-section">
            <h5>Portofoliu</h5>
            <div class="portfolio-container">
                <div class="portfolio-item">
                    <div class="portfolio-item-image">
                        <img src="img/mihaela.jpg" alt="Portfolio Item 1">
                    </div>
                    <div class="portfolio-item-name">
                        Mihaela
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-item-image">
                        <img src="img/catalin.jpg" alt="Portfolio Item 1">
                    </div>
                    <div class="portfolio-item-name">
                        Cătălin
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-item-image">
                        <img src="img/chiril.jpg" alt="Portfolio Item 1">
                    </div>
                    <div class="portfolio-item-name">
                        Chiril
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-section">
            <h5>Servicii</h5>
            <div class="pricing-container">
                <div class="pricing-item">
                    <div class="pricing-item-name">
                        Crearea unui site
                    </div>
                    <div class="pricing-item-price">
                        $10/h
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-item-name">
                        Mentorat în IT
                    </div>
                    <div class="pricing-item-price">
                        $5/h
                    </div>
                </div>
                <div class="pricing-item">
                    <div class="pricing-item-name">
                        DJ pentru ocazii speciale
                    </div>
                    <div class="pricing-item-price">
                        $50/h
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .rating span {
            font-size: 1.25rem;
        }

        .badge.bg-primary {
            background-color: #007bff;
        }

        .badge.bg-success {
            font-size: 1rem;
            padding: 0.5em 0.75em;
        }

        .profile-container {
            padding: 10px 10px 70px;
        }

        .top-section {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            justify-content: space-between;
        }

        .user-photo {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .user-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-name {
            font-size: 24px;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .user-job {
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 5px 10px;
            border-radius: 10px;
            color: rgba(255, 255, 255, 0.5);
        }

        .member-since {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 10px;
        }

        .user-actions {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 16px;
        }

        .user-actions button {
            background-color: var(--accent-background-color);
            border: none;
            border-radius: 10px;
            padding: 5px 10px;
            color: var(--accent-color);
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .user-actions button:hover {
            background-color: var(--accent-background-color-hover);
        }

        .user-actions button i {
            color: var(--accent-color);
        }

        .profile-section:not(:last-child) {
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 16px;
        }

        .profile-section h5 {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
            font-weight: 500;
        }

        .skills-container, .portfolio-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .skills-container .skill {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
        }

        .portfolio-item {
            width: 33%;
            border-radius: 10px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .portfolio-item-image img {
            width: 100%;
            object-fit: cover;
            max-height: 100px;
        }

        .portfolio-item-name {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
            margin: 6px 10px;
        }

        .pricing-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-top: 10px;
        }

        .pricing-item-name {
            font-size: 14px;
            color: var(--accent-color);
            background-color: rgba(255, 255, 255, 0.1);
            padding: 5px 10px;
            border-radius: 10px;
        }

        .pricing-item-price {
            font-size: 14px;
            color: var(--accent-color);
            background-color: rgba(255, 255, 255, 0.1);
            padding: 5px 10px;
            border-radius: 10px;
        }
    </style>
@endsection
