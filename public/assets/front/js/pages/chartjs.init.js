!function(){function r(r){if(null!==document.getElementById(r)){var o=document.getElementById(r).getAttribute("data-colors");return(o=JSON.parse(o)).map((function(r){var o=r.replace(" ","");if(-1==o.indexOf("--"))return o;var e=getComputedStyle(document.documentElement).getPropertyValue(o);return e||void 0}))}}var o=document.getElementById("lineChart");lineChartColor=r("lineChart"),o.setAttribute("width",o.parentElement.offsetWidth);new Chart(o,{type:"line",data:{labels:["January","February","March","April","May","June","July","August","September","October"],datasets:[{label:"Sales Analytics",fill:!0,lineTension:.5,backgroundColor:lineChartColor[0],borderColor:lineChartColor[1],borderCapStyle:"butt",borderDash:[],borderDashOffset:0,borderJoinStyle:"miter",pointBorderColor:lineChartColor[1],pointBackgroundColor:"#fff",pointBorderWidth:1,pointHoverRadius:5,pointHoverBackgroundColor:lineChartColor[1],pointHoverBorderColor:"#fff",pointHoverBorderWidth:2,pointRadius:1,pointHitRadius:10,data:[65,59,80,81,56,55,40,55,30,80]},{label:"Monthly Earnings",fill:!0,lineTension:.5,backgroundColor:lineChartColor[2],borderColor:lineChartColor[3],borderCapStyle:"butt",borderDash:[],borderDashOffset:0,borderJoinStyle:"miter",pointBorderColor:lineChartColor[3],pointBackgroundColor:"#fff",pointBorderWidth:1,pointHoverRadius:5,pointHoverBackgroundColor:lineChartColor[3],pointHoverBorderColor:"#eef0f2",pointHoverBorderWidth:2,pointRadius:1,pointHitRadius:10,data:[80,23,56,65,23,35,85,25,92,36]}]},options:{scales:{yAxes:[{ticks:{max:100,min:20,stepSize:10}}]}}});var e=document.getElementById("bar");barChartColor=r("bar"),e.setAttribute("width",e.parentElement.offsetWidth);new Chart(e,{type:"bar",data:{labels:["January","February","March","April","May","June","July"],datasets:[{label:"Sales Analytics",backgroundColor:barChartColor[0],borderColor:barChartColor[0],borderWidth:1,hoverBackgroundColor:barChartColor[1],hoverBorderColor:barChartColor[1],data:[65,59,81,45,56,80,50,20]}]},options:{scales:{xAxes:[{barPercentage:.4}]}}});var a=document.getElementById("pieChart");pieChartColors=r("pieChart");new Chart(a,{type:"pie",data:{labels:["Desktops","Tablets"],datasets:[{data:[300,180],backgroundColor:pieChartColors,hoverBackgroundColor:pieChartColors,hoverBorderColor:"#fff"}]}});var t=document.getElementById("doughnut");doughnutChartColors=r("doughnut");new Chart(t,{type:"doughnut",data:{labels:["Desktops","Tablets"],datasets:[{data:[300,210],backgroundColor:doughnutChartColors,hoverBackgroundColor:doughnutChartColors,hoverBorderColor:"#fff"}]}});var l=document.getElementById("polarArea");polarAreaChartColors=r("polarArea");new Chart(l,{type:"polarArea",data:{labels:["Series 1","Series 2","Series 3","Series 4"],datasets:[{data:[11,16,7,18],backgroundColor:polarAreaChartColors,label:"My dataset",hoverBorderColor:"#fff"}]}});var n=document.getElementById("radar");radarChartColors=r("radar");new Chart(n,{type:"radar",data:{labels:["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"],datasets:[{label:"Desktops",backgroundColor:radarChartColors[0],borderColor:radarChartColors[1],pointBackgroundColor:radarChartColors[1],pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:radarChartColors[1],data:[65,59,90,81,56,55,40]},{label:"Tablets",backgroundColor:radarChartColors[2],borderColor:radarChartColors[3],pointBackgroundColor:radarChartColors[3],pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:radarChartColors[3],data:[28,48,40,19,96,27,100]}]}})}();