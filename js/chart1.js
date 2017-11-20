
        var color = Chart.helpers.color;
        var horizontalBarChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
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
                horizontalBarChartData.datasets[0].data = [50,505,12,23,23];
            } else {
                myHorizontalBar.options.title.text = "Energieverbrauch";
            }
            
            window.myHorizontalBar.update();
        });