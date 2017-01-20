<?php

namespace App;

/**
 * Class View
 * @package App
 */
class View
{
    use VzukhTrait;

    /**
     * @param $name
     * @param $value
     */
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param $path
     */
    public function view($path)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;

        }
        include $path;
    }

    /**
     * @param $template
     * @return string
     */
    public function render($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}