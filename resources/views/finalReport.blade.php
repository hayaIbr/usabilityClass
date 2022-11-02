
    <div>
    <canvas id="myChart" height="100px"></canvas>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


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
<br></br>


<div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary" onclick="window.print()" >
                            <i class="fa-solid fa-print"></i> طباعة </button>

                          <button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-share"></i> مشاركة </button>

                          <button type="button" class="btn btn-outline-secondary">
                            <i class="fa fa-download"></i>تحميل</button>
                        </div>


<style>

@media print {
  body *{
    visibility: hidden;
  }
  #myChart {
    visibility: visible;
  }
}

.btn-group {
    margin-right: 0.5rem !important;
}

.container{
    
    margin-top:100px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle){
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn{
        font-size: 0.875rem;
    line-height: 1;
    font-weight: 400;
    padding: .7rem 1.5rem;
    border-radius: 0.1275rem;

}
</style>

