$(function(t){$("#data-table5").DataTable({language:{searchPlaceholder:"Search...",sSearch:""}}),$(".select2").select2({minimumResultsForSearch:1/0})});var e={chart:{type:"line",height:50,width:100,sparkline:{enabled:!0},dropShadow:{enabled:!1,blur:3,opacity:.2,show:!1}},stroke:{show:!0,curve:"smooth",lineCap:"butt",colors:void 0,width:2,dashArray:0},fill:{gradient:{enabled:!1}},series:[{name:"Total Sales",data:[0,45,54,38,56,24,65,31,37,39,62,51,35,41,35,27,93,53,61,27,54,43,19,46]}],yaxis:{min:0,show:!1},xaxis:{axisBorder:{show:!1}},yaxis:{axisBorder:{show:!1}},colors:["#fc7303"]},e=new ApexCharts(document.querySelector("#bitcoinChart"),e);e.render();var a={chart:{type:"line",height:50,width:100,sparkline:{enabled:!0},dropShadow:{enabled:!1,blur:3,opacity:.2}},stroke:{show:!0,curve:"smooth",lineCap:"butt",colors:void 0,width:2,dashArray:0},fill:{gradient:{enabled:!1}},series:[{name:"Total stats",data:[0,45,93,53,61,27,54,43,19,46,54,38,56,24,65,31,37,39,62,51,35,41,35,27]}],yaxis:{min:0},colors:["#ffc107"]},a=new ApexCharts(document.querySelector("#enthereumChart"),a);a.render();var r={chart:{type:"line",height:50,width:100,sparkline:{enabled:!0},dropShadow:{enabled:!1,blur:3,opacity:.2}},stroke:{show:!0,curve:"smooth",lineCap:"butt",colors:void 0,width:2,dashArray:0},fill:{gradient:{enabled:!1}},series:[{name:"Total Income",data:[0,35,41,35,27,93,53,61,27,54,43,19,46,45,54,38,56,24,65,31,37,39,62,51]}],yaxis:{min:0},colors:["#467fcf"]},r=new ApexCharts(document.querySelector("#litcoinChart"),r);r.render();