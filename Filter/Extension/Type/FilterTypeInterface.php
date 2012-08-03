<?php

namespace Lexik\Bundle\FormFilterBundle\Filter\Extension\Type;

use Millwright\ConfigurationBundle\ORM\Expr;
use Doctrine\ORM\QueryBuilder;

/**
 * Some filter type can implement this interface to apply the filter to the query.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
interface FilterTypeInterface
{
    /**
     * Add condition(s) to the query builder for the current type.
     *
     * @param QueryBuilder $queryBuilder
     * @param Expr $e
     * @param string $field
     * @param array $values
     */
    public function applyFilter(QueryBuilder $queryBuilder, Expr $e, $field, array $values);

    /**
     * Return service id used to transforme values
     *
     * @return string
     */
    public function getTransformerId();
}
