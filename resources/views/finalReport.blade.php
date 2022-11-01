
    <div>
    <canvas id="myChart" height="100px"></canvas>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


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

