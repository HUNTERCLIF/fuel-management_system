<!DOCTYPE html>
<html>
<head>
  <title>Real-Time Data Collection</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(Data-Collection.png);
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: black;
      color: white;
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

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin-top: 10px;
    }

    input {
      margin-bottom: 10px;
      padding: 5px;
    }

    button {
      margin-top: 10px;
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
    <h1>Real-Time Data Collection</h1>
  </header>
  <nav>
    <ul><li><a href="Homepage.php">Home</a></li>
        <li><a href="login.php">Login Page</a></li>
        <li><a href="fuel tracking.php">Fuel Consumption Tracking</a></li>
        <li><a href="fuel efficiency.php">Fuel Efficiency Analysis</a></li>
        <li><a href="real time.php">Real-time Data Collection</a></li>
        <li><a href="GPS-based vehicle tracking.php">GPS-based Vehicle Tracking</a></li>
    </ul>
  </nav>
  <section>
    <p>
        With real-time data collection, you can effortlessly access and analyze detailed fuel consumption reports for individual vehicles or entire fleets.
         This comprehensive analysis enables fleet managers and drivers to identify trends, pinpoint inefficiencies, and implement data-driven strategies for better fuel management.
    </p>
  </section>
  <main>
  <form action="collect_data.php" method="post">
  <label for="vehicleId">Vehicle ID:</label>
  <input type="text" id="vehicleId" name="vehicleId" required>
  <label for="fuelLevel">Fuel Level (%):</label>
  <input type="number" id="fuelLevel" name="fuelLevel" required>
  <label for="distanceTraveled">Distance Traveled (km):</label>
  <input type="number" id="distanceTraveled" name="distanceTraveled" required>
  <button type="submit">Send Data</button>
</form>

  </main>
  <footer>
    <p>&copy; 2023 On-Road Fuel Demand System. All rights reserved.</p>
  </footer>
</body>
</html>
