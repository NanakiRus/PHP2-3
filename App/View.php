<?php

namespace App;


class View
{
    use VzukhTrait;

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function view($path)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;

        }
        include $path;
    }

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