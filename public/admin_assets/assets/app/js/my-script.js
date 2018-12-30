/**
 * Chart design taken from Samsung health app
 */

/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */
am4core.useTheme(am4themes_animated);

$(document).ready(function() {
    $('#example').DataTable();
} );
// weekly-visiters charts
var weekly_visiters = am4core.create("weekly-visiters", am4charts.XYChart);
weekly_visiters.hiddenState.properties.opacity = 0; // this creates initial fade-in

weekly_visiters.data = [{
    "date": "2018-01-01",
    "steps": 4561
}, {
    "date": "2018-01-02",
    "steps": 5687
}, {
    "date": "2018-01-03",
    "steps": 6348
}, {
    "date": "2018-01-04",
    "steps": 4878
}, {
    "date": "2018-01-05",
    "steps": 9867
}, {
    "date": "2018-01-06",
    "steps": 7561
}, {
    "date": "2018-01-07",
    "steps": 1287
}, {
    "date": "2018-01-08",
    "steps": 3298
}, {
    "date": "2018-01-09",
    "steps": 5697
}, {
    "date": "2018-01-10",
    "steps": 4878
}, {
    "date": "2018-01-11",
    "steps": 8788
}, {
    "date": "2018-01-12",
    "steps": 9560
}, {
    "date": "2018-01-13",
    "steps": 11687
}, {
    "date": "2018-01-14",
    "steps": 5878
}, {
    "date": "2018-01-15",
    "steps": 9789
}, {
    "date": "2018-01-16",
    "steps": 3987
}, {
    "date": "2018-01-17",
    "steps": 5898
}, {
    "date": "2018-01-18",
    "steps": 9878
}, {
    "date": "2018-01-19",
    "steps": 13687
}, {
    "date": "2018-01-20",
    "steps": 6789
}, {
    "date": "2018-01-21",
    "steps": 4531
}, {
    "date": "2018-01-22",
    "steps": 5856
}, {
    "date": "2018-01-23",
    "steps": 5737
}, {
    "date": "2018-01-24",
    "steps": 9987
}, {
    "date": "2018-01-25",
    "steps": 16457
}, {
    "date": "2018-01-26",
    "steps": 7878
}, {
    "date": "2018-01-27",
    "steps": 6845
}, {
    "date": "2018-01-28",
    "steps": 4659
}, {
    "date": "2018-01-29",
    "steps": 7892
}, {
    "date": "2018-01-30",
    "steps": 7362
}, {
    "date": "2018-01-31",
    "steps": 3268
}];

weekly_visiters.dateFormatter.inputDateFormat = "YYYY-MM-dd";
weekly_visiters.zoomOutButton.disabled = true;

var dateAxis = weekly_visiters.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.grid.template.strokeOpacity = 0;
dateAxis.renderer.minGridDistance = 5;
dateAxis.dateFormats.setKey("day", "d");
dateAxis.tooltip.hiddenState.properties.opacity = 0;
dateAxis.tooltip.hiddenState.properties.visible = false;
dateAxis.renderer.labels.template.fillOpacity = 0;
dateAxis.tooltip.disabled = true;

dateAxis.renderer.labels.template.adapter.add("text", function(text, target) {
  return text.match(/\./) ? "" : text;
});

dateAxis.tooltip.adapter.add("x", function (x, target) {
    return am4core.utils.spritePointToSvg({ x: weekly_visiters.plotContainer.pixelX, y: 0 }, weekly_visiters.plotContainer).x + weekly_visiters.plotContainer.pixelWidth / 2;
})

var valueAxis = weekly_visiters.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.inside = true;
valueAxis.renderer.labels.template.fillOpacity = 0;
valueAxis.renderer.grid.template.strokeOpacity = 0;
valueAxis.min = 0;
valueAxis.cursorTooltipEnabled = false;
valueAxis.tooltip.disabled = true;



// goal guides
var axisRange = valueAxis.axisRanges.create();
axisRange.value = 3000;
// axisRange.grid.strokeOpacity = 0.1;
// axisRange.label.text = "Goal";
axisRange.label.align = "right";
axisRange.label.verticalCenter = "bottom";
axisRange.label.fillOpacity = 0;

valueAxis.renderer.gridContainer.zIndex = 1;

var axisRange2 = valueAxis.axisRanges.create();
axisRange2.value = 6000;
// axisRange2.grid.strokeOpacity = 0.1;
// axisRange2.label.text = "2x goal";
axisRange2.label.align = "right";
axisRange2.label.verticalCenter = "bottom";
axisRange2.label.fillOpacity = 0;

