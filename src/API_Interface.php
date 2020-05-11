<?php
/**
 * @name API_Interface.php
 * @link https://alexkratky.com                         Author website
 * @link https://panx.eu/docs/                          Documentation
 * @link https://github.com/AlexKratky/APIX  Github Repository
 * @author Alex Kratky <alex@panx.dev>
 * @copyright Copyright (c) 2020 Alex Kratky
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @description API Interface. Part of panx-framework.
 */

use AlexKratky\URL;

interface API_Interface {
    public function __construct(string $endpoint);

    public function request(URL $URL): bool;

    public function error(string $msg): string;
}