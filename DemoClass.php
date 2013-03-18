<?php

class DemoClass {

    public $foo_array;

    /**
     * Class constructor
     * @param array $foo_array
     */
    public function __construct(array $foo_array = [])
    {
          $this->foo_array = $foo_array;
    }

    /**
     * Return the $foo_array
     * @return array
     */
    public function getFoo()
    {
        return $this->foo_array;
    }

    public function setFoo(array $new_foo_array)
    {
        $this->foo_array = $new_foo_array
    }

}