<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: sascha.presnac
 * Date: 20.04.2017
 * Time: 13:23
 */

namespace Mpociot\Couchbase;


class Helper
{
    const TYPE_NAME = 'resourceType';

    public static function getUniqueId($praefix = null)
    {
        return (($praefix !== null) ? $praefix . '::' : '') . uniqid();
    }
}
