//Created by Margaret Chen (mdc5bv), working with Jonathan Wen (jsw2dg) on CS4640 Web PL project

const changeDisplay = () => {
    let charts = Array.from(document.getElementsByClassName("col-3"));
    // kinda random number, know there's more than 2
    if (charts.length > 3) {
        console.log(charts);
        Array.from(charts).forEach(chart => {
             chart.className = 'col';
             console.log(chart);
        });
    } else {
        charts = document.getElementsByClassName("col");
        console.log(charts);
        Array.from(charts).forEach(chart => {
            chart.className = "col-3";
        });
    }

    pie = document.getElementById("chartjs-4");
    stats = document.getElementById("stats");
    stats.className = "col w-100";

    test = document.getElementById("test");
    test.className = "container";
}
