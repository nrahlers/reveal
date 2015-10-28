$( document ).ready(function() {
    
    var boy = 0;
    var girl = 0;
    renderHighChart(girl,boy);
    $('.pickBoy').on('click',function(){
        boy += 1;
        renderHighChart(boy,girl);
    });
    $('.pickGirl').on('click',function(){
        girl += 1;
        renderHighChart(boy,girl);
    });
  function renderHighChart(girlValue, boyValue){
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RACHELLE BOY OR GIRL'
        },
        xAxis: {
            categories: ['SEX OF THE BABY']
        },
        yAxis: {
            min: 0
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'BOY',
            data: [boyValue]
        }, {
            name: 'GIRL',
            data: [girlValue]
        }]
    });
  }
})