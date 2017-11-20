
        var color = Chart.helpers.color;
        var horizontalBarChartData = {
            labels: ["Erz.d. Landwirtschaft u. Jagd sowie damit verb. DL", "Forstwirtschaftl. Erzeugnisse und Dienstleistungen", "Fische und Fischereierz., Aquakulturerz., DL", "Kohle", "Erdöl und Erdgas", "Erze, Steine und Erden, sonstige Bergbauerz., DL", "Nahrungs- u. Futtermittel, Getränke, Tabakerzeugn.", "Textilien, Bekleidung, Leder und Lederwaren", "Holz,Holz- u.Korkwaren (oh.Möbel),Flecht- u.Korbw.", "Papier, Pappe und Waren daraus", "DL d.Vervielf. v. besp.Ton-, Bild- u. Datenträgern", "Kokerei- und Mineralölerzeugnisse", " " , " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color('red').alpha(0.5).rgbString(),
                borderColor: 'red',
                borderWidth: 1,
                data: [
                    10,
                    20
                ]
            }]

        };
        var titleText = "Energieverbrauch";
        var bool = false;
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            
           
            window.myHorizontalBar = new Chart(ctx, {
                type: 'horizontalBar',
                data: horizontalBarChartData,
                options: {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each horizontal bar to be 2px wide
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                        }
                    },
                    responsive: true,
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: titleText
                    }
                }
            });

        };

        document.getElementById('auswahl').addEventListener('click', function() {
            bool = !bool;
            if (bool) {
                myHorizontalBar.options.title.text = "CO2-Emission";
                horizontalBarChartData.datasets[0].data = [16703713,490989,54261,2922596,2936879,1747172, 11382259,2423522, 5497788,11198845,650741,24672289, ];
            } else {
                myHorizontalBar.options.title.text = "Energieverbrauch";
            }
            
            window.myHorizontalBar.update();
        });