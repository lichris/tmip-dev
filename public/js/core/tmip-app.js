/**
 * Created by Heeseung on 2014-12-05.
 */
Morris.Donut({
    element: 'morris-donut-graph',
    data: [
        {value: $('#morris-donut-graph').data('attendance').split(',')[0], label: '출석'},
        {value: $('#morris-donut-graph').data('attendance').split(',')[1], label: '지각'},
        {value: $('#morris-donut-graph').data('attendance').split(',')[2], label: '결석'},
    ],
    colors: $('#morris-donut-graph').data('colors').split(',')
});

Morris.Donut({
    element: 'morris-donut-graph1',
    data: [
        {value: $('#morris-donut-graph1').data('attendance').split(',')[0], label: '출석'},
        {value: $('#morris-donut-graph1').data('attendance').split(',')[1], label: '지각'},
        {value: $('#morris-donut-graph1').data('attendance').split(',')[2], label: '결석'},
    ],
    colors: $('#morris-donut-graph1').data('colors').split(',')
});

Morris.Donut({
    element: 'morris-donut-graph2',
    data: [
        {value: $('#morris-donut-graph2').data('attendance').split(',')[0], label: '출석'},
        {value: $('#morris-donut-graph2').data('attendance').split(',')[1], label: '지각'},
        {value: $('#morris-donut-graph2').data('attendance').split(',')[2], label: '결석'},
    ],
    colors: $('#morris-donut-graph2').data('colors').split(',')
});

Morris.Bar({
    element: 'morris-bar-graph',
    data: [
        {x: '클래스 1', y: 10, z: 20, a: 30},
        {x: '클래스 2', y: 40, z: 50, a: 60},
        {x: '클래스 3', y: 80, z: 90, a: 100},
        {x: '클래스 4', y: 70, z: 45, a: 55}
    ],
    xkey: 'x',
    ykeys: ['y', 'z', 'a'],
    labels: ['Y', 'Z', 'A'],
    barColors: $('#morris-bar-graph').data('colors').split(','),
    hideHover: 'auto'
});

Morris.Line({
    element: 'morris-line-graph',
    data: [
        { y: '06', a: 100, b: 90, c:80},
        { y: '07', a: 75,  b: 65, c:55 },
        { y: '08', a: 50,  b: 40, c:30 },
        { y: '09', a: 75,  b: 65, c:55 },
        { y: '10', a: 50,  b: 40, c:30 },
        { y: '11', a: 75,  b: 65, c:55 },
        { y: '12', a: 100, b: 90, c:80 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    parseTime: false,
    resize: true,
    lineColors: $('#morris-line-graph').data('colors').split(','),
    xLabelMargin: 10,
    integerYLabels: true
});