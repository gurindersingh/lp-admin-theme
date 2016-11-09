<?php
namespace App\Library;


class GetFontIcons
{
    /**
     * Font Awesome Icons v 4.7.0
     * @var
     */
    protected $fontAwesomeIcons;

    /**
     * Material design Icons npm-version-1.7.22
     * @var
     */
    protected $mdi;

    /**
     * @return mixed
     */
    public function getFaList()
    {
        $this->fontAwesomeIcons = require 'data/fontAwesome.php';

        return $this->fontAwesomeIcons;
    }

    /**
     * @return mixed
     */
    public function getMdiList()
    {
        $this->mdi = require 'data/mdi.php';

        return $this->mdi;
    }
}