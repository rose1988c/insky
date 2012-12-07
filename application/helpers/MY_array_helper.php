<?php
// any_in_array() 本不存在于Array Helper，所有这里定义了一个新的辅助函数
function any_in_array($needle, $haystack)
{
    $needle = (is_array($needle)) ? $needle : array($needle);

    foreach ($needle as $item)
    {
        if (in_array($item, $haystack))
        {
            return TRUE;
        }
    }

    return FALSE;
}

// random_element() 已经存在于 Array Helper，所以这里新的函数将取代原函数。(译注：原文为override重写)
function random_element($array)
{
    shuffle($array);
    return array_pop();
}

function arrayfitter_fav($data, $type_id, $random_element = false){
	$newarray = array();
	if(is_array($data)) {


		foreach ($data as $value) {
			if ($value->type_id == $type_id) {
				$newarray [] = $value;
			}
		}

	}

	if ($random_element && count($newarray) > 0 ) {
		shuffle($newarray);
	}

	return $newarray;

}

function arrayfitter_types ($types, $type_id) {
	$newarray = array();
	if(is_array($types)) {

		foreach ($types as $type) {
			if ($type->type_id == $type_id) {
				$newarray = $type;
			}
		}
	}

	return $newarray;
}

function img_exists($url) {
    if(!empty($url) && file_get_contents($url,0,null,0,1))
        return true;
    else
        return false;
}

?>