var series = weekly_visiters.series.push(new am4charts.ColumnSeries);
series.dataFields.valueY = "steps";
series.dataFields.dateX = "date";
series.tooltipText = "{valueY.value}";
series.tooltip.pointerOrientation = "vertical";
series.tooltip.hiddenState.properties.opacity = 0;
series.tooltip.hiddenState.properties.visible = false;
series.tooltip.adapter.add("x", function (x, target) {
    return am4core.utils.spritePointToSvg({ x: weekly_visiters.plotContainer.pixelX, y: 0 }, weekly_visiters.plotContainer).x + weekly_visiters.plotContainer.pixelWidth / 2;
})

var columnTemplate = series.columns.template;
columnTemplate.width = 3;
columnTemplate.column.cornerRadiusTopLeft = 20;
columnTemplate.column.cornerRadiusTopRight = 20;
columnTemplate.strokeOpacity = 0;

columnTemplate.adapter.add("fill", function (fill, target) {
    var dataItem = target.dataItem;
    if (dataItem.valueY > 6000) {
        return am4core.color("#04be5b");
    }
    else {
        return am4core.color("#a93aba");
    }
})

// var cursor = new am4charts.XYCursor();
// cursor.behavior = "panX";
// chart.cursor = cursor;
// cursor.lineX.disabled = true;

weekly_visiters.events.on("datavalidated", function () {
    dateAxis.zoomToDates(new Date(2018, 0, 21), new Date(2018, 0, 28), false, true);
});

var middleLine = weekly_visiters.plotContainer.createChild(am4core.Line);
middleLine.strokeOpacity = 0;
// middleLine.stroke = am4core.color("red");
middleLine.strokeDasharray = "2,2";
middleLine.align = "center";
middleLine.zIndex = 1;
middleLine.adapter.add("y2", function (y2, target) {
    return target.parent.pixelHeight;
})



// Monthly Chart Gross Sale

var monthly_chart = am4core.create("monthly-chart", am4charts.XYChart);
monthly_chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

monthly_chart.data = [{
    "date": "2018-01-01",
    "steps": 4561
}, {
    "date": "2018-01-02",
    "steps": 5687
}, {
    "date": "2018-01-03",
    "steps": 6348
}, {
    "date": "2018-01-04",
    "steps": 4878
}, {
    "date": "2018-01-05",
    "steps": 9867
}, {
    "date": "2018-01-06",
    "steps": 7561
}, {
    "date": "2018-01-07",
    "steps": 1287
}, {
    "date": "2018-01-08",
    "steps": 3298
}, {
    "date": "2018-01-09",
    "steps": 5697
}, {
    "date": "2018-01-10",
    "steps": 4878
}, {
    "date": "2018-01-11",
    "steps": 8788
}, {
    "date": "2018-01-12",
    "steps": 9560
}, {
    "date": "2018-01-13",
    "steps": 11687
}, {
    "date": "2018-01-14",
    "steps": 5878
}, {
    "date": "2018-01-15",
    "steps": 9789
}, {
    "date": "2018-01-16",
    "steps": 3987
}, {
    "date": "2018-01-17",
    "steps": 5898
}, {
    "date": "2018-01-18",
    "steps": 9878
}, {
    "date": "2018-01-19",
    "steps": 13687
}, {
    "date": "2018-01-20",
    "steps": 6789
}, {
    "date": "2018-01-21",
    "steps": 4531
}, {
    "date": "2018-01-22",
    "steps": 5856
}, {
    "date": "2018-01-23",
    "steps": 5737
}, {
    "date": "2018-01-24",
    "steps": 9987
}, {
    "date": "2018-01-25",
    "steps": 16457
}, {
    "date": "2018-01-26",
    "steps": 7878
}, {
    "date": "2018-01-27",
    "steps": 6845
}, {
    "date": "2018-01-28",
    "steps": 4659
}, {
    "date": "2018-01-29",
    "steps": 7892
}, {
    "date": "2018-01-30",
    "steps": 7362
}, {
    "date": "2018-01-31",
    "steps": 3268
}];

monthly_chart.dateFormatter.inputDateFormat = "YYYY-MM-dd";
monthly_chart.zoomOutButton.disabled = true;

var dateAxis_monthly_chart = monthly_chart.xAxes.push(new am4charts.DateAxis());
dateAxis_monthly_chart.renderer.grid.template.strokeOpacity = 0;
dateAxis_monthly_chart.renderer.minGridDistance = 5;
dateAxis_monthly_chart.dateFormats.setKey("day", "d");
dateAxis_monthly_chart.tooltip.hiddenState.properties.opacity = 0;
dateAxis_monthly_chart.tooltip.hiddenState.properties.visible = false;
dateAxis_monthly_chart.renderer.labels.template.fillOpacity = 0;
dateAxis.renderer.labels.template.fillOpacity = 0;
dateAxis_monthly_chart.tooltip.disabled = true;
dateAxis_monthly_chart.labelsEnabled = false;



