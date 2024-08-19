<?php
class fruit (
    public $name;
    public $color;
    public function_construct ($name, $color) (
        $this->name =$name;
        $this->color =$color;
    )
    public function intro() (
        echo "the fruit is ($this->name) and the color is ($this->color).";
    )

    //strawberry is inherited from fruit
class strawberry extends fruit (
    public function message () (
        echo "Am I a Fruit or a berry?";
    )

)
$strawberry = new strawberry ("strawberry", "red");
$strawbeerry->message ();
$strawbeerry->intro();
?>