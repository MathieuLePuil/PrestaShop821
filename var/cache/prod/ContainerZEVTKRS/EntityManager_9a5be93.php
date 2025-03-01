<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera6fb0 = null;
    private $initializerd86e2 = null;
    private static $publicProperties9b457 = [
        
    ];
    public function getConnection()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getConnection', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getMetadataFactory', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getExpressionBuilder', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'beginTransaction', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getCache', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'transactional', array('func' => $func), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'commit', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->commit();
    }
    public function rollback()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'rollback', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getClassMetadata', array('className' => $className), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'createQuery', array('dql' => $dql), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'createNamedQuery', array('name' => $name), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'createQueryBuilder', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'flush', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'clear', array('entityName' => $entityName), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->clear($entityName);
    }
    public function close()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'close', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->close();
    }
    public function persist($entity)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'persist', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'remove', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'refresh', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'detach', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'merge', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'contains', array('entity' => $entity), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getEventManager', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getConfiguration', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'isOpen', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getUnitOfWork', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getProxyFactory', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'initializeObject', array('obj' => $obj), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'getFilters', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'isFiltersStateClean', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, 'hasFilters', array(), $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        return $this->valueHoldera6fb0->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd86e2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera6fb0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera6fb0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera6fb0->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd86e2 && ($this->initializerd86e2->__invoke($valueHoldera6fb0, $this, '__get', ['name' => $name], $this->initializerd86e2) || 1) && $this->valueHoldera6fb0 = $valueHoldera6fb0;
        if (isset(self::$publicProperties9b457[$name])) {
            return $this->valueHoldera6fb0->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
