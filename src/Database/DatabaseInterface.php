<?php

namespace Arrilot\DataAnonymization\Database;

interface DatabaseInterface
{
    /**
     * Get all rows from a $table specified by where. Only $columns are selected.
     *
     * @param string      $table
     * @param array       $columns
     * @param string|null $where
     *
     * @return iterable
     */
    public function getRows($table, $columns, $where);

    /**
     * Update $column value with a $newValue.
     * Update is performed on a row specified by $primaryValue of $table.
     *
     * @param string $table
     * @param array  $primaryKeyValue
     * @param array  $column
     * @param mixed  $newValue
     *
     * @return void
     */
    public function updateByPrimary($table, $primaryKeyValue, $column, $newValue);
}
