<?php
/*
 * This file is part of CSBill project.
 *
 * (c) 2013-2016 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace CSBill\DataGridBundle\Source;

use Doctrine\ORM\QueryBuilder;

interface Source
{
    /**
     * @return QueryBuilder
     */
    public function fetch();
}