<?php


namespace Aropixel\SyliusPagesPlugin\Entity;

use Sylius\Component\Core\Model\Image;

class PageImage extends Image
{
    private $page;

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }


}