dateAxis_monthly_chart.tooltip.adapter.add("x", function (x, target) {
    return am4core.utils.spritePointToSvg({ x: monthly_chart.plotContainer.pixelX, y: 0 }, monthly_chart.plotContainer).x + monthly_chart.plotContainer.pixelWidth / 2;
})

var valueAxis_monthly_chart = monthly_chart.yAxes.push(new am4charts.ValueAxis());
valueAxis_monthly_chart.renderer.inside = true;
valueAxis_monthly_chart.renderer.labels.template.fillOpacity = 0;
valueAxis_monthly_chart.renderer.grid.template.strokeOpacity = 0;
valueAxis_monthly_chart.min = 0;
valueAxis_monthly_chart.cursorTooltipEnabled = false;
valueAxis_monthly_chart.tooltip.disabled = true;



// goal guides
var axisRange_monthly_chart = valueAxis_monthly_chart.axisRanges.create();
axisRange_monthly_chart.value = 6000;
// axisRange.grid.strokeOpacity = 0.1;
// axisRange.label.text = "Goal";
axisRange_monthly_chart.label.align = "right";
axisRange_monthly_chart.label.verticalCenter = "bottom";
axisRange_monthly_chart.label.fillOpacity = 0;

valueAxis_monthly_chart.renderer.gridContainer.zIndex = 1;

var axisRange2_monthly_chart = valueAxis_monthly_chart.axisRanges.create();
axisRange2_monthly_chart.value = 12000;
// axisRange2.grid.strokeOpacity = 0.1;
// axisRange2.label.text = "2x goal";
axisRange2_monthly_chart.label.align = "right";
axisRange2_monthly_chart.label.verticalCenter = "bottom";
axisRange2_monthly_chart.label.fillOpacity = 0;

var series_monthly_chart = monthly_chart.series.push(new am4charts.ColumnSeries);
series_monthly_chart.dataFields.valueY = "steps";
series_monthly_chart.dataFields.dateX = "date";
series_monthly_chart.tooltipText = "{valueY.value}";
series_monthly_chart.tooltip.pointerOrientation = "vertical";
series_monthly_chart.tooltip.hiddenState.properties.opacity = 0;
series_monthly_chart.tooltip.hiddenState.properties.visible = false;
series_monthly_chart.tooltip.adapter.add("x", function (x, target) {
    return am4core.utils.spritePointToSvg({ x: monthly_chart.plotContainer.pixelX, y: 0 }, monthly_chart.plotContainer).x + monthly_chart.plotContainer.pixelWidth / 2;
})

var columnTemplate_monthly_chart = series_monthly_chart.columns.template;
columnTemplate_monthly_chart.width = 3;
columnTemplate_monthly_chart.column.cornerRadiusTopLeft = 20;
columnTemplate_monthly_chart.column.cornerRadiusTopRight = 20;
columnTemplate_monthly_chart.strokeOpacity = 0;

columnTemplate_monthly_chart.adapter.add("fill", function (fill, target) {
    var dataItem_monthly_chart = target.dataItem;
    if (dataItem_monthly_chart.valueY > 6000) {
        return am4core.color("#0082d5");
    }
    else {
        return am4core.color("#d2335c");
    }
})


monthly_chart.events.on("datavalidated", function () {
    dateAxis_monthly_chart.zoomToDates(new Date(2018, 0, 1), new Date(2018, 0, 31), false, true);
});

var middleLine_monthly_chart = monthly_chart.plotContainer.createChild(am4core.Line);
middleLine_monthly_chart.strokeOpacity = 0;
// middleLine.stroke = am4core.color("red");
middleLine_monthly_chart.strokeDasharray = "2,2";
middleLine_monthly_chart.align = "center";
middleLine_monthly_chart.zIndex = 1;
middleLine_monthly_chart.adapter.add("y2", function (y2, target) {
    return target.parent.pixelHeight;
})

// cursor.events.on("cursorpositionchanged", updateTooltip);
// dateAxis.events.on("datarangechanged", updateTooltip);

function updateTooltip() {
    dateAxis_monthly_chart.showTooltipAtPosition(0.5);
    series_monthly_chart.showTooltipAtPosition(0.5, 0);
    series_monthly_chart.tooltip.validate(); // otherwise will show other columns values for a second
}



// Monthly Chart 2

// Monthly Chart Gross Sale

