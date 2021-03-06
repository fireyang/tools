<?php   

class TaskHelper extends Helper
{
    var $helpers = array('Html');
    	
    	/**
 * generate Task link
 *
 * @param $data
 * @param $controller
 * @param $action
 */

	function table($name,$cols) {
	    $col_html="";
	    $td_html="";
		foreach( $cols as $c){ 
		    $col_html.= '<col class="col_'.$c.'" />';
		    $td_html .= '<td class="col_'.$c.'"></td>';
		}
		$table = '<div style="display: none;" id="'.$name.'"><table class="xtable">';
		$table .= $col_html;
		$table .='<tbody><tr class="xtr">';  
		$table .= $td_html;
		$table .='</tr></tbody></table></div>';	
		return $table;
	}
}
    
?>
