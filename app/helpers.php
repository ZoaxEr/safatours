<?php 

function get_lang($key, $default, $locale = 'en')
{
    $translator = app(\Illuminate\Translation\Translator::class);
    if ($translator->get($key) == $key) {
        $translator->addLines([$key => $default], $locale);
    }

    return $translator->get($key);
}

function closestLowerHigherNr($array, $nr) {
  	sort($array);

  	$re_arr = array('lower'=>min(current($array), $nr), 'higher'=>max(end($array), $nr), 'closest'=>$nr);

  	foreach($array AS $num) {
    	if($nr > $num) { 
    		$re_arr['lower'] = $num;
    	} else if($nr <= $num) {
      		$re_arr['higher'] = $num;
      		break;
    	}
  	}

  	$re_arr['closest'] = (abs($nr - $re_arr['lower']) < abs($re_arr['higher'] - $nr)) ? $re_arr['lower'] : $re_arr['higher'];

  	return $re_arr;
}