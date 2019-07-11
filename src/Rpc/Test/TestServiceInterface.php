<?php
/**
 * Created by PhpStorm.
 * User: liuxiaodong
 * Date: 2019/1/21
 * Time: 21:28
 */

namespace ServiceComponents\Rpc\Test;

/**
 * Interface UserServiceInterface
 * @package ServiceComponents\Rpc\User
 */
interface TestServiceInterface
{
    /**
     * 日志
     * @return mixed
     */
    public function log();

    /**
     * 写日志
     * @return mixed
     */
    public function writeLog();



}