# numeric-input
PHP - Problem solving


The user interface contains two types of user input controls: TextInput, which accepts all texts and NumericInput, which accepts only digits.


the class TextInput that contains:


Public function add($text) - adds the given text to the current value.
Public function getValue() - returns the current value (string).
Implement the class NumericInput that:


Inherits from TextInput.
Overrides the add method so that each non-numeric text is ignored.
For example, the following code should output '10':


$input = new NumericInput();

$input->add('1');

$input->add('a');

$input->add('0');

echo $input->getValue();


