<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected variable';
    private   $private = 'private variable';

    function iterateVisible() {
        print "MyClass::iterateVisible:" . '</br>';
        foreach ($this as $key => $value) {
            print "$key => $value"  . '</br>';
        }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value" . '</br>';
}
echo '</br>';


$class->iterateVisible();