var monthly_chart1 = am4core.create("monthly-chart1", am4charts.XYChart);
monthly_chart1.hiddenState.properties.opacity = 0; // this creates initial fade-in

monthly_chart1.data = [{
    "date": "2018-01-01",
    "steps": 4561
}, {
    "date": "2018-01-02",
    "steps": 5687
}, {
    "date": "2018-01-03",
    "steps": 6348
}, {
    "date": "2018-01-04",
    "steps": 4878
}, {
    "date": "2018-01-05",
    "steps": 9867
}, {
    "date": "2018-01-06",
    "steps": 7561
}, {
    "date": "2018-01-07",
    "steps": 1287
}, {
    "date": "2018-01-08",
    "steps": 3298
}, {
    "date": "2018-01-09",
    "steps": 5697
}, {
    "date": "2018-01-10",
    "steps": 4878
}, {
    "date": "2018-01-11",
    "steps": 8788
}, {
    "date": "2018-01-12",
    "steps": 9560
}, {
    "date": "2018-01-13",
    "steps": 11687
}, {
    "date": "2018-01-14",
    "steps": 5878
}, {
    "date": "2018-01-15",
    "steps": 9789
}, {
    "date": "2018-01-16",
    "steps": 3987
}, {
    "date": "2018-01-17",
    "steps": 5898
}, {
    "date": "2018-01-18",
    "steps": 9878
}, {
    "date": "2018-01-19",
    "steps": 13687
}, {
    "date": "2018-01-20",
    "steps": 6789
}, {
    "date": "2018-01-21",
    "steps": 4531
}, {
    "date": "2018-01-22",
    "steps": 5856
}, {
    "date": "2018-01-23",
    "steps": 5737
}, {
    "date": "2018-01-24",
    "steps": 9987
}, {
    "date": "2018-01-25",
    "steps": 16457
}, {
    "date": "2018-01-26",
    "steps": 7878
}, {
    "date": "2018-01-27",
    "steps": 6845
}, {
    "date": "2018-01-28",
    "steps": 4659
}, {
    "date": "2018-01-29",
    "steps": 7892
}, {
    "date": "2018-01-30",
    "steps": 7362
}, {
    "date": "2018-01-31",
    "steps": 3268
}];

monthly_chart1.dateFormatter.inputDateFormat = "YYYY-MM-dd";
monthly_chart1.zoomOutButton.disabled = true;

var dateAxis_monthly_chart1 = monthly_chart1.xAxes.push(new am4charts.DateAxis());
dateAxis_monthly_chart1.renderer.grid.template.strokeOpacity = 0;
dateAxis_monthly_chart1.renderer.minGridDistance = 5;
dateAxis_monthly_chart1.dateFormats.setKey("day", "d");
dateAxis_monthly_chart1.tooltip.hiddenState.properties.opacity = 0;
dateAxis_monthly_chart1.tooltip.hiddenState.properties.visible = false;
dateAxis_monthly_chart1.renderer.labels.template.fillOpacity = 0;
dateAxis.renderer.labels.template.fillOpacity = 0;
dateAxis_monthly_chart1.tooltip.disabled = true;
dateAxis_monthly_chart1.labelsEnabled = false;



dateAxis_monthly_chart1.tooltip.adapter.add("x", function (x, target) {
    return am4core.utils.spritePointToSvg({ x: monthly_chart1.plotContainer.pixelX, y: 0 }, monthly_chart1.plotContainer).x + monthly_chart1.plotContainer.pixelWidth / 2;
})

var valueAxis_monthly_chart1 = monthly_chart1.yAxes.push(new am4charts.ValueAxis());
valueAxis_monthly_chart1.renderer.inside = true;
valueAxis_monthly_chart1.renderer.labels.template.fillOpacity = 0;
valueAxis_monthly_chart1.renderer.grid.template.strokeOpacity = 0;
valueAxis_monthly_chart1.min = 0;
valueAxis_monthly_chart1.cursorTooltipEnabled = false;
valueAxis_monthly_chart1.tooltip.disabled = true;



// goal guides
var axisRange_monthly_chart1 = valueAxis_monthly_chart1.axisRanges.create();
axisRange_monthly_chart1.value = 6000;
// axisRange.grid.strokeOpacity = 0.1;
// axisRange.label.text = "Goal";
axisRange_monthly_chart1.label.align = "right";
axisRange_monthly_chart1.label.verticalCenter = "bottom";
axisRange_monthly_chart1.label.fillOpacity = 0;

valueAxis_monthly_chart1.renderer.gridContainer.zIndex = 1;

