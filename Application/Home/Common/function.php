<?
 
function title_active($this_select,$current_type)
{ 
	 
 	if($this_select==$current_type){
 		echo "active";
	}else{
	 	return;
	} 
}
 
function select_active($this_select,$current_type)
{ 
	 
 	if($this_select==$current_type){
 		echo "<i class='fa fa-arrow-down' ></i>";
	}else{
	 	return;
	} 
}
function menu_active($this_select,$current_type)
{
	if($this_select==$current_type){
 		echo "active";
	}else{
	 	return;
	} 
}