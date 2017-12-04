<?php include "../model/model1.php" ?>
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
    var produktionsbereich1;
    var produktionsbereich1id;
    var produktionsbereich2;
    var produktionsbereich2id;


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

    function updateData1(){
        data1 = [];
        data3 = [];
        myLine.data.datasets[0].label = "";
        myLine.data.datasets[2].label = "";
        if (checkEn.checked){
            for (let j = 0; j < 20; j++){
                data1.push(relEnergie[j][produktionsbereich1id]);
                myLine.data.datasets[0].label = produktionsbereiche[produktionsbereich1id] + '(Energie)';
            }
        }
        if (checkCo.checked){
            for (let k = 0; k < emissionen.length; k++){
                data3.push(emissionen[produktionsbereich1id]['Jahr_'+(1995+k)]);  
                myLine.data.datasets[2].label = produktionsbereiche[produktionsbereich1id] + '(Co2)';
            }
        } 
        
        myLine.data.datasets[0].data = data1;
        myLine.data.datasets[2].data = data3;
        window.myLine.update();  
    }
    function updateData2(){
        data2 = [];
        data4 = [];
        
        if (checkEn.checked){
            for (let j = 0; j < 20; j++){
                data2.push(relEnergie[j][produktionsbereich2id]);
                myLine.data.datasets[1].label = produktionsbereiche[produktionsbereich2id] + '(Energie)';
            }
        }
        if (checkCo.checked){
            for (let k = 0; k < emissionen.length; k++){
                data4.push(emissionen[produktionsbereich2id]['Jahr_'+(1995+k)]);  
                myLine.data.datasets[3].label = produktionsbereiche[produktionsbereich2id] + '(Co2)';
            }
        } 
        
        
        myLine.data.datasets[1].data = data2;
        myLine.data.datasets[3].data = data4;
        window.myLine.update();  
    }

 
    checkEn.addEventListener('click', function(){
            updateData1();
            updateData2();

    });
    checkCo.addEventListener('click', function(){
            updateData1();
            updateData2();

    });
    //dropdown buttons onclick 
    



 //dropdown buttons onclick
    

    for (let i = 0; i < ddButtons.length; i++){
        ddButtons[i].id = i;
        ddButtons[i].onclick = function(){
            //sets button text to selected jahr
            produktionsbereich1id = i;
            produktionsbereich1 = ddButtons[i].innerHTML;
            dropdownMenu1.innerHTML = produktionsbereich1;
            //sets data
            updateData1();
        }
    }
    for (let i = 0; i < ddButtons2.length; i++){
        ddButtons2[i].id = i;
        ddButtons2[i].onclick = function(){
            //sets button text to selected jahr
            produktionsbereich2id = i;
            produktionsbereich2 = ddButtons2[i].innerHTML;
            dropdownMenu2.innerHTML = produktionsbereich2;
            //sets data
            updateData2();
        }
    }


        

var config = {
            type: 'line',
            data: {
                labels: ["1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014"],
                datasets: [{
                    label: "1. Produktionsbereich Energie",
                    backgroundColor: 'red',
                    borderColor: 'red',
                    data: [],
                    fill: false,
                }, {
                    label: "2.Produktionsbereich Energie",
                    fill: false,
                   	backgroundColor: 'blue',
                    borderColor: 'blue',
                    data: [],
                },
                {
                    label: "1. Produktionsbereich Co2",
                    legend: false,
                    fill: false,
                    backgroundColor: 'orange',
                    borderColor: 'orange',
                    data: [],
                },
                {
                    label: "2.Produktionsbereich Co2",
                    legend: false,
                    fill: false,
                    backgroundColor: 'lightblue',
                    borderColor: 'lightblue',
                    data: [],
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
                            suggestedMin: 0,

                            // the data maximum used for determining the ticks is Math.max(dataMax, suggestedMax)
                            suggestedMax: 0.5
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
