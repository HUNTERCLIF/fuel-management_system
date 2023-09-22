<!DOCTYPE html>
<html>
<head>
  <title>GPS-based Vehicle Tracking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    h1 {
      margin: 0;
    }

    nav {
      background-color: #444;
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    li {
      padding: 10px;
    }

    a {
      color: #fff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    #map {
      height: 400px;
      margin-top: 20px;
      border: 1px solid #ccc;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>GPS-based Vehicle Tracking</h1>
  </header>
  <nav>
    <ul>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="login.php">Login Page</a></li>
        <li><a href="fuel tracking.php">Fuel Consumption Tracking</a></li>
        <li><a href="fuel efficiency.php">Fuel Efficiency Analysis</a></li>
        <li><a href="real time.php">Real-time Data Collection</a></li>
        <li><a href="GPS-based vehicle tracking.php">GPS-based Vehicle Tracking</a></li>
    </ul>
  </nav>
  <main>
    <div id="map"></div>
  </main>
  <footer>
    <p>&copy; 2023 On-Road Fuel Demand System. All rights reserved.</p>
  </footer>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <script>
    const map = L.map('map').setView([0, 0], 10);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    const marker = L.marker([0, 0]).addTo(map);
    marker.bindPopup('Vehicle Location');

    function updateMarkerPosition(latitude, longitude) {
      marker.setLatLng([latitude, longitude]);
      map.setView([latitude, longitude]);
    }

    function simulateLiveLocation() {
      const latitude = Math.random() * (90 - (-90)) - 90;
      const longitude = Math.random() * (180 - (-180)) - 180;

      updateMarkerPosition(latitude, longitude);
    }

    setInterval(simulateLiveLocation, 5000);
  </script>
</body>
</html>
