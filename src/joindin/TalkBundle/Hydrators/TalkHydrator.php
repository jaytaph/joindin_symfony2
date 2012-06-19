<?php

namespace joindin\TalkBundle\Hydrators;

use Doctrine\ORM\Internal\Hydration\ObjectHydrator;

class TalkHydrator extends ObjectHydrator
{
    protected function hydrateRowData(array $row, array &$cache, array &$result)
    {
        parent::hydrateRowData($row, $cache, $result);


        foreach ($result as $itemkey => $item) {
            if (! is_array($item)) continue;

            $entity = array_shift($item);

            foreach ($item as $k => $v) {
                $entity->$k = $v;
            }
            $result[$itemkey] = $entity;
        }

    }

}