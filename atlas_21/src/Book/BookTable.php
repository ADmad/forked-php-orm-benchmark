<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Book;

use Atlas\Table\Table;

/**
 * @method BookRow|null fetchRow($primaryVal)
 * @method BookRow[] fetchRows(array $primaryVals)
 * @method BookTableSelect select(array $whereEquals = [])
 * @method BookRow newRow(array $cols = [])
 * @method BookRow newSelectedRow(array $cols)
 */
class BookTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'book';

    const COLUMNS = [
        'id' => array (
  'name' => 'id',
  'type' => 'INTEGER',
  'size' => NULL,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => false,
  'primary' => true,
  'options' => NULL,
),
        'title' => array (
  'name' => 'title',
  'type' => 'VARCHAR',
  'size' => 255,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
        'isbn' => array (
  'name' => 'isbn',
  'type' => 'VARCHAR',
  'size' => 24,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
        'price' => array (
  'name' => 'price',
  'type' => 'FLOAT',
  'size' => NULL,
  'scale' => NULL,
  'notnull' => false,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
        'author_id' => array (
  'name' => 'author_id',
  'type' => 'INTEGER',
  'size' => NULL,
  'scale' => NULL,
  'notnull' => false,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
    ];

    const COLUMN_NAMES = [
        'id',
        'title',
        'isbn',
        'price',
        'author_id',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'title' => null,
        'isbn' => null,
        'price' => null,
        'author_id' => null,
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = null;

    const AUTOINC_SEQUENCE = null;
}
