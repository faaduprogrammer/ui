<?php

declare(strict_types=1);

namespace atk4\ui\Layout;

use atk4\ui\Panel\Loadable;
use atk4\ui\View;

class Generic extends View
{
    /**
     * Add a loadable View.
     *
     * @throws \atk4\core\Exception
     */
    public function addRightPanel(Loadable $panel): Loadable
    {
        return $this->owner->add($panel, 'RightPanel');
    }
}
