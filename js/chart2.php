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

    var gesamtverbrauch = 0;
    var gv = [];
    var test = [];
    var relEnergie = [];
    for(let j = 0; j < 20; j++){

        for (let i = 0; i < energieverbräuche.length; i++){

        gesamtverbrauch += parseInt(energieverbräuche[i]["Jahr_"+(1995+j)]);

      }
      gv.push(gesamtverbrauch);
      for (let k = 0; k < energieverbräuche.length; k++){

        test.push((parseFloat((energieverbräuche[k]["Jahr_"+(1995+j)]))/gesamtverbrauch)*100);
      }
      relEnergie.push(test);
      test = [];
      gesamtverbrauch = 0;
    }
console.log(relEnergie);

var config = {
            type: 'line',
            data: {
                labels: ["1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015"],
                datasets: [{
                    label: "1. Produktionsbereich",
                    backgroundColor: 'red',
                    borderColor: 'red',
                    data: [10, 30, 39, 20, 25, 34, -10],
                    fill: false,
                }, {
                    label: "2.Produktionsbereich",
                    fill: false,
                   	backgroundColor: 'blue',
                    borderColor: 'blue',
                    data: [18, 33, 22, 19, 11, 39, 30],
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Vergleich der Produktionsbereiche'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            // the data minimum used for determining the ticks is Math.min(dataMin, suggestedMin)
                            suggestedMin: 10,

                            // the data maximum used for determining the ticks is Math.max(dataMax, suggestedMax)
                            suggestedMax: 50
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };


</script>
