
        var color = Chart.helpers.color;
        var horizontalBarChartData = {
            labels: ["Erz.d. Landwirtschaft u. Jagd sowie damit verb. DL", "Forstwirtschaftl. Erzeugnisse und Dienstleistungen", "Fische und Fischereierz., Aquakulturerz., DL", "Kohle", "Erdöl und Erdgas", "Erze, Steine und Erden, sonstige Bergbauerz., DL", "Nahrungs- u. Futtermittel, Getränke, Tabakerzeugn.", "Textilien, Bekleidung, Leder und Lederwaren", "Holz,Holz- u.Korkwaren (oh.Möbel),Flecht- u.Korbw.", "Papier, Pappe und Waren daraus", "DL d.Vervielf. v. besp.Ton-, Bild- u. Datenträgern", "Kokerei- und Mineralölerzeugnisse", " " , " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "],
            datasets: [{
                label: 'Energieverbrauch',
                backgroundColor: color('red').alpha(0.5).rgbString(),
                borderColor: 'red',
                borderWidth: 1,
                data: [16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ]
            }]

        };
        var titleText = "Energieverbrauch";
        
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
                myHorizontalBar.options.title.text = "Energieverbrauch";
                horizontalBarChartData.datasets[0].label = "Energieverbrauch";
                horizontalBarChartData.datasets[0].data = shuffle([16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ]);            
                window.myHorizontalBar.update();              
        });
        document.getElementById('option2').addEventListener('click', function() {
                myHorizontalBar.options.title.text = "CO2-Emission";
                horizontalBarChartData.datasets[0].label = "CO2-Emission";
                horizontalBarChartData.datasets[0].data = [16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ];
                window.myHorizontalBar.update();
        });
      
        
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