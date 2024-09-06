const chartData = formatForecastData(forecast);

Chart.defaults.font.size = 20;

const chart = new Chart(document.getElementById("display-weather"), {
  type: "line",
  data: {
    labels: chartData.map((row) => row.date),
    datasets: [
      {
        label: "Humidity",
        backgroundColor: "rgba(173, 216, 230, 0.306)",
        borderColor: "#326abe",
        fill: true,
        data: chartData.map((row) => row.humidity),
      },
      {
        label: `Temperature \u00B0C`,
        backgroundColor: "rgba(192, 224, 255, 0.484)",
        borderColor: "blue",
        fill: true,
        data: chartData.map((row) => row.value),
      },
      {
        label: "Wind Speed",
        backgroundColor: "green",
        borderColor: "lightgreen",
        fill: true,
        data: chartData.map((row) => row.wind),
      },
    ],
  },
});

function changeChart(chartType) {
  switch (chartType) {
    case "line":
      chart.config.type = "line";
      chart.update();
      break;
    case "bar":
      chart.config.type = "bar";
      chart.update();
      break;
    case "bubble":
      chart.config.type = "bubble";
      chart.update();
      break;
    case "scatter":
      chart.config.type = "scatter";
      chart.update();
      break;
    default:
      console.log("Invalid chart type");
  }
}

function formatForecastData(forecast) {
  return forecast.list.map((item) => {
    const dateInMs = item.dt * 1000; // Convert seconds to milliseconds
    const formattedDate = formatDate(dateInMs);
    const { main, weather, wind } = item;
    return {
      date: formattedDate,
      value: main.temp,
      minTemp: main.temp_min,
      description: weather[0].main,
      wind: wind.speed,
      humidity: main.humidity,
      pressure: main.pressure,
    };
  });
}
