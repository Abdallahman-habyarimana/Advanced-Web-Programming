var province_arr = new Array("ON", "A", "SOUTH", "WEST", "EAST");
var district = new array();
district[0]="";
district[1]="NYARUGENGE|GASABO|KICUKIRO";
district[2]="MUSANZE|BURERA|GAKENKE|GICUMBI";
district[3]="MUHANGA|RUHANGO|HUYE";
district[4]="RUBAVU|NYABIHU|RUSIZI|";
district[5]="NYAGATARE|KAYONZA|BUGESERA|RWAMAGANA|NGOMA";


function print_province(province_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(province_id);
	var x, i=0;
	for(x in province_arr){
		option_str.options[i++] = new Option(province_arr[x],province_arr[x]);
	}
}

function print_district(district_id, district_index){
	var option_str = document.getElementById(district_id);
	var x, i=0; district_index++;
	var district_arr = district[district_index].split("|");
	for(x in district_arr){
            option_str.options[i++] = new Option(district_arr[x],district_arr[x]);
	}
}
