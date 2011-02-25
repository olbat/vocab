<?php
class Link
{
  var $url;
  
  var $name;
  
  var $style;
  
  function Link($url, $name, $style = array())
  {
    $this->url = $url;
    $this->name = $name;
    $this->style = $style;
  }
  
  function parse($html, $current_url)
  {
    if($html->url($this->url) == $current_url)
      $this->style['class'] = array_key_exists('class', $this->style) ? $this->style['class'] . ' current' : 'current';
    return '<li>' . $html->link($this->name, $this->url, $this->style) . '</li>';
  }
}

class Menu
{
  var $id = false;
  
  var $links = array();
  
  var $selected = false;
  
  function Menu($id)
  {
    $this->id = $id;
  }
  
  function setSelected($selected)
  {
    $this->selected = $selected;
  }
  
  function addLink($url, $name, $style = array())
  {
    $this->links[] = new Link($url, $name, $style);
  }
  
  function parse($html)
  {
    $output = '';
    
    if(!empty($this->links))
    {
      $current_url = $this->selected ? $html->url($this->selected) : $html->url();
      $output = '<ul id="' . $this->id . '">';
      foreach($this->links as $link)
        $output .= $link->parse($html, $current_url);
      $output .= '</ul>';
    }
    
    return $output;
  }
}
?>