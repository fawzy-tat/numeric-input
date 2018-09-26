<?php
class TextInput
{
    public $result='';

    public function add($input)
    {
     $this->result= $this->result.$input;
    }

    public function getValue()
    {
      return $this->result;
    }
}

class NumericInput extends TextInput
{
  public function add($input)
  {
   $new_input = preg_replace('/\D/', '', $input);
   $this->result= $this->result.$new_input;
  }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
