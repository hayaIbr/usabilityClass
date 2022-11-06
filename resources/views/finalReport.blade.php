
    <div id="report">
    <canvas id="myChart" height="170px"></canvas></div>
<br>
    <label class="mt-4">  محاور سهولة الاستخدام </label>

  <br>

    <div class="form-check form-check-inline mb-3" >
        <input class="form-check-input" type="checkbox" id="sat" value="sat" onchange="filterC()">
        <label class="form-check-label" for="sat"> الرضى العام</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="eff" value="eff" onchange="filterC()">
        <label class="form-check-label" for="eff"> الفاعلية </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="lrn" value="lrn" onchange="filterC()">
        <label class="form-check-label" for="lrn"> سهولة التعلم </label>
      </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.0.279/pdf.min.js" integrity="sha512-QJy1NRNGKQoHmgJ7v+45V2uDbf2me+xFoN9XewaSKkGwlqEHyqLVaLtVm93FzxVCKnYEZLFTI4s6v0oD0FbAlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>


<script type="text/javascript">
    var eff ={{ Js::from($eff ?? '') }};
    var sat ={{ Js::from($sat ?? '') }};
    var lrn ={{ Js::from($lrn ?? '') }};
    var app_name = {{ Js::from($app_name ?? 'آراء تطبيقك') }};

    data_positive = [eff[0], sat[0], lrn[0]];
    data_negative = [eff[1], sat[1], lrn[1]];



    //const DATA_COUNT = 3;
    //const NUMBER_CFG = {count: DATA_COUNT, min: 1, max: 100};

      const labels = ['الفاعلية', 'الرضى العام', 'سهولة التعلم'];
      const data = {
        labels: labels,
        datasets: [{
          label: 'جيد',
          borderColor: 'rgb(155,219,151)',
          backgroundColor: 'rgba(120, 245, 66, 0.5)',
          data: [eff[0], sat[0], lrn[0]]
        }, {
          label: 'سيء',
          borderColor: 'rgb(255, 99, 132)',
          backgroundColor: 'rgba(255, 99, 132, 0.5)',
          data: [eff[1], sat[1], lrn[1]]
        }]
      };


      const config = {
  type: 'bar',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: app_name,
      }
      }
     }
    };

    Chart.defaults.font.size = 17;
    const myChart = new Chart(
       document.getElementById('myChart'),
        config
      );



      function filterC(){

const CBSat = document.getElementById('sat') //satisfaction checkbox
const CBEff = document.getElementById('eff') //eff checkbox
const CBLrn = document.getElementById('lrn') //lrn checkbox

if(CBSat.checked == true && CBEff.checked == true && CBLrn.checked == false){
myChart.data.labels = ['الفاعلية', 'الرضى العام'];
myChart.config.data.datasets[0].data = [eff[0], sat[0]];
myChart.config.data.datasets[1].data = [eff[1], sat[1]];
myChart.update();
}
else if(CBSat.checked == true && CBEff.checked == false && CBLrn.checked == false){
myChart.data.labels = ['الرضى العام'];
myChart.config.data.datasets[0].data = [sat[0]];
myChart.config.data.datasets[1].data = [sat[1]];
myChart.update();
}
else if(CBSat.checked == false && CBEff.checked == true && CBLrn.checked == false){
myChart.data.labels = ['الفاعلية'];
myChart.config,data.datasets[0].data = [eff[0]];
myChart.config.data.datasets[1].data = [eff[1]];
myChart.update();
}
else if(CBSat.checked == false && CBEff.checked == false && CBLrn.checked == true){
myChart.data.labels = ['سهولة التعلم'];
myChart.config.data.datasets[0].data = [lrn[0]];
myChart.config.data.datasets[1].data = [lrn[1]];
myChart.update();
}
else if(CBSat.checked == true && CBEff.checked == false && CBLrn.checked == true){
myChart.data.labels = ['الرضى العام', 'سهولة التعلم'];
myChart.config.data.datasets[0].data = [ sat[0], lrn[0]];
myChart.config.data.datasets[1].data = [sat[1], lrn[1]];
myChart.update();
}
else if(CBSat.checked == false && CBEff.checked == true && CBLrn.checked == true){
myChart.data.labels = ['الفاعلية','سهولة التعلم'];
myChart.config.data.datasets[0].data = [eff[0], lrn[0]];
myChart.config.data.datasets[1].data = [eff[1], lrn[1]];
myChart.update();
}

else {
myChart.data.labels = labels;
myChart.config.data.datasets[0].data = [eff[0], sat[0], lrn[0]];
myChart.config.data.datasets[1].data = [eff[1], sat[1], lrn[1]];
myChart.update();
}}




/*CBSat.addEventListener('click', (event) => {
  if (event.currentTarget.checked) {
    myChart.data.labels = labels.filter(c => c != 'الرضى العام');
    data_positive2 = data_positive.splice();
    myChart.update();}
  else {
    myChart.data.labels = labels.add('الرضى العام');
    mychart.update();
  }
});*/






</script>
<br>


<div class="btn-group mt-5" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary" onclick="window.print()" >
                            <i class="fa-solid fa-print"></i> طباعة </button>

                          <button type="button" id='downloadPDF'class="btn btn-outline-secondary" onclick="generatePDF()">
                            <i class="fa fa-download"></i> تحميل </button>
                        </div>
<div class="m-4" style="position: relative; left:37%;">
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_email"></a>
    </div>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <!-- AddToAny END -->
</div>
<script>
       function generatePDF() {
      const canvas = document.getElementById("myChart");
      const canvasImage = canvas.toDataURL('image/jpg', 1.0);
      let pdf = new jsPDF('landscape');
      pdf.setFontSize(20);
      pdf.addImage(canvasImage, 'JPG', 15,15,280,150);
      pdf.save(app_name+'_reviews_report.pdf');
   }
</script>

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


<script>
	window.addEventListener('load', function(){

		sharerbox({
			// Icon list: 'site1, site2, site3...'
			// Icon size: number
			socialNetworks: 'facebook twitter whatsapp linkedin reddit',
			iconSize: 45,
			// Setup arguments: Behavior, Position, Color, Visibility, Message
			behavior: 'popup',
			position: 'right',
			color: 'black',
			visibility: true,
			message: 'Write a custom message/description here (optional)'
		});
	});
</script>


