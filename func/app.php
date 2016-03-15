<?php

function navbar($data){
	$html = '';
	//   unset($data['logo']); // Suppression de la clé logo
	foreach ($data['menu'] as $key => $value) {
		if(!is_array($value) && $value != false){
			$html .= '<li><a href="'. $value .'">'. $key .'</a></li>';
		}elseif( $value !== false ){
			if(isset($value['link'])){$link = $value['link'];}else{$link = '';}
			if(isset($value['class'])){$class = ' class="'. $value['class'] .'"';}else{$class = '';}
			$html .= '<li'. $class .'><a href="'. $link .'">'. $key .'</a></li>';
		}else{
			$html .= '<li class="disabled"><a class="disabled" style="pointer-event: none;" href="">'. $key .'</a></li>';
		}
	}
	return $html;
}

function aside($data){
	$html = '';
	foreach ($data as $key => $value) {
		if(!is_array($value)){
			$html .= '<li href="#" class="list-group-item">'. $key .'</li>';
		}else{
			if(isset($value['active']) && $value['active'] === true){ $class = ' active'; }else{ $class = ''; }
			if(isset($value['badge'])){ $badge = '<span class="badge">'. $value['badge'] .'</span>'; }else{ $badge = ''; }
			$html .= '<li href="#" class="list-group-item'. $class .'">'. $key . $badge .'</li>';
		}
	}
	return $html;
}

function content($data){
	$html = '';
	foreach ($data as $key => $value) {
		if(isset($value['in'])){$in = $value['in'];}else{$in = '';}
		if(isset($value['class'])){$class = ' class="'. $value['class'] .'"';}else{$class = '';}
		if(isset($value['id'])){$id = ' id="'. $value['id'] .'"';}else{$id = '';}
		if(isset($value['add'])){
			$add = '';
			foreach ($value['add'] as $k => $v) {
			$add .= ' '.$k.'="'. $v .'"';
			}
		}else{ $add = ''; }
		$html .= '<'. $key . $class . $id . $add .'>'. $in .'</'.$key.'>';
	}
	return $html;
}

function tabContent($data){
	$html = '';
	if(isset($data['heading'])){ $html .= '<div class="panel-heading">'. $data['heading'] .'</div>';}
	if(isset($data['body'])){
		$html .= '<div class="panel-body">';
		foreach ($data['body'] as $key => $value) {
			$balise = '<'.$key;
        $balise .= attrEdit($value);
			$balise .= '>';
				if(isset($value['in'])){ $balise .= $value['in'];}
			$html .= $balise .'</'.$key.'>';
		}
		$html .= '</div>';
	}
	return table($data, $html);
}

function table($data, $html){
	$data = $data['table'];
	$table = '<table';
    $table .= attrEdit($data);
		$table .= '>'; /* FERMETURE DE TABLE ! */
	// INTER
		$inter = $data['inter'];
		$cont = '';

		foreach ($inter as $kinter => $vinter) { /* FOREACH DE THEAD/TBODY/TFOOTER */
			$cont .= '<'.$kinter;
        $cont .= attrEdit($vinter);

			$cont .= '>';

      foreach ($vinter['in'] as $kinterIn => $vinterIn) {
        $cont .= '<'.$kinterIn;
          $cont .= attrEdit($vinterIn);

        $cont .= '>';

        $vinterContent = $vinter['in'][$kinterIn]['content'];
        foreach ($vinterContent as $keyContent => $valueContent) {
            if(!is_array( $vinterContent[$keyContent] )){ $cont .= '<td>'. $vinterContent[$keyContent] .'</td>'; }else{
              $BaliseContent = $vinterContent[$keyContent];
              $cont .= '<'.$BaliseContent["balise"];
              $cont .= attrEdit($BaliseContent);

              $cont .= '>';
              $cont .= $BaliseContent['in'];
              $cont .= '</'.$BaliseContent["balise"].'>';
            }
        }

        $cont .= '</'.$kinterIn.'>';
      }


			$cont .= '</'.$kinter.'>';
		}

		$table .= $cont;
	// end INTER
	$table .= '</table>';


	$html .= $table;
	return $html;
}

function attrEdit($data){
  $attr = '';
  if(isset($data['class'])){$attr .= ' class="'. $data['class'] .'"';}
  if(isset($data['id'])){$attr .= ' id="'. $data['id'] .'"';}
  if(isset($data['attr'])){
    $binterinBaliseContent = '';
    foreach ($data['attr'] as $kBaliseContent => $vBaliseContent) {
      $binterinBaliseContent .= ' '. $kBaliseContent.'="'. $vBaliseContent .'"';
    }
    $attr .= $binterinBaliseContent;
  }
  return $attr;
}
