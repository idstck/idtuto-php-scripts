<?php
	function menu($data, $parent = 0)
	{
		static $i = 1;
		$tab = str_repeat(" ", $i);

		if ($data[$parent]) {
			$html = "$tab<ul id='menu-tree' class='file_tree'>";
			$i++;

			foreach ($data[$parent] as $v) {
				$child = menu($data, $v->id);
				$html .= "$tab<li>";
				$html .= '<a href="' . $v->url . '">' . $v->title . '</a>';
				if ($child) {
					$i--;
					$html .= $child;
					$html .= "$tab";
				}
				$html .= '</li>';
			}

			$html .= "$tab</ul>";
			return $html;
		} else {
			return false;
		}
	}