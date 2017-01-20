<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $text;
    public $author_id;

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if ('author' === $name) {
            if (null != $this->author_id) {
                return Author::findOneById($this->author_id);
            } else {
                return false;
            }
        }
    }

}