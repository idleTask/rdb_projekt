<?php include "../model/model.php" ?>
<?php include "../model/model2.php" ?>
<?php include "../model/model3.php" ?>
<script>
    //alle Produktionsbereiche
    var produktionsbereiche = <?php echo json_encode($produktionsbereiche);  ?>;
    produktionsbereiche.shift();
    //alle Energieverbräuche
    var energieverbräuche = <?php echo json_encode($energieverbräuche);  ?>;
    energieverbräuche.shift();
    //todo: Co2Emission
    var emissionen = <?php echo json_encode($emissionen);  ?>;
    emissionen.shift();
    //default chart text
    var titleText = "Energieverbrauch in TJ";
   //dropdownmenu buttons und dropdownmenu
   var ddButtons = document.querySelectorAll('div.dropdown-menu button');
   var dropdownMenu2 = document.getElementById("dropdownMenu2");

    var data = [];
    var jahr;
    var color = Chart.helpers.color;
    var horizontalBarChartData = {
            labels: produktionsbereiche,
            datasets: [{
                label: 'Energieverbrauch',
                backgroundColor: color('red').alpha(0.5).rgbString(),
                borderColor: 'red',
                borderWidth: 1,
                data: []
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
    var energie = true;
    document.getElementById('option1').addEventListener('click', function() {
            energie = true;
            myHorizontalBar.options.title.text = "Energieverbrauch in TJ";
            horizontalBarChartData.datasets[0].label = "Energieverbrauch";
            data = [];
            for (let j = 0; j < energieverbräuche.length; j++){
                    data.push(energieverbräuche[j]["Jahr_" + jahr]);  
            }
            horizontalBarChartData.datasets[0].data = data;
            window.myHorizontalBar.update();              
    });
    document.getElementById('option2').addEventListener('click', function() {
            energie = false;
            myHorizontalBar.options.title.text = "CO2-Emission in t";
            horizontalBarChartData.datasets[0].label = "CO2-Emission";
            data = [];
            for (let k = 0; k < emissionen.length; k++){
                    data.push(emissionen[k]["Jahr_" + jahr]);  
            }
            horizontalBarChartData.datasets[0].data = data;
            window.myHorizontalBar.update();
    });
        
    //dropdown button function
    
    for (let i = 0; i < ddButtons.length; i++){
        ddButtons[i].id = i;
        
        ddButtons[i].onclick = function(){
            console.log("button lenght: " + ddButtons[i]);
            jahr = ddButtons[i].innerHTML;
            
            dropdownMenu2.innerHTML = jahr;
            //todo: daten anpassen
            data = [];
            if (energie){
                console.log("energie daten");
                for (let j = 0; j < energieverbräuche.length; j++){
                    data.push(energieverbräuche[j]["Jahr_" + jahr]);  
                }
            } else if (!energie){
                console.log("co2 daten");
                for (let k = 0; k < emissionen.length; k++){
                    data.push(emissionen[k]["Jahr_" + jahr]);  
                }
            }
            horizontalBarChartData.datasets[0].data = data;
            window.myHorizontalBar.update();
        }
    }
        
      
        



</script>