<?php
class ApplicationHelper extends SessionHelper
{
  function display_flash_messages()
  {
    $string = null;
    if(!($string = $this->flash_message($classname = 'error')))
    {
      if(!($string = $this->flash_message($classname = 'valid')))
      {
        $string = $this->flash_message($classname = 'notice');
      }
    }
    
    if($string)
    {
      echo '<div id="flash_messages" class="' . $classname . '"><div class="tr"></div><div class="bl"><p><span style="float: right">(<a href="javascript:void(0)" onclick="new Effect.Fade(\'flash_messages\')" style="font-weight: bold">hide</a>)</span>' . $string . '</p><div class="br"></div></div></div>';
    }
  }
 
  function pluralize($word, $count = 0, $concat = true)
  {
    return ($concat ? $count . ' ' : '') . ($count > 1 ? Inflector::pluralize($word) : $word);
  }
  
  function cut($string, $length = 40, $end = '...')
  {
    return strlen($string) > $length ? substr($string, 0, $length - 1) . $end : $string;
  }
  
  function odd(&$odd = false, $yes = 'odd', $no = '')
  {
	return $odd = !$odd ? $yes : $no;
  }
  
  function flash_message($key)
  {
    $string = null;
		if($this->__active === true)
		{
			if($this->check('flash.' . $key))
			{
				$string = $this->read('flash.' . $key);
				$this->del('flash.' . $key);
			}
		}
		return $string;
	}
  
	function value_at($key, $array)
	{
	  return $array[$key];
	}
	
	function paginator_order()
	{
	  $model = Inflector::singularize(Inflector::camelize($this->params['controller']));
	  if(is_null($order = end(explode('.', current(array_keys($this->params['paging'][$model]['options']['order']))))))
	  {
	    $order = end(explode('.', current(array_keys($this->params['paging'][$model]['defaults']['order']))));
	  }
	    
	  return $order;
	}
	
	function paginator_direction()
	{
	  $model = Inflector::singularize(Inflector::camelize($this->params['controller']));
	  if(is_null($direction = end(explode('.', current(array_values($this->params['paging'][$model]['options']['order']))))))
	  {
	    $direction = end(explode('.', current(array_values($this->params['paging'][$model]['defaults']['order']))));
	  }
	  return $direction;
	}
  
  function intToString($int, $length = 2)
  {
    while(strlen($int) < $length)
      $int = '0' . $int;
    return $int;
  }
  
  function age($birthday)
  {
    list($year,$month,$day) = explode("-",$birthday);
    $year_diff  = date('Y') - $year;
    $month_diff = date('m') - $month;
    $day_diff   = date('d') - $day;
    if ($day_diff < 0 || $month_diff < 0)
      $year_diff--;
    return $year_diff;
  }
    
  function hyperlink($string)
  {
    // link URLs
    $string = eregi_replace("(([[:alnum:]]+://)|www\.)([^[:space:]]*)([[:alnum:]#?/&=])", "<a href=\"\\1\\3\\4\" target=\"_blank\" title=\"Go to \\1\\3\\4\">\\1\\3\\4</a>", $string);

    // fix lazy URLs
    $string = eregi_replace("href=\"www","href=\"http://www", $string);

    // truncates long urls that can cause display problems
    // $string = preg_replace("/>(([[:alnum:]]+:\/\/)|www\.)([^[:space:]]{30,40})([^[:space:]]*)([^[:space:]]{10,20})([[:alnum:]#?\/&=])</", ">\\1\\3...\\5\\6<", $string);

    $string = stripslashes($string);
    return $string;
  }
  
  function required_field()
  {
    return '&nbsp;<span style="color: red">(*)</span>';
  }
  
  function required_field_phrase()
  {
    return '<p style="font-weight: bold">Required field<span style="color: red">(*)</span></p>';
  }
}
?>