<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.validator' shared service.

return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZXSRe26FlQ', 0, 'bUGugAsy1iCV7JaUC2Q2oA', ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});