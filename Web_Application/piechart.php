<!DOCTYPE HTML>
<html>

<head>  
<script type="text/javascript">
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",
  {
    title:{
      text: "How my time is spent in a week?",
      fontFamily: "arial black"
    },
                animationEnabled: true,
    legend: {
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    theme: "theme1",
    data: [
    {        
      type: "pie",
      indexLabelFontFamily: "Garamond",       
      indexLabelFontSize: 20,
      indexLabelFontWeight: "bold",
      startAngle:0,
      indexLabelFontColor: "MistyRose",       
      indexLabelLineColor: "darkgrey", 
      indexLabelPlacement: "inside", 
      toolTipContent: "{name}: {y}hrs",
      showInLegend: true,
      indexLabel: "#percent%", 
      dataPoints: [
        {  y: 52, name: "Time At Work", legendMarkerType: "triangle"},
        {  y: 44, name: "Time At Home", legendMarkerType: "square"},
        {  y: 12, name: "Time Spent Out", legendMarkerType: "circle"}
      ]
    }
    ]
  });
  chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>

</html>