var axisRange2_monthly_chart1 = valueAxis_monthly_chart1.axisRanges.create();
axisRange2_monthly_chart1.value = 12000;
// axisRange2.grid.strokeOpacity = 0.1;
// axisRange2.label.text = "2x goal";
axisRange2_monthly_chart1.label.align = "right";
axisRange2_monthly_chart1.label.verticalCenter = "bottom";
axisRange2_monthly_chart1.label.fillOpacity = 0;

var series_monthly_chart1 = monthly_chart1.series.push(new am4charts.ColumnSeries);
series_monthly_chart1.dataFields.valueY = "steps";
series_monthly_chart1.dataFields.dateX = "date";
series_monthly_chart1.tooltipText = "{valueY.value}";
series_monthly_chart1.tooltip.pointerOrientation = "vertical";
series_monthly_chart1.tooltip.hiddenState.properties.opacity = 0;
series_monthly_chart1.tooltip.hiddenState.properties.visible = false;
series_monthly_chart1.tooltip.adapter.add("x", function (x, target) {
    return am4core.utils.spritePointToSvg({ x: monthly_chart1.plotContainer.pixelX, y: 0 }, monthly_chart1.plotContainer).x + monthly_chart1.plotContainer.pixelWidth / 2;
})

var columnTemplate_monthly_chart1 = series_monthly_chart1.columns.template;
columnTemplate_monthly_chart1.width = 3;
columnTemplate_monthly_chart1.column.cornerRadiusTopLeft = 20;
columnTemplate_monthly_chart1.column.cornerRadiusTopRight = 20;
columnTemplate_monthly_chart1.strokeOpacity = 0;

columnTemplate_monthly_chart1.adapter.add("fill", function (fill, target) {
    var dataItem_monthly_chart1 = target.dataItem;
    if (dataItem_monthly_chart1.valueY > 6000) {
        return am4core.color("#ffffff");
    }
    else {
        return am4core.color("#ffffff");
    }
})


monthly_chart1.events.on("datavalidated", function () {
    dateAxis_monthly_chart1.zoomToDates(new Date(2018, 0, 1), new Date(2018, 0, 31), false, true);
});

var middleLine_monthly_chart1 = monthly_chart1.plotContainer.createChild(am4core.Line);
middleLine_monthly_chart1.strokeOpacity = 0;
// middleLine.stroke = am4core.color("red");
middleLine_monthly_chart1.strokeDasharray = "2,2";
middleLine_monthly_chart1.align = "center";
middleLine_monthly_chart1.zIndex = 1;
middleLine_monthly_chart1.adapter.add("y2", function (y2, target) {
    return target.parent.pixelHeight;
})

// cursor.events.on("cursorpositionchanged", updateTooltip);
// dateAxis.events.on("datarangechanged", updateTooltip);

function updateTooltip() {
    dateAxis_monthly_chart1.showTooltipAtPosition(0.5);
    series_monthly_chart1.showTooltipAtPosition(0.5, 0);
    series_monthly_chart1.tooltip.validate(); // otherwise will show other columns values for a second
}





// Available Book Stock 

var book_stock = new Chartist.Pie('#book-stock', {
  series: [75],
}, {
  donut: true,
  showLabel: true,
  donutWidth: 5,
   total: 100,
});

book_stock.on('draw', function(data) {
  if(data.type === 'slice') {
    // Get the total path length in order to use for dash array animation
    var pathLength = data.element._node.getTotalLength();

    // Set a dasharray that matches the path length as prerequisite to animate dashoffset
    data.element.attr({
      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
    });
book_stock.on('draw', (context) => {
  if (context.type === 'label') {
    context.element.attr({
      dx: context.element.root().width() / 2,
      dy: context.element.root().height() / 2
    });
  }
});
    // Create animation definition while also assigning an ID to the animation for later sync usage
    var animationDefinition = {
      'stroke-dashoffset': {
        id: 'anim' + data.index,
        dur: 1000,
        from: -pathLength + 'px',
        to:  '0px',
        easing: Chartist.Svg.Easing.easeOutQuint,
        // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
        fill: 'freeze'
      }
    };

    // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
    if(data.index !== 0) {
      animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
    }

    // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
    data.element.attr({
      'stroke-dashoffset': -pathLength + 'px'
    });

    // We can't use guided mode as the animations need to rely on setting begin manually
    // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
    data.element.animate(animationDefinition, false);
  }
});

// For the sake of the example we update the chart every time it's created with a delay of 8 seconds
book_stock.on('created', function() {
  if(window.__anim21278907124) {
    clearTimeout(window.__anim21278907124);
    window.__anim21278907124 = null;
  }
  window.__anim21278907124 = setTimeout(book_stock.update.bind(book_stock), 100000);
});



// Customer Reports 

