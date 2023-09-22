<!DOCTYPE html>
<html>
<head>
  <title>Fuel Consumption Tracking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(tracker.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: black;
      color: hsl(0, 6%, 69%);
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
      color: #ffffff;
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
    <h1>Fuel Consumption Tracking</h1>
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
  <section>
    <p>
        Fuel consumption tracking is a pivotal aspect of our On-Road Fuel Demand System, designed to help you gain precise insights into your vehicle's fuel usage. By continuously monitoring and recording the amount of fuel consumed during a journey, our sophisticated tracking system provides invaluable data for optimizing fuel efficiency and reducing operational costs.
    </p>
  </section>

  <form id="fuelConsumptionForm" action="store_fuel_consumption.php" method="post">
  <label for="previousFuelLevel">Previous Fuel Level (%):</label>
  <input type="number" id="previousFuelLevel" name="previousFuelLevel" required>
  <label for="currentFuelLevel">Current Fuel Level (%):</label>
  <input type="number" id="currentFuelLevel" name="currentFuelLevel" required>
  <label for="distanceTraveled">Distance Traveled (km):</label>
  <input type="number" id="distanceTraveled" name="distanceTraveled" required>
  <input type="hidden" id="fuelConsumptionPerKm" name="fuelConsumptionPerKm">
  <button type="button" onclick="calculateAndSubmit()">Calculate</button>
  <p>Fuel Consumption per km: <span id="fuelConsumptionPerKm"></span></p>
</form>
  </main>
  <footer>
    <p>&copy; 2023 On-Road Fuel Demand System. All rights reserved.</p>
  </footer>

  <script>
    function calculateAndSubmit() {
    const previousFuelLevel = parseFloat(document.getElementById('previousFuelLevel').value);
    const currentFuelLevel = parseFloat(document.getElementById('currentFuelLevel').value);
    const distanceTraveled = parseFloat(document.getElementById('distanceTraveled').value);

    if (!isNaN(previousFuelLevel) && !isNaN(currentFuelLevel) && !isNaN(distanceTraveled)) {
        const fuelConsumed = previousFuelLevel - currentFuelLevel;
        const fuelConsumptionPerKm = fuelConsumed / distanceTraveled;
        document.getElementById('fuelConsumptionPerKm').value = fuelConsumptionPerKm.toFixed(2);
        
        // Submit the form to the server
        document.getElementById('fuelConsumptionForm').submit();

        window.location.href = 'Homepage.php';
    }
}

  </script>
</body>
</html>
