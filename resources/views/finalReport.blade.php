
    <canvas id="myChart" height="100px"></canvas>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var eff ={{ Js::from($eff ?? '') }};
    var sat ={{ Js::from($sat ?? '') }};
    var lrn ={{ Js::from($lrn ?? '') }};

    const DATA_COUNT = 3;
    const NUMBER_CFG = {count: DATA_COUNT, min: -1000, max: 1000};

      const labels = {{ Js::from($labels ?? '') }};
      const data = {
        labels: labels,
        datasets: [{
          label: 'positive',
          borderColor: 'rgb(155,219,151)',
          backgroundColor: 'rgba(120, 245, 66, 0.5)',
          data: [eff[0], sat[0], lrn[0]]
        }, {
          label: 'negative',
          borderColor: 'rgb(255, 99, 132)',
          backgroundColor: 'rgba(255, 99, 132, 0.5)',
          data: [eff[1], sat[1], lrn[1]]
        }]
      };

      const config = {
       type: 'bar',
       data: data,
       options: {
        indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
        elements: {
           bar: {
           borderWidth: 2,
           }
        },
        responsive: true,
        plugins: {
          legend: {
          position: 'right',
         },
        title: {
         display: true,
         text: "Your App's Name"
         }
        }
       },
    };

    const myChart = new Chart(
       document.getElementById('myChart'),
        config
      );

</script>