var customer_reports = new Chartist.Bar('#customer-reports', {
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
  series: [
    [290, 490, 230, 355, 295, 0,  180],
    [390, 295, 400, 350, 220, 295, 400],
    [150, 190, 275, 110, 270, 230, 250]
  ],
}, {
	height:'220px',
  seriesBarDistance: 10,
  axisX: {
    offset: 10,
    showGrid: false,
  },
  axisY: {
    offset: 20,
    scaleMinSpace: 30
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}
);
customer_reports.on('draw', function(data) {
if(data.type === 'grid') {
if ( data.index==0){
data.element.addClass("axis");
};
}
})



// sales by products

var sales_by_products = new Chartist.Bar('#sales-by-products', {
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
  series: [
    [29, 49, 23, 35, 29, 10, 18],
    [39, 29, 40, 35, 22, 29, 40],
    [15, 19, 27, 11, 27, 23, 25],
    [19, 39, 50, 25, 32, 21, 20],
    [39, 29, 40, 35, 22, 29, 40],
    [32, 14, 34, 45, 15, 19, 30]
  ],
}, {
	height:'220px',
  seriesBarDistance: 10,
  axisX: {
    offset: 10,
    showGrid: false,
  },
  axisY: {
    offset: 20,
    scaleMinSpace: 30
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}
);

sales_by_products.on('draw', function(data) {
if(data.type === 'grid') {
if ( data.index==0){
data.element.addClass("axis");
};
}
})


// sales by category

var sales_by_category = new Chartist.Bar('#sales-by-category', {
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
  series: [
  	[29, 49, 23, 35, 29, 10, 18],
    [39, 29, 40, 35, 22, 29, 40]
    ]
}, {
	stackBars: true,
	height:'220px',
  	seriesBarDistance: 10,
  	axisX: {
    	offset: 10,
    	showGrid: false,
  },
    axisY: {
  	    offset: 20,
        scaleMinSpace: 30
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 30px'
    });
  }
}).on('draw', function(data) {
if(data.type === 'grid') {
if ( data.index==0){
data.element.addClass("axis");
};
}
});


// Registered Customers

var resitered_customers = new Chartist.Bar('#registered-customers', {
  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
  series: [
  	[29, 49, 23, 35, 29, 10, 18]
    ]
}, {
	// stackBars: true,
	height:'220px',
  	seriesBarDistance: 10,
	reverseData: true,
  	horizontalBars: true,
    axisY: {
  	    offset: 70,
        // scaleMinSpace: 30
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      // style: 'stroke-width: 10px'
      style: 'stroke: #0082d5'
    });
  }
}).on('draw', function(data) {
if(data.type === 'grid') {
if ( data.index==0){
data.element.addClass("axis");
};
}
});



// Sales by Payment methods 

// Bank Transfer

var bank_transfer = new Chartist.Pie('#bank-transfer', {
              series: [25, 75],
              labels: ['']
          }, {
              donut: true,
              donutWidth: 10,
              startAngle: 0,
              total: 100,
              showLabel: true,
              width:'160px',
              height:'160px',
              plugins: [
                  Chartist.plugins.fillDonut({
                      items: [{ //Item 1
                          content: '<i class="fa fa-tachometer text-muted"></i>',
                          position: 'bottom',
                          offsetY : 10,
                          offsetX: -2
                      }, { //Item 2
                          content: '<h3><span class="percent">%</span></h3>'
                      }]
                  })
              ],
          });
          //Animation for the first series
          bank_transfer.on('draw', function(data) {
              if(data.type === 'slice' && data.index == 0) {
                  var pathLength = data.element._node.getTotalLength();

                  data.element.attr({
                      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                  });

                  var animationDefinition = {
                      'stroke-dashoffset': {
                          id: 'anim' + data.index,
                          dur: 1200,
                          from: -pathLength + 'px',
                          to:  '0px',
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: 'freeze'
                      }
                  };
                  data.element.attr({
                      'stroke-dashoffset': -pathLength + 'px'
                  });
                  data.element.animate(animationDefinition, true);
              }
          });

          bank_transfer.on('draw', (context) => {
		  if (context.type === 'label') {
		    context.element.attr({
		      dx: context.element.root().width() / 2,
		      dy: context.element.root().height() / 2
		    });
		  }
		});


// Paypal Transfer

