 $(document).ready(function() {

// svg path for target icon
  var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
  
  AmCharts.ready(function() {
        var map = new AmCharts.AmMap();
        map.pathToImages = "images/";
        map.dragMap = false;
		map.imagesSettings = {
        color:"#f1f1f1",
        rollOverColor: "#022956",
        rollOverScale: 3,
        selectedScale: 3,
        selectedColor: "#022956"
    };
        var dataProvider = {
            mapVar: AmCharts.maps.tnCounties,
            getAreasFromMap:true,   
			areas:[
				{id:"Bedford", color:"#022956"},
				{id:"Benton", color:"#022956"},
				{id:"Cannon", color:"#022956"},
				{id:"Crockett", color:"#022956"},
				{id:"Carroll", color:"#022956"},
				{id:"Cheatham", color:"#022956"},
				{id:"Chester", color:"#022956"},
				{id:"Clay", color:"#022956"},
				{id:"Coffee", color:"#022956"},
				{id:"Davidson", color:"#022956"},
				{id:"Decatur", color:"#022956"},
				{id:"DeKalb", color:"#022956"},
				{id:"Dickson", color:"#022956"},
				{id:"Dyer", color:"#022956"},
				{id:"Fayette", color:"#022956"},
				{id:"Fentress", color:"#022956"},
				{id:"Gibson", color:"#022956"},
				{id:"Giles", color:"#022956"},
				{id:"Hamilton", color:"#022956"},
				{id:"Hardeman", color:"#022956"},
				{id:"Hardin", color:"#022956"},
				{id:"Haywood", color:"#022956"},
				{id:"Henderson", color:"#022956"},
				{id:"Henry", color:"#022956"},
				{id:"Hickman", color:"#022956"},
				{id:"Houston", color:"#022956"},
				{id:"Humphreys", color:"#022956"},
				{id:"Jackson", color:"#022956"},
				{id:"Knox", color:"#022956"},
				{id:"Lake", color:"#022956"},
				{id:"Lauderdale", color:"#022956"},
				{id:"Lawrence", color:"#022956"},
				{id:"Lewis", color:"#022956"},
				{id:"Lincoln", color:"#022956"},
				{id:"Macon", color:"#022956"},
				{id:"Madison", color:"#022956"},
				{id:"Marshall", color:"#022956"},
				{id:"Maury", color:"#022956"},
				{id:"McNairy", color:"#022956"},
				{id:"Montgomery", color:"#022956"},
				{id:"Moore", color:"#022956"},
				{id:"Obion", color:"#022956"},
				{id:"Overton", color:"#022956"},
				{id:"Perry", color:"#022956"},
				{id:"Pickett", color:"#022956"},
				{id:"Putnam", color:"#022956"},
				{id:"Robertson", color:"#022956"},
				{id:"Rutherford", color:"#022956"},
				{id:"Shelby", color:"#022956"},
				{id:"Smith", color:"#022956"},
				{id:"Stewart", color:"#022956"},
				{id:"Sumner", color:"#022956"},
				{id:"Tipton", color:"#022956"},
				{id:"Trousdale", color:"#022956"},
				{id:"Wayne", color:"#022956"},
				{id:"Weakley", color:"#022956"},
				{id:"Williamson", color:"#022956"},
				{id:"Wilson", color:"#022956"},
				
				{id:"Carter", color:"#022956"},
				{id:"Greene", color:"#022956"},
				{id:"Hamblen", color:"#022956"},
				{id:"Hancock", color:"#022956"},
				{id:"Hawkins", color:"#022956"},
				{id:"Johnson", color:"#022956"},
				{id:"Sullivan", color:"#022956"},
				{id:"Unicoi", color:"#022956"},
				{id:"Washington", color:"#022956"},

				{id:"White", color:"#022956"},
				
				{id:"Cumberland", color:"#022956"},
				{id:"Morgan", color:"#022956"},
				{id:"Scott", color:"#022956"},
				{id:"Campbell", color:"#022956"},
				{id:"Anderson", color:"#022956"},
				{id:"Union", color:"#022956"},
				{id:"Claiborne", color:"#022956"},
				{id:"Grainger", color:"#022956"},
				{id:"Jefferson", color:"#022956"},
				{id:"Cocke", color:"#022956"},
				
				{id:"Sevier", color:"#022956"},
				{id:"Blount", color:"#022956"},
				{id:"Loudon", color:"#022956"},
				{id:"Monroe", color:"#022956"},
				{id:"McMinn", color:"#022956"},
				{id:"Polk", color:"#022956"},
				{id:"Bradley", color:"#022956"},
				{id:"Meigs", color:"#022956"},
				{id:"Roane", color:"#022956"},
				{id:"Rhea", color:"#022956"},
				{id:"Bledsoe", color:"#022956"},
				{id:"Van Buren", color:"#022956"}
				
				]

        }; 
		
        map.dataProvider = dataProvider;

        
		
        map.areasSettings = {
            autoZoom: false,
      
            selectedColor: "#022956;",
			unlistedAreasColor:"blue",
			rollOverColor: "#022956;",
			rollOverOutlineColor: "#f1f1f1",
			outlineAlpha: 1,
			outlineColor: "#f1f1f1"
        };
		
		map.zoomControl.zoomControlEnabled = false;
		map.zoomControl.panControlEnabled = false;
		map.zoomControl.buttonBorderAlpha = "0";
		map.zoomControl.buttonFillColor = "#545454";
		map.zoomControl.buttonCornerRadius = "10px";
		map.zoomControl.buttonRollOverColor = "#333";
		map.zoomControl.buttonIconColor = "#040404";
		map.zoomControl.homeIconColor = "#fff";
		
		//map.objectList = new AmCharts.ObjectList("listdiv");

map.write("mapdiv");  


        
		
                     
        
    });

});