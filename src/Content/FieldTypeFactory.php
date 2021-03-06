<?php

declare(strict_types=1);

namespace Bolt\Content;

final class FieldTypeFactory
{
    public function __construct()
    {
    }

    /**
     * @param string      $name
     * @param ContentType $contentType
     *
     * @return FieldType|null
     */
    public static function get(string $name, ContentType $contentType): ?FieldType
    {
        if (isset($contentType['fields'][$name])) {
            $field = new FieldType($contentType['fields'][$name]);
        } else {
            $field = new FieldType([]);
        }

        return $field;
    }

    public static function mock(array $definition, string $name = null): ?FieldType
    {
        if ($name) {
            $definition['name'] = $name;
        }

        $field = new FieldType($definition);

        return $field;
    }
}
