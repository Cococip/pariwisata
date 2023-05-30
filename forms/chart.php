<!DOCTYPE html>
<html>
<head>
 <title>sdn1gaden</title>
 <link rel="stylesheet" type="text/css" href="Chartjs/Chart.min.css">
 <script type="text/javascript"src="https://code.jquery.com/jquery-3.4.1.js"></script>
 <script type="text/javascript" src="Chartjs/Chart.min.js"> </script>
</head>
<body>
<h2 >Data Siswa</h2> 
 
<div style="width: 600px;" >
 <canvas id="myChart"></canvas>
</div>
<script>
 $.getJSON( "http://localhost/sdn1gaden/forms/siswa.php", function( data ) {

    //buat array untuk label kelas
    var labels =[];
    //buat array untuk data Jml Perempuan
    var data_P =[];
     //buat array untuk data Jml Laki-laki
    var data_L =[];

    $(data).each(function(i){         
        labels.push(data[i].Kelas); 
        data_P.push(data[i].Jml_P);
        data_L.push(data[i].Jml_L);
    });  

    //deklarasi chartjs untuk membuat grafik 2d di id mychart 
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
      //chart akan ditampilkan sebagai bar chart
        type: 'bar',
        data: {
          //membuat label chart
            labels: labels,
            datasets: [{
                label: "Jumlah Laki-laki",
                backgroundColor: "pink",
                borderColor: "red",
                borderWidth: 1,
                data: data_L
              },
              {
                label: "Jumlah Perempuan",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
                data: data_P
              }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });  
});
</script>
</body>
</html>