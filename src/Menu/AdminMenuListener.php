<?php


namespace Aropixel\SyliusPagesPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $pageMenu = $menu
            ->addChild('menu-pages')
            ->setLabel('Pages')
        ;

        $pageMenu
            ->addChild('pages', ['route' => 'aropixel_admin_page_index'])
            ->setLabelAttribute('icon', 'file alternate')
            ->setLabel('Pages')
        ;


        $pageMenu
            ->addChild('categories', ['route' => 'aropixel_admin_page_category_index'])
            ->setLabelAttribute('icon', 'tags')
            ->setLabel('Categories')
        ;
    }
}
