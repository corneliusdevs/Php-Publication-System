<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equi="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHART</title>
  <link rel="stylesheet" type="text/css" href="../styles/charts.css">

</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <div class="nav-text">
        <div class="header-nav">
          <h1>CHARTS</h1>
        </div>
      </div>
      <div class="menu-img-container" onclick="toggeleMenu()"><img id="menu-icon" src="../icons/hamburger.png" data-alt-src="../icons/close.png" data-menu-state="closed" /></div>
      <div id="nav-menu-container" class="nav-menu-container">
        <a href="../index.php">
          <div class="menu-item">HOME</div>
        </a>
        <a href="./signIn.php">
          <div class="menu-item">SIGN IN</div>
        </a>
        <a href="./list.php">
          <div class="menu-item">PUBLICATION LIST</div>
        </a>
        <a href="./submit.php">
          <div class="menu-item">SUBMIT A PUBLICATION</div>
        </a>
      </div>
    </div>
  </nav>
  <div>
    <h1 class="header-text">Weather Data For Stoke On Trent</h1>
    <section>
      <div class="button-list">
        <div class="buttons">
          <!-- CHANGE CHART TYPE BUTTONS -->
          <button class="chart_change_button" onclick="changeChart('line')">Line</button>
          <button id="temperatureBarButton" class="chart_change_button" onclick="changeChart('bar')">Bar</button>
          <button id="temperatureScatterButton" class="chart_change_button" onclick="changeChart('scatter')">scatter</button>
          <button id="temperatureScatterButton" class="chart_change_button" onclick="changeChart('bubble')">Bubble</button>
        </div>
      </div>
      <div class="chart-container">
        <canvas id="display-weather"></canvas>
      </div>
    </section>

  </div>
  <!-- get chart.js source code -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js">
  </script>
  <script src="../scripts/formatDate.js"></script>
  <script src="../scripts/weatherData.js"></script>
  <script src="../scripts/createCharts.js">

  </script>
  <script src="../scripts/toggleMenu.js"></script>
</body>

</html>