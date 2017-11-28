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
            produktionsbereiche = <?php echo json_encode($produktionsbereiche);  ?>;
            produktionsbereiche.shift();
            for (let j = 0; j < energieverbräuche.length; j++){
                    data.push(energieverbräuche[j]["Jahr_" + jahr]);  
            }
            var result = sort(produktionsbereiche, data);
            horizontalBarChartData.labels = Object.keys(result);
            horizontalBarChartData.datasets[0].data = Object.values(result);
            window.myHorizontalBar.update();              
    });
    document.getElementById('option2').addEventListener('click', function() {
            energie = false;
            myHorizontalBar.options.title.text = "CO2-Emission in t";
            horizontalBarChartData.datasets[0].label = "CO2-Emission";
            data = [];
            produktionsbereiche = <?php echo json_encode($produktionsbereiche);  ?>;
            produktionsbereiche.shift();
            for (let k = 0; k < emissionen.length; k++){
                    data.push(emissionen[k]["Jahr_" + jahr]);  
            }
            var result = sort(produktionsbereiche, data);
            horizontalBarChartData.labels = Object.keys(result);
            horizontalBarChartData.datasets[0].data = Object.values(result);
            window.myHorizontalBar.update();
    });
        
    //dropdown buttons onclick function
    for (let i = 0; i < ddButtons.length; i++){
        ddButtons[i].id = i;
        ddButtons[i].onclick = function(){
            //sets button text to selected jahr
            jahr = ddButtons[i].innerHTML;
            dropdownMenu2.innerHTML = jahr;
            //resets data und produktionsbereiche
            data = [];
            produktionsbereiche = <?php echo json_encode($produktionsbereiche);  ?>;
            produktionsbereiche.shift();
            //checkt ob energie oder co2 angezeigt werden
            if (energie){
                for (let j = 0; j < energieverbräuche.length; j++){
                    data.push(energieverbräuche[j]["Jahr_" + jahr]);  
                }
            } else if (!energie){
                for (let k = 0; k < emissionen.length; k++){
                    data.push(emissionen[k]["Jahr_" + jahr]);  
                }
            }
            //sortiert produktionsbereiche und daten
            var result = sort(produktionsbereiche, data);
            //setzt sortierte labels 
            horizontalBarChartData.labels = Object.keys(result);
            //setzt sortierte daten
            horizontalBarChartData.datasets[0].data = Object.values(result);
            //updatet chart
            window.myHorizontalBar.update();
        }
    }
        
 //sortiert nach daten und gibt ein objekt zurück mit {"Produktionsbereich" => "123456"}     
function sort (keys, daten){
    var result = {};
    var length = keys.length;
    for(var n = length-1; n>=0; n--){
        for(var m = length-n; m > 0; m--){
            if (parseInt(daten[m]) > parseInt(daten[m-1])){
                var tmp = daten[m];
                daten[m] = daten[m-1];
                daten[m-1] = tmp;
                var tmp2 = keys[m];
                keys[m] = keys[m-1];
                keys[m-1] = tmp2;
            }
        }
    }
    keys.forEach((key, i) => result[key] = parseInt(daten[i]));
    return result;
}        



</script>