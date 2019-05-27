<!DOCTYPE html>
<html lang="tr">

  <head>
  
	<!-- META tagleri ve sayfa açılış genişliği -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Büro destek sistemi">
    <meta name="author" content="Mihail Frolov">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <title>Büro Destek Sistemi</title>

    <!-- Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Stil dosyası -->
    <link href="css/stil.css" rel="stylesheet">
  </head>

  <body id="yukari">

    <!-- Menü -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#yukari">Giriş</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#grafik1">İlk yarı</a>
            </li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="#grafik2">İkinci yarı</a>
            </li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="#grafikyillik">Yıllık</a>
            </li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="#grafikpasta">Dava yoğunluğu</a>
            </li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="#grafikdonut">İş süreçleri</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="giris">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">BÜRO DESTEK SİSTEMİ</div>
        </div>
      </div>
    </header>

    <!-- Grafik ve tablo -->
    <section id="grafik1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Grafikler(İlk yarı)</h2>
<canvas id="myChart" width="400" height="200"></canvas>
<script>
var canvas = document.getElementById('myChart');
var data = {
    labels: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran"],
    datasets: [
        {
            label: "Görüşme başvuru sayısı",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "white",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [80, 20, 30, 25, 20, 15,0],
        },
		{
            label: "Başarılı görüşme sayısı",
            backgroundColor: "#3e95cd",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#F0FFF0",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [39, 14, 21, 17, 11, 15,0],
        },
		{
            label: "Potansiyel dava oranı",
            backgroundColor: "#8e5ea2",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#F5F5DC",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [48.75, 70, 56.6, 68, 55, 100,0,100],
        },
		{
            label: "Sonuçlanabilecek dava sayısı",
            backgroundColor: "#c45850",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#FAEBD7",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [10, 8, 14, 8, 9, 10,5,0],
        },
    ]
};
var option = {
animation: {
				duration:5000
}

};


var myBarChart = Chart.Bar(canvas,{
	data:data,
  options:option
});
</script>
</section>
	<section id="grafik2">
	<div class="container">
	<div class="row">
          <div class="col-lg-12 text-center">
	<h2 class="section-heading text-uppercase">Grafikler(İkinci yarı)</h2>
<canvas id="myChart2" width="400" height="200"></canvas>
<script>
var canvas = document.getElementById('myChart2');
var data = {
    labels: ["Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
    datasets: [
        {
            label: "Görüşme başvuru sayısı",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "white",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [20, 5, 35, 25, 24, 17,0],
        },
		{
            label: "Başarılı görüşme sayısı",
            backgroundColor: "#3e95cd",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#F0FFF0",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [13, 5, 35, 11, 18, 13,0],
        },
		{
            label: "Potansiyel dava oranı",
            backgroundColor: "#8e5ea2",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#F5F5DC",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [65, 100, 100, 44, 75, 76.48,0,100],
        },
		{
            label: "Sonuçlanabilecek dava sayısı",
            backgroundColor: "#c45850",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#FAEBD7",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [8, 1, 10, 8, 9, 10,5,0],
        },
    ]
};
var option = {
animation: {
				duration:5000
}

};


var myBarChart = Chart.Bar(canvas,{
	data:data,
  options:option
});
</script>
	</section>
</section>
	<section id="grafikyillik">
	<div class="container">
	<div class="row">
          <div class="col-lg-12 text-center">
	<h2 class="section-heading text-uppercase">Grafikler(Yıllık karşılaştırma)</h2>
<canvas id="myChart3" width="400" height="200"></canvas>
<script>
var canvas = document.getElementById('myChart3');
var data = {
    labels: ["İlk yarı", "İkinci yarı"],
    datasets: [
        {
            label: "Görüşme başvuru sayısı",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "white",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [190, 136,0],
        },
		{
            label: "Başarılı görüşme sayısı",
            backgroundColor: "#3e95cd",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#F0FFF0",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [117, 94,0],
        },
		{
            label: "Potansiyel dava oranı",
            backgroundColor: "#8e5ea2",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#F5F5DC",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [66.39, 74.75,0,100],
        },
		{
            label: "Sonuçlanabilecek dava sayısı",
            backgroundColor: "#c45850",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 2,
            hoverBackgroundColor: "#FAEBD7",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [64, 51,0],
        },
    ]
};
var option = {
animation: {
				duration:5000
}

};


var myBarChart = Chart.Bar(canvas,{
	data:data,
  options:option
});
</script>
	</section>
<section id="grafikpasta">
	<div class="container">
	<div class="row">
          <div class="col-lg-12 text-center">
	<h2 class="section-heading text-uppercase">Dava yoğunluğu</h2>
<canvas id="myChart4" width="400" height="200"></canvas>
<script>
new Chart(document.getElementById("myChart4"), {
    type: 'pie',
    data: {
      labels: ["İşe iade davaları", "Ağır ceza davaları", "Ceza davaları", "İcra davaları"],
      datasets: [{
        label: "Dava sayıları",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [57,12,30,16]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Dava sayıları(adet)'
      }
    }
});
</script>
	</section>
<section id="grafikdonut">
	<div class="container">
	<div class="row">
          <div class="col-lg-12 text-center">
	<h2 class="section-heading text-uppercase">İş süreçleri</h2>
<canvas id="myChart5" width="400" height="200"></canvas>
<script>
new Chart(document.getElementById("myChart5"), {
    type: 'doughnut',
    data: {
      labels: ["Görüşmeler", "Dava takibi", "Duruşmalar", "Belgeleme"],
      datasets: [{
        label: "İş süreçleri",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [22,40,18,20]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'İş süreçleri(Yüzdelik dilim)'
      }
    }
});
</script>
	</section>
          </div>
		   
        <?php
            $connect=mysqli_connect("localhost","root","","oto");
			mysqli_query($connect,"SET CHARACTER SET 'utf8'");
			mysqli_query($connect,"SET SESSION collation_connection ='utf8_unicode_ci'");
			
            
            ?>
                
			
            
            </tbody>
            </table>
	  
	 <!-- Java script -->
    <script src="scriptler/jquery/jquery.js"></script>
    <script src="scriptler/jquery-easing/jquery.easing.js"></script>
    <script src="scriptler/js/java.js"></script>
    </div>
        </div>    
      </div>

  </body>
</html>
