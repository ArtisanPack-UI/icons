<?php

namespace Digitalshopfront\Icons;

use TorMorten\Eventy\Facades\Eventy;

class Icons
{

    public function getIcons( $args = [] ): array
    {
        $icons = $this->iconsList();

        return $icons;
    }

    public function iconsList(): array
    {
        $icons = [];

        return Eventy::filter( 'ds.icons.iconsList', $icons );
    }

}
