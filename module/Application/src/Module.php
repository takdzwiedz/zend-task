<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Validator\Barcode\AdapterInterface;

class Module
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\TableTable::class => function ($container) {
                    $tableGateway = $container->get(Model\TableGatewayInterface::class);
                    return new Model\TableTable($tableGateway);
                },
                Model\TableGatewayInterface::class => function($container){
            $adapter = $container->get(AdapterConfigInterface::class);
            $resultSetPrototype = new ResultSet();
            $resultSetPrototype->setArrayObjectPrototype(Model\Table);
            return new TableGateway

                }

            ]
        ];
    }
}
