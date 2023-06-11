<?php
/**
 * @author Rufusy Idachi <idachirufus@gmail.com>
 * @date: 6/11/2023
 * @time: 11:16 PM
 */

class MyParentClass
{
    protected int  $foo     = 1;
    private string $private = 'hidden';
}

class MyChildClass extends MyParentClass
{
    private int $bar = 2;
    public function getFoo(): int
    {
        // access parent class property
        return $this->foo;
    }
    public function getBar(): int
    {
        // access this class property
        return $this->bar;
    }
    public function getPrivate(): string
    {
        // THIS IS NOT POSSIBLE
        // return $this->private;
        return 'NOT POSSIBLE';
    }
}