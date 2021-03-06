<?php

declare(strict_types=1);

namespace Bolt\Content;

use Bolt\Entity\Field;

final class FieldFactory
{
    public function __construct()
    {
    }

    /**
     * @param string $name
     *
     * @return Field
     */
    public static function get(string $name = 'generic'): Field
    {
        $classname = '\\Bolt\\Entity\\Field\\' . ucwords($name) . 'Field';
        if (class_exists($classname)) {
            $field = new $classname();
        } else {
            $field = new Field();
        }

        return $field;
    }
}
