<?php include "../model/model1.php" ?>
<?php include "../model/model2.php" ?>
<?php include "../model/model3.php" ?>

<script>
    //alle Produktionsbereiche
    var produktionsbereiche = <?php echo json_encode($produktionsbereiche);  ?>;
    produktionsbereiche.shift();
    console.log(produktionsbereiche);
    //alle Energieverbräuche
    var energieverbräuche = <?php echo json_encode($energieverbräuche);  ?>;
    energieverbräuche.shift();
    //todo: Co2Emission
    var emissionen = <?php echo json_encode($emissionen);  ?>;
    emissionen.shift();
    //default chart text
    var titleText = "Energieverbrauch in TJ";
    //dropdownmenu buttons und dropdownmenu
    var div = document.getElementById('divDropdown1');
    var div2 =  document.getElementById('divDropdown2');
    var dropdownMenu1 = document.getElementById("dropdownMenu1");
    var dropdownMenu2 = document.getElementById("dropdownMenu2");
    createDropdown(produktionsbereiche);
    var ddButtons = document.querySelectorAll('div#divDropdown1 button');
    var ddButtons2 = document.querySelectorAll('div#divDropdown2 button');
    //checkbox werte
    var checkEn = document.getElementById("checkEn");
    var checkCo = document.getElementById("checkCo");


 //dropdown buttons onclick 
    var jahr;
    for (let i = 0; i < ddButtons.length; i++){
        ddButtons[i].id = i;
        ddButtons[i].onclick = function(){
            //sets button text to selected jahr
            jahr = ddButtons[i].innerHTML;
            dropdownMenu1.innerHTML = jahr;
            //sets data
           // updateData();
        }
    }
    for (let i = 0; i < ddButtons2.length; i++){
        ddButtons2[i].id = i;
        ddButtons2[i].onclick = function(){
            //sets button text to selected jahr
            jahr = ddButtons2[i].innerHTML;
            dropdownMenu2.innerHTML = jahr;
            //sets data
           // updateData();
        }
    }


var config = {
            type: 'line',
            data: {
                labels: ["1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014"],
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


function createDropdown(produktionsbereiche){

    produktionsbereiche.forEach(function(element){
       div.innerHTML = div.innerHTML + "<button class='dropdown-item' type='button'>" + element + "</button>";
       div2.innerHTML = div2.innerHTML + "<button class='dropdown-item' type='button'>" + element + "</button>";   
    });
}

</script>

