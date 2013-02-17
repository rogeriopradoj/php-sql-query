<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbm
 * Date: 07/02/13
 * Time: 00:49
 * To change this template use File | Settings | File Templates.
 */

namespace RBM\SqlQuery\Renderer;

use RBM\SqlQuery\GenericRenderer;
use RBM\SqlQuery\Column;
use RBM\SqlQuery\Table;

class MySql extends GenericRenderer
{

    protected function _renderColumnName(Column $column)
    {
        return $this->_enclose(parent::_renderColumnName($column));
    }

    protected function _renderTableName(Table $table)
    {
        return $this->_enclose(parent::_renderTableName($table));
    }

    protected function _enclose($string, $char = '`')
    {
        return $char.$string.$char;
    }
}