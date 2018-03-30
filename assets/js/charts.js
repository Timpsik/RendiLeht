google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData1 = $.ajax({ 
          url: baseurl+"Statistics/getlocdata", 
          dataType: "json", 
          async: false 
          }).responseText; 
		  
      var jsonData2 = $.ajax({ 
          url: baseurl+"Statistics/getbroswerdata", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
		   var jsonData3 = $.ajax({ 
          url: baseurl+"Statistics/getosdata", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data1 = new google.visualization.DataTable(jsonData1); 
	  var data2 = new google.visualization.DataTable(jsonData2); 
	  var data3 = new google.visualization.DataTable(jsonData3); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart1 = new google.visualization.PieChart(document.getElementById('chart_loc'));
	var chart2 = new google.visualization.PieChart(document.getElementById('chart_browser')); 	  
	var chart3 = new google.visualization.PieChart(document.getElementById('chart_OS'));
      chart1.draw(data1, {width: 900, height: 500}); 
	  chart2.draw(data2, {width: 900, height: 500}); 
	  chart3.draw(data3, {width: 900, height: 500}); 
    } 