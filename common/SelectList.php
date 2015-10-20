<?php
require_once "AllCommonUtils.php";

class SelectList 
{
	private $id;  //select list identifer
	private $label; //list label
    private $items;  // array of items
    private $options; // hold all html options
    private $selectMenu; // final select menu
    
    
    function __construct($id, $itemArray='') 
    {
        $this->items = $itemArray;
        $this->id = $id;
    }

     
    private function buildOptionsWithValues()
    {
        $this->options = "<option value=''>Select One</option>";
        forEach($this->items as $item) {
            $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
        }
    }
    
    private function buildOptionsWithKeys() 
    {
    	
        $this->options = "<option value=''>Select One</option>";
		foreach($this->items as $key => $val) 
		{ 
			$this->options .= '<option value='.$key . '>'.$val.'</option>';
		} 

    }
    
    private function buildSelect() 
    {
        $this->selectMenu = 
        	$this->label .
        	'<select class="" name="' . $this->id . '">' .
        	$this->options .
        	'</select>';
    }

	private function buildLabel($text)
	{
		$this->label =
			'<label for="' .$this->id . '">' .
			$text . '</label>';
	}
	
    public function makeMenuWithValues($labelText) 
    {
        $this->buildOptionsWithValues();
        $this->buildLabel($labelText);
        $this->buildSelect();
        return $this->selectMenu;
    }

    public function makeMenuWithKeys($labelText) 
    {
        $this->buildOptionsWithKeys();
        $this->buildLabel($labelText);
        $this->buildSelect();
        //dump($this->selectMenu);
        return $this->selectMenu;
    }

}
?>