var paypal_transfer = new Chartist.Pie('#paypal-transfer', {
              series: [55, 45],
              labels: ['']
          }, {
              donut: true,
              donutWidth: 10,
              startAngle: 0,
              total: 100,
              showLabel: true,
              width:'160px',
              height:'160px',
              plugins: [
                  Chartist.plugins.fillDonut({
                      items: [{ //Item 1
                          content: '<i class="fa fa-tachometer text-muted"></i>',
                          position: 'bottom',
                          offsetY : 10,
                          offsetX: -2
                      }, { //Item 2
                          content: '<h3><span class="percent">%</span></h3>'
                      }]
                  })
              ],
          });
          //Animation for the first series
          paypal_transfer.on('draw', function(data) {
              if(data.type === 'slice' && data.index == 0) {
                  var pathLength = data.element._node.getTotalLength();

                  data.element.attr({
                      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                  });

                  var animationDefinition = {
                      'stroke-dashoffset': {
                          id: 'anim' + data.index,
                          dur: 1200,
                          from: -pathLength + 'px',
                          to:  '0px',
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: 'freeze'
                      }
                  };
                  data.element.attr({
                      'stroke-dashoffset': -pathLength + 'px'
                  });
                  data.element.animate(animationDefinition, true);
              }
          });

          paypal_transfer.on('draw', (context) => {
		  if (context.type === 'label') {
		    context.element.attr({
		      dx: context.element.root().width() / 2,
		      dy: context.element.root().height() / 2
		    });
		  }
		});



// Credit Card Transfer

var credit_card_transfer = new Chartist.Pie('#credit-card-transfer', {
              series: [20, 80],
              labels: ['']
          }, {
              donut: true,
              donutWidth: 10,
              startAngle: 0,
              total: 100,
              showLabel: true,
              width:'160px',
              height:'160px',
              plugins: [
                  Chartist.plugins.fillDonut({
                      items: [{ //Item 1
                          content: '<i class="fa fa-tachometer text-muted"></i>',
                          position: 'bottom',
                          offsetY : 10,
                          offsetX: -2
                      }, { //Item 2
                          content: '<h3><span class="percent">%</span></h3>'
                      }]
                  })
              ],
          });
          //Animation for the first series
          credit_card_transfer.on('draw', function(data) {
              if(data.type === 'slice' && data.index == 0) {
                  var pathLength = data.element._node.getTotalLength();

                  data.element.attr({
                      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                  });

                  var animationDefinition = {
                      'stroke-dashoffset': {
                          id: 'anim' + data.index,
                          dur: 1200,
                          from: -pathLength + 'px',
                          to:  '0px',
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: 'freeze'
                      }
                  };
                  data.element.attr({
                      'stroke-dashoffset': -pathLength + 'px'
                  });
                  data.element.animate(animationDefinition, true);
              }
          });

          credit_card_transfer.on('draw', (context) => {
		  if (context.type === 'label') {
		    context.element.attr({
		      dx: context.element.root().width() / 2,
		      dy: context.element.root().height() / 2
		    });
		  }
		});


 // Sales by Shipment Methods

// Bank Transfer

var type_ups = new Chartist.Pie('#type-ups', {
              series: [25, 75],
              labels: ['']
          }, {
              donut: true,
              donutWidth: 10,
              startAngle: 0,
              total: 100,
              showLabel: true,
              width:'160px',
              height:'160px',
              plugins: [
                  Chartist.plugins.fillDonut({
                      items: [{ //Item 1
                          content: '<i class="fa fa-tachometer text-muted"></i>',
                          position: 'bottom',
                          offsetY : 10,
                          offsetX: -2
                      }, { //Item 2
                          content: '<h3><span class="percent">%</span></h3>'
                      }]
                  })
              ],
          });
          //Animation for the first series
          type_ups.on('draw', function(data) {
              if(data.type === 'slice' && data.index == 0) {
                  var pathLength = data.element._node.getTotalLength();

                  data.element.attr({
                      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                  });

                  var animationDefinition = {
                      'stroke-dashoffset': {
                          id: 'anim' + data.index,
                          dur: 1200,
                          from: -pathLength + 'px',
                          to:  '0px',
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: 'freeze'
                      }
                  };
                  data.element.attr({
                      'stroke-dashoffset': -pathLength + 'px'
                  });
                  data.element.animate(animationDefinition, true);
              }
          });

          type_ups.on('draw', (context) => {
		  if (context.type === 'label') {
		    context.element.attr({
		      dx: context.element.root().width() / 2,
		      dy: context.element.root().height() / 2
		    });
		  }
		});


// Paypal Transfer

