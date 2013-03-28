<?php

class DemoClass
{

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

    /**
     * Set the foo array.
     * @param array $new_foo_array
     */
    public function setFoo(array $new_foo_array)
    {
        $this->foo_array = $new_foo_array;
    }

    /**
     * Return the sum of numbers in foo_array
     * @return number
     */
    public function sumFoo()
    {
        return array_sum($this->foo_array);
    }

    /**
     * This needs doc too!
     * @return array
     */
    public function sortFoo()
    {
        $temp_array = $this->foo_array;
        if (sort($temp_array)) {
            $this->foo_array = $temp_array;
            return $this->foo_array;
        } else {
            throw new Exception("Unsortable array was unsortable!");
        }
    }

}
