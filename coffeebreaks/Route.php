<?php


namespace coffeebreaks;


/**
 * Class Route
 * @package coffeebreaks
 */
class Route
{
    /**
     * @var array
     */
    private $url;
    /**
     * @var
     */
    private $folder;
    /**
     * @var
     */
    private $file;

    /**
     * @var
     */
    private $route;

    /**
     * Route constructor.
     */
    public function __construct()
    {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRIPPED);

        $this->url = explode('/', $url);

        @$this->folder = $this->url[0] = ($this->url[0] == '' ? 'index' : $this->url[0]);
        @$this->file = $this->url[1] = ($this->url[1] ? $this->url[1] : null);

        $this->set();
    }


    /**
     *
     */
    private function set()
    {

        if (file_exists(INCLUDE_PATH.DIRECTORY_SEPARATOR. $this->folder.'.php')){
            require $this->route = INCLUDE_PATH.DIRECTORY_SEPARATOR. $this->folder.'.php';

        }elseif(file_exists(INCLUDE_PATH.DIRECTORY_SEPARATOR. $this->folder.DIRECTORY_SEPARATOR.$this->file.'.php')){
            require $this->route = INCLUDE_PATH.DIRECTORY_SEPARATOR. $this->folder.DIRECTORY_SEPARATOR.$this->file.'.php';

        }else{
            require $this->route = INCLUDE_PATH.DIRECTORY_SEPARATOR.'404.php';
        }

    }

}