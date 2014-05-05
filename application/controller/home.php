<?php

/**
 * Class Home
 */
class Home extends Controller
{
    /**
     * PAGE: index
     */
    public function index()
    {
		$title = $this->get_title('Index of Home');
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/menu.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     */
    public function exampleOne()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/menu.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     */
    public function exampleTwo()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/menu.php';
        require 'application/views/home/example_two.php';
        require 'application/views/_templates/footer.php';
    }
}