var type_fedex = new Chartist.Pie('#type-fedex', {
              series: [55, 45],
              labels: ['']
          }, {
              donut: true,
              donutWidth: 10,
              startAngle: 0,
              total: 100,
              showLabel: true,
              width:'160px',
              height:'160px',
              plugins: [
                  Chartist.plugins.fillDonut({
                      items: [{ //Item 1
                          content: '<i class="fa fa-tachometer text-muted"></i>',
                          position: 'bottom',
                          offsetY : 10,
                          offsetX: -2
                      }, { //Item 2
                          content: '<h3><span class="percent">%</span></h3>'
                      }]
                  })
              ],
          });
          //Animation for the first series
          type_fedex.on('draw', function(data) {
              if(data.type === 'slice' && data.index == 0) {
                  var pathLength = data.element._node.getTotalLength();

                  data.element.attr({
                      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                  });

                  var animationDefinition = {
                      'stroke-dashoffset': {
                          id: 'anim' + data.index,
                          dur: 1200,
                          from: -pathLength + 'px',
                          to:  '0px',
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: 'freeze'
                      }
                  };
                  data.element.attr({
                      'stroke-dashoffset': -pathLength + 'px'
                  });
                  data.element.animate(animationDefinition, true);
              }
          });

          type_fedex.on('draw', (context) => {
		  if (context.type === 'label') {
		    context.element.attr({
		      dx: context.element.root().width() / 2,
		      dy: context.element.root().height() / 2
		    });
		  }
		});



// Credit Card Transfer

var type_dhl = new Chartist.Pie('#type-dhl', {
              series: [20, 80],
              labels: ['']
          }, {
              donut: true,
              donutWidth: 10,
              startAngle: 0,
              total: 100,
              showLabel: true,
              width:'160px',
              height:'160px',
              plugins: [
                  Chartist.plugins.fillDonut({
                      items: [{ //Item 1
                          content: '<i class="fa fa-tachometer text-muted"></i>',
                          position: 'bottom',
                          offsetY : 10,
                          offsetX: -2
                      }, { //Item 2
                          content: '<h3><span class="percent">%</span></h3>'
                      }]
                  })
              ],
          });
          //Animation for the first series
          type_dhl.on('draw', function(data) {
              if(data.type === 'slice' && data.index == 0) {
                  var pathLength = data.element._node.getTotalLength();

                  data.element.attr({
                      'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                  });

                  var animationDefinition = {
                      'stroke-dashoffset': {
                          id: 'anim' + data.index,
                          dur: 1200,
                          from: -pathLength + 'px',
                          to:  '0px',
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: 'freeze'
                      }
                  };
                  data.element.attr({
                      'stroke-dashoffset': -pathLength + 'px'
                  });
                  data.element.animate(animationDefinition, true);
              }
          });

          type_dhl.on('draw', (context) => {
		  if (context.type === 'label') {
		    context.element.attr({
		      dx: context.element.root().width() / 2,
		      dy: context.element.root().height() / 2
		    });
		  }
		});



          // Total Sales 


 var total_salses = new Chartist.Line('#total-sales', {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  // Naming the series with the series object array notation
  series: [{
    name: 'series-1',
    data: [800,680,710,580,480,400,500,390,280,320,250,300]
  }, {
    name: 'series-2',
    data: [250, 400, 350, 420, 460, 600, 550, 800,610,650,790,620]
  }]
}, {
  fullWidth: true,
  height:'220px',
  // Within the series options you can use the series names
  // to specify configuration that will only be used for the
  // specific series.
  series: {
    'series-1': {
      lineSmooth: false
    },
    'series-2': {
      lineSmooth: false
    }
  },
  axisX: {
    offset: 10,
    showGrid: false,
  },
  axisY: {
    offset: 20,
    scaleMinSpace: 30
  },
  plugins: [
    Chartist.plugins.tooltip({
    	anchorToPoint: true
    })
  ]
}, [
  // You can even use responsive configuration overrides to
  // customize your series configuration even further!
  ['screen and (max-width: 320px)', {
    series: {
      'series-1': {
        lineSmooth: Chartist.Interpolation.none()
      },
      'series-2': {
        lineSmooth: Chartist.Interpolation.none(),
        showArea: false
      },
      'series-3': {
        lineSmooth: Chartist.Interpolation.none(),
        showPoint: true
      }
    }
  }]
]);

 // Sales by Customer Gender

var customer_genter = new Chartist.Bar('#customer-gender', {
  labels: ['Men','Women'],
   series: [
  	[1987, 1612]
    ]
}, {
	// stackBars: true,
	height:'80px',
  	seriesBarDistance: 10,
	reverseData: true,
  	horizontalBars: true,
    axisY: {
  	    offset: 70,
  	    showGrid: false,
  },

    axisX: {
  	    offset: 10,
  	    showGrid: false,
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke: #0082d5'
    });
  }
}).on('draw', function(data) {
if(data.type === 'grid') {
if ( data.index==0){
data.element.addClass("axis");
};
}
});
