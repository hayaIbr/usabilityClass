
    <div>
    <canvas id="myChart" height="100px"></canvas>

    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

      var labels =  ['eff', 'sat', 'lrnb'];
      var users = [30,90,70];

      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script>

<button class= "btn btn-primary" onclick="window.print()"class="bi bi-printer"> print</button>


<style>

@media print {
  body *{
    visibility: hidden;
  }
  #myChart {
    visibility: visible;
  }
}


</style>
