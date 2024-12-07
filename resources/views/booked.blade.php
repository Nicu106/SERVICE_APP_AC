@extends('layout.base')

@section('title', 'Programări viitoare | SkillSource')

@section('content')
    <div class="container-fluid my-2">
        <h5 class="booked-title">Programări viitoare</h5>
        <div class="services-list">
            <!-- Sample Service 1 -->
            <div class="service-item">
                <div>
                    <h6 class="service-title">Sesiune foto în studiou</h6>
                    <p class="service-booked-by">
                        Rezervat de: <span class="service-accent">Emilia Popescu</span>
                    </p>
                    <p class="service-booking-date">
                        Rezervat pentru: 05 Nov 2024 14:30
                    </p>
                </div>
                <button
                    data-bs-toggle="modal"
                    data-bs-target="#detailsModal"
                    onclick="loadDetails('Sesiune foto în studiou', 'Emilia Popescu', '05 Nov 2024 14:30', '€50', '1 oră')">
                    Detalii
                </button>
            </div>

            <!-- Additional services -->
            <div class="service-item">
                <div>
                    <h6 class="service-title">Sesiune foto pentru nuntă</h6>
                    <p class="service-booked-by">
                        Rezervat de: <span class="service-accent">Radu Focșa</span>
                    </p>
                    <p class="service-booking-date">
                        Rezervat pentru: 06 Nov 2024 09:00
                    </p>
                </div>
                <button
                    data-bs-toggle="modal"
                    data-bs-target="#detailsModal"
                    onclick="loadDetails('Sesiune foto pentru nuntă', 'Radu Focșa', '06 Nov 2024 09:00', '€300', '2 ore')">
                    Detalii
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div class="modal fade custom-backdrop" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceName">Service Details</h5>
                </div>
                <div class="modal-body">
                    <p id="serviceBookedBy"></p>
                    <p id="serviceDate"></p>
                    <p id="servicePrice"></p>
                    <p id="serviceDuration"></p>
                </div>
                <div class="modal-close">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Închide</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .booked-title {
            margin: 10px 0 16px;
            font-size: 18px;
            font-weight: bold;
        }

        .service-item {
            padding: 10px;
            border-radius: 10px;
            background: black;
            border: 1px solid var(--accent-color);
            margin-bottom: 16px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .service-title {
            font-size: 14px;
            font-weight: bold;
        }

        .service-item p, .modal-body p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 0;
            width: 100%;
        }

        .modal-header {
            padding: 16px 16px 0;
        }

        .modal-body {
            padding: 10px 16px;
        }

        .modal-body p {
            margin-bottom: 10px;
        }

        .service-item button {
            font-size: 14px;
            border: none;
            padding: 5px 10px;
            color: var(--accent-color);
            background: var(--accent-background-color);
            border-radius: 10px;
        }

        .service-item button:hover {
            background: var(--accent-background-color-hover);
        }

        .service-accent {
            color: rgba(var(--accent-rgb), 0.8);
        }

        .custom-backdrop {
            background: rgba(0, 0, 0, 0.7);
        }

        .custom-modal {
            background: rgba(0, 0, 0, 1);
            border: 1px solid var(--accent-color);
            box-shadow: 0 0 10px rgba(var(--accent-rgb), 0.5);
            color: white;
            max-width: calc(var(--app-width) - 20px);
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .modal-close {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 16px 16px;
        }

        .modal-close button {
            font-size: 14px;
            border: none;
            padding: 5px 10px;
            color: var(--accent-color);
            background: var(--accent-background-color);
            border-radius: 10px;
        }

        .modal-close button:hover {
            background: var(--accent-background-color-hover);
            color: var(--accent-color);
        }

        .modal-header {
            border-bottom: none;
            font-weight: bold;
        }

        .modal-title {
            font-size: 18px;
            font-weight: bold;
        }
    </style>

    <script>
        // Load service details into the modal
        function loadDetails(serviceName, bookedBy, bookingDate, price, duration) {
            document.getElementById('serviceName').innerText = serviceName;
            document.getElementById('serviceBookedBy').innerHTML = `Rezervat de: <span class="service-accent">${bookedBy}</span>`;
            document.getElementById('serviceDate').innerText = `Rezervat pentru: ${bookingDate}`;
            document.getElementById('servicePrice').innerHTML = `Preț: <span class="service-accent">${price}</span>`;
            document.getElementById('serviceDuration').innerHTML = `Durata: <span class="service-accent">${duration}</span>`;
        }
    </script>
@endsection
