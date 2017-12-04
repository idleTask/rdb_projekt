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
            createDropdown(['hi','eins','zwei']);

        };

function createDropdown(produktionsbereiche){
    var div = document.getElementById('divDropdown1');
    for (let i = 0; i < produktionsbereiche.length; i++){
        div.innerHTML = div.innerHTML + "<button class='dropdown-item' type='button'>" + produktionsbereiche[i] + "</button>";
    }
}