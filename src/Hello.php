<?php

/*
 * This file is part of Silarhi.
 * (c) Guillaume Sainthillier <hello@silarhi.fr>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Silarhi;

require_once  'HelloInterface.php';

class Hello implements HelloInterface
{
    private const VERSION = 'latest';

    public function display(): string
    {
        return sprintf('Hello World v%s', self::VERSION);
    }
}
$hello = new Hello();
echo $hello->display();
?>