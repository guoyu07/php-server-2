<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-02-20
 * Time: 15:20
 */

namespace inhere\server\portListeners;

use Swoole\Server as SwServer;

/**
 * Class InterfaceUdpListener
 * @package inhere\server\portListeners
 */
interface InterfaceUdpListener //extends InterfacePortListener
{
    /**
     * 接收到UDP数据包时回调此函数，发生在worker进程中
     * @param  SwServer $server
     * @param  string $data 收到的数据内容，可能是文本或者二进制内容
     * @param  array $clientInfo 客户端信息包括address/port/server_socket 3项数据
     */
    public function onPacket(SwServer $server, $data, array $clientInfo);
}