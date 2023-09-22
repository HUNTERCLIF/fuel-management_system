<!DOCTYPE html>
<html>
<head>
    <title>Fuel Efficiency Analysis</title>
    <style>
       body {
      font-family: Arial, sans-serif;
      background-image: url(Fuel-Efficiency.png);
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
      <h1>Fuel Efficiency Analysis</h1>
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
        Fuel efficiency analysis is more concerned with evaluating the effectiveness of fuel usage in achieving specific objectives, such as minimizing fuel costs or reducing carbon emissions.
    </p>
  </section>
<body>
    <div id="container">
        <form action="store_fuel_efficiency.php" method="post" onsubmit="return calculateFuelEfficiency()">
            <label for="prevFuel">Previous Fuel Level (liters):</label>
            <input type="number" id="prevFuel" required>
            <label for="currentFuel">Current Fuel Level (liters):</label>
            <input type="number" id="currentFuel" required>
            <label for="distance">Distance Traveled (kilometers):</label>
            <input type="number" id="distance" required>
            <input type="submit" value="Calculate Fuel Efficiency">
        </form>
        <div id="result"></div>
    </div>
    <footer>
        <p>&copy; 2023 On-Road Fuel Demand System. All rights reserved.</p>
      </footer>
    <script>
        function calculateFuelEfficiency() {
            var prevFuel = parseFloat(document.getElementById('prevFuel').value);
            var currentFuel = parseFloat(document.getElementById('currentFuel').value);
            var distance = parseFloat(document.getElementById('distance').value);

            var fuelConsumed = prevFuel - currentFuel;
            var fuelEfficiency = fuelConsumed / distance;

            document.getElementById('result').innerHTML = "Fuel Efficiency: " + fuelEfficiency.toFixed(2) + " liters/kilometer";

            return false;
        }
    </script>
</body>
</html>
