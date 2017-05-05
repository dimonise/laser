<?php

namespace AppBundle\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event)
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('new')
            ->setLabel('Custom Admin Submenu')
        ;
        $newSubmenu
            ->addChild('new-subitem')
            ->setLabel('Selectors for products')
            ->setLabelAttribute('icon', 'cubes')
        ;
       /* $newSubmenu
            ->addChild('new-subitem')
            ->setLabel('Selectors for products')
        ;*/
    }
}