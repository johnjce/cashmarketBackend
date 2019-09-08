// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: [ "Compra €", "Empeño €", "Depósito €" ],
    datasets: [{
      data: [1500, 650, 300],
      backgroundColor: ['#007bff','#ffc107', '#28a745'],
    }],
  },
});
// Pie Chart Example
var ctx = document.getElementById("myPieChart2");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: [ "Facturas €", "Pendiente €", "Tickets €" ],
    datasets: [{
      data: [455, 1440, 8300],
      backgroundColor: ['#28a745','#ffc107', '#12cc12'],
    }],
  },
});
