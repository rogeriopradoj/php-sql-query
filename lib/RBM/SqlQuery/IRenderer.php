<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbm
 * Date: 06/02/13
 * Time: 21:45
 * To change this template use File | Settings | File Templates.
 */

namespace RBM\SqlQuery;

interface IRenderer
{

    public function render(IQuery $query);
}