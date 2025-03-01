<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera6fb0 = null;
    private $initializerd86e2 = null;
    private static $publicProperties9b457 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getList', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getInstalledModules', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getMustBeConfiguredModules', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getUpgradableModules', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'setActionUrls', array('collection' => $collection), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerd86e2 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldera6fb0) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldera6fb0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldera6fb0->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__get', ['name' => $name], $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        if (isset(self::$publicProperties9b457[$name])) {
            return $this->valueHoldera6fb0->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6fb0;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera6fb0;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6fb0;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera6fb0;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__isset', array('name' => $name), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6fb0;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera6fb0;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__unset', array('name' => $name), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6fb0;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera6fb0;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__clone', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        $this->valueHoldera6fb0 = clone $this->valueHoldera6fb0;
    }
    public function __sleep()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__sleep', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return array('valueHoldera6fb0');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd86e2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd86e2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'initializeProxy', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera6fb0;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera6fb0;
    }
}
