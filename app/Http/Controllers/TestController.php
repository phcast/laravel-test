<?php

namespace App\Http\Controllers;

class TestController
{
    /**
     * @var
     */
    protected $cal;

    /**
     * TestController constructor.
     *
     * @param $cal
     */
    public function __construct($cal)
    {
        $this->cal = $cal;
    }

    /**
     * @return bool|void
     */
    public function search()
    {
        if (true) {
            $a = 1;
            $b = 2;

            return;
        }

        return false;
    }
}
