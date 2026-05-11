<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kan Hotel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; color: #333; }

        /* NAV */
        .site-header { background-color: #2c6e49; padding: 15px 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px; }
        .site-logo a { color: white; font-size: 22px; font-weight: bold; text-decoration: none; }
        .menu { display: flex; flex-wrap: wrap; gap: 16px; list-style: none; margin: 0; padding: 0; align-items: center; }
        .menu a { color: white; text-decoration: none; font-size: 14px; }
        .menu a:hover { text-decoration: underline; }

        /* HERO */
        .hero { background-color: #d8f3dc; text-align: center; padding: 80px 20px; }
        .hero h1 { font-size: 40px; color: #1b4332; margin-bottom: 15px; }
        .hero p { font-size: 18px; color: #555; margin-bottom: 30px; }
        .hero button { background-color: #2c6e49; color: white; border: none; padding: 14px 32px; font-size: 16px; cursor: pointer; border-radius: 6px; }
        .hero button:hover { background-color: #1b4332; }

        /* BOOKING */
        .booking { background: white; padding: 30px; display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; border-bottom: 2px solid #e0e0e0; }
        .booking label { display: block; font-size: 13px; color: #666; margin-bottom: 5px; }
        .booking input, .booking select { padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; width: 160px; }
        .booking button { background-color: #2c6e49; color: white; border: none; padding: 10px 24px; font-size: 15px; cursor: pointer; border-radius: 4px; align-self: flex-end; }
        .booking button:hover { background-color: #1b4332; }

        /* ROOMS */
        .rooms { padding: 50px 30px; background: #f9f9f9; text-align: center; }
        .rooms h2 { font-size: 30px; color: #1b4332; margin-bottom: 10px; }
        .subtitle { color: #777; margin-bottom: 35px; }
        .room-cards { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .card { background: white; border: 1px solid #ddd; border-radius: 8px; width: 260px; padding: 25px 20px; text-align: left; }
        .card h3 { font-size: 20px; margin-bottom: 8px; color: #2c6e49; }
        .card p { font-size: 13px; color: #666; line-height: 1.6; margin-bottom: 15px; }
        .card .price { font-size: 22px; font-weight: bold; color: #1b4332; margin-bottom: 15px; }
        .card .price span { font-size: 13px; font-weight: normal; color: #999; }
        .card button { background-color: #2c6e49; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 14px; width: 100%; }
        .card button:hover { background-color: #1b4332; }

        /* AMENITIES */
        .amenities { padding: 50px 30px; text-align: center; background: white; }
        .amenities h2 { font-size: 30px; color: #1b4332; margin-bottom: 10px; }
        .amenity-list { display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 20px; }
        .amenity-item { width: 160px; padding: 20px; border: 1px solid #e0e0e0; border-radius: 8px; text-align: center; }
        .amenity-item .icon { font-size: 30px; margin-bottom: 10px; }
        .amenity-item p { font-size: 14px; color: #444; font-weight: bold; }

        /* FOOTER */
        footer { background-color: #1b4332; color: #ccc; text-align: center; padding: 25px 20px; font-size: 13px; }
        footer a { color: #95d5b2; text-decoration: none; }
        footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header class="site-header js-site-header">
        <div class="site-logo">
            <a href="index.html">🏨 Kan Hotel</a>
        </div>
        <ul class="menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="rooms.html">Rooms</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="reservation.html">Reservation</a></li>

            @if (Route::has('login'))
                @auth
                    <li><a class="btn btn-outline-light btn-sm" href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <li><a class="btn btn-success btn-sm" href="{{ url('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a class="btn btn-primary btn-sm" href="{{ url('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </header>

    <!-- HERO -->
    <section class="hero">
        <h1>Welcome to Kan Hotel</h1>
        <p>Enjoy a comfortable and relaxing stay with us.</p>
        <button>Book a Room</button>
    </section>

    <!-- BOOKING FORM -->
    <div class="booking">
        <div>
            <label>Check-In Date</label>
            <input type="date" id="checkin_date">
        </div>
        <div>
            <label>Check-Out Date</label>
            <input type="date" id="checkout_date">
        </div>
        <div>
            <label>Adults</label>
            <select id="adults">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4+</option>
            </select>
        </div>
        <div>
            <label>Children</label>
            <select id="children">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3+</option>
            </select>
        </div>
        <button>Check Availability</button>
    </div>

    <!-- ROOMS -->
    <section class="rooms">
        <h2>Rooms &amp; Suites</h2>
        <p class="subtitle">Choose the room that suits you best.</p>
        <div class="room-cards">

            {{-- Dynamic rooms from database --}}
            @foreach($room as $rooms)
            <div class="card">
                <img src="/room/{{ $rooms->image }}" alt="{{ $rooms->room_title }}" style="width:100%; height:160px; object-fit:cover; border-radius:4px; margin-bottom:12px;">
                <h3>{{ $rooms->room_title }}</h3>
                <p>Available now. Book your stay today.</p>
                <div class="price">{{ $rooms->price }}$ <span>/ per night</span></div>
                <button>Book Now</button>
            </div>
            @endforeach

            {{-- Static room cards --}}
            <div class="card">
                <img src="images/img_2.jpg" alt="Family Room" style="width:100%; height:160px; object-fit:cover; border-radius:4px; margin-bottom:12px;">
                <h3>Family Room</h3>
                <p>A large room with two bedrooms and a kitchenette. Perfect for families.</p>
                <div class="price">500$ <span>/ per night</span></div>
                <button>Book Now</button>
            </div>

            <div class="card">
                <img src="images/img_3.jpg" alt="Presidential Room" style="width:100%; height:160px; object-fit:cover; border-radius:4px; margin-bottom:12px;">
                <h3>Presidential Room</h3>
                <p>The finest room in the hotel with premium service and full amenities.</p>
                <div class="price">1000$ <span>/ per night</span></div>
                <button>Book Now</button>
            </div>

        </div>
    </section>

    <!-- AMENITIES -->
    <section class="amenities">
        <h2>What We Offer</h2>
        <p class="subtitle">Everything you need for a great stay.</p>
        <div class="amenity-list">
            <div class="amenity-item"><div class="icon">🍽️</div><p>Restaurant</p></div>
            <div class="amenity-item"><div class="icon">🏊</div><p>Swimming Pool</p></div>
            <div class="amenity-item"><div class="icon">💪</div><p>Gym</p></div>
            <div class="amenity-item"><div class="icon">📶</div><p>Free WiFi</p></div>
            <div class="amenity-item"><div class="icon">🅿️</div><p>Free Parking</p></div>
            <div class="amenity-item"><div class="icon">🛎️</div><p>Room Service</p></div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© <script>document.write(new Date().getFullYear());</script> Kan Hotel · All Rights Reserved</p>
        <p style="margin-top: 8px;">
            📞 (+1) 435 3533 &nbsp;|&nbsp;
            ✉️ <a href="mailto:info@domain.com">info@domain.com</a>
        </p>
        <p style="margin-top: 8px;">
            <a href="#">Facebook</a> &nbsp;|&nbsp;
            <a href="#">Twitter</a> &nbsp;|&nbsp;
            <a href="#">LinkedIn</a>
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>