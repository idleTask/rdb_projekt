<?php include "../model/model.php" ?>
<?php include "../model/model2.php" ?>
<script>
    //alle Produktionsbereiche
    var produktionsbereiche = <?php echo json_encode($produktionsbereiche);  ?>;
    produktionsbereiche.shift();
    //alle Energieverbräuche
    var energieverbräuche = <?php echo json_encode($energieverbräuche);  ?>;
    energieverbräuche.shift();
    //todo: Co2Emission

    //default chart text
    var titleText = "Energieverbrauch in TJ";
    //default jahr
    var jahr = 1995;
   //dropdownmenu buttons und dropdownmenu
   var ddButtons = document.querySelectorAll('div.dropdown-menu button');
   var dropdownMenu2 = document.getElementById("dropdownMenu2");

    
    var color = Chart.helpers.color;
    var horizontalBarChartData = {
            labels: produktionsbereiche,
            datasets: [{
                label: 'Energieverbrauch',
                backgroundColor: color('red').alpha(0.5).rgbString(),
                borderColor: 'red',
                borderWidth: 1,
                data: [16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ]
            }]

        };
        
        
    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
            
           
        window.myHorizontalBar = new Chart(ctx, {
            type: 'horizontalBar',
            data: horizontalBarChartData,
                
            options: {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each horizontal bar to be 2px wide
                maintainAspectRatio: false,
                elements: {
                    rectangle: {
                        borderWidth: 2,
                    }
                },
             
                responsive: true,
                legend: {
                    position: 'right',
                },
                legend: false,
                title: {
                    display: true,
                    text: titleText
                }
            }
        });
    };

    document.getElementById('option1').addEventListener('click', function() {
            myHorizontalBar.options.title.text = "Energieverbrauch in TJ";
            horizontalBarChartData.datasets[0].label = "Energieverbrauch";
            horizontalBarChartData.datasets[0].data = shuffle([16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ]);            
            window.myHorizontalBar.update();              
    });
    document.getElementById('option2').addEventListener('click', function() {
            myHorizontalBar.options.title.text = "CO2-Emission in t";
            horizontalBarChartData.datasets[0].label = "CO2-Emission";
            horizontalBarChartData.datasets[0].data = [16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ];
            window.myHorizontalBar.update();
    });
        
    //dropdown button function
    for (let i = 0; i < ddButtons.length; i++){
        ddButtons[i].id = i;
        ddButtons[i].onclick = function(){
            jahr = ddButtons[i].innerHTML;
            //todo: daten anpassen
           
        }
    }
        
      
        
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}



</script>