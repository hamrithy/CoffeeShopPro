<?php

class Menu{

	private $CI;

	private $menuId 	= 'id="main_navigation_bar" class="main-nav to-right responsive-nav"';
	private $classMenu  = 'clean-list clearfix';
	private $classParent= '';

	function __construct(){
		$this->CI = & get_instance();
	}

	function generateMenu($currentSelected){
		$tableName = 'dyn_menu';
		$menu = array();

		$query = $this->CI->db->get($tableName);

		if($query->num_rows() >0){

			foreach($query->result() as $row){
				$menu[$row->id]['id']           = $row->id;
                $menu[$row->id]['title']        = $row->title;
                $menu[$row->id]['link']         = $row->link_type;
                $menu[$row->id]['page']         = $row->page_id;
                $menu[$row->id]['url']          = $row->url;
                $menu[$row->id]['uri']          = $row->uri;
                $menu[$row->id]['position']     = $row->position;
                $menu[$row->id]['target']       = $row->target;
                $menu[$row->id]['parent']       = $row->parent_id;
                $menu[$row->id]['is_parent']    = $row->is_parent;
                $menu[$row->id]['show']         = $row->show_menu;
			}
		}
		
		$query->free_result();

		$strHTML = "\t".'<nav '.$this->menuId.'>'."\n";

		$strHTML .= "\t\t".'<ul class="'.$this->classMenu.'">'."\n";

		for($i = 1; $i <= count($menu); $i++){
			if(is_array($menu[$i])){
				if($menu[$i]['show'] && $menu[$i]['parent']==0) {
					if($currentSelected==$menu[$i]['title']){
						$strClassCurrent = "current-menu-item";
					}else{
						$strClassCurrent = "";
					}
					if($menu[$i]['is_parent']==true){
						$strHTML .= "\t\t\t".'<li class="menu-item-has-children '.$strClassCurrent.'">'.anchor('#', '<span>'.$menu[$i]['title'].'</span>');
					}else{
						$strHTML .= "\t\t\t\t".'<li class='.$strClassCurrent.'>'.anchor($menu[$i]['url'], '<span>'.$menu[$i]['title'].'</span>');
					}

					$strHTML .= $this->getChildren($menu,$i);

					$strHTML .= '</li>'."\n";
				}
			}
		}

		$strHTML .= "\t\t".'</ul>'."\n";

		$strHTML .= "\t".'</nav>'."\n";

		return $strHTML;
	}

	function getChildren($menu, $parentId){
		$hasSub = false;

		$strHTML = '';
		$strHTML = "\n\t\t\t\t"."<ul>"."\n";

		for($i = 1; $i <= count($menu); $i++){
			if($menu[$i]['show'] && $menu[$i]['parent']==$parentId){
				$hasSub = true;

				if($menu[$i]['is_parent']==true){
					$strHTML .= "\t\t\t\t\t\t".'<li>'.anchor('#', '<span>'.$menu[$i]['title'].'</span>');
				}else{
					$strHTML .= "\t\t\t\t\t\t".'<li>'.anchor($menu[$i]['url'], '<span>'.$menu[$i]['title'].'</span>');
				}

				$strHTML .= $this->getChildren($menu,$i);

				$strHTML .= '</li>' . "\n";
			}
		}
		$strHTML .= "\t\t\t\t\t".'</ul>'."\n";

		return ($hasSub) ? $strHTML : '';
	}
}
?>