<?php

namespace Container20u2Ire;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7a109 = null;
    private $initializer6262e = null;
    private static $publicPropertiesd1a15 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getConnection', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getMetadataFactory', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getExpressionBuilder', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'beginTransaction', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getCache', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'transactional', array('func' => $func), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'commit', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->commit();
    }
    public function rollback()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'rollback', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getClassMetadata', array('className' => $className), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'createQuery', array('dql' => $dql), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'createNamedQuery', array('name' => $name), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'createQueryBuilder', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'flush', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'clear', array('entityName' => $entityName), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->clear($entityName);
    }
    public function close()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'close', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->close();
    }
    public function persist($entity)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'persist', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'remove', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'refresh', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'detach', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'merge', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'contains', array('entity' => $entity), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getEventManager', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getConfiguration', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'isOpen', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getUnitOfWork', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getProxyFactory', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'initializeObject', array('obj' => $obj), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'getFilters', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'isFiltersStateClean', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'hasFilters', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return $this->valueHolder7a109->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6262e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7a109) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7a109 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7a109->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, '__get', ['name' => $name], $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        if (isset(self::$publicPropertiesd1a15[$name])) {
            return $this->valueHolder7a109->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a109;
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
        $targetObject = $this->valueHolder7a109;
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
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a109;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7a109;
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
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, '__isset', array('name' => $name), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a109;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7a109;
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
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, '__unset', array('name' => $name), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a109;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7a109;
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
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, '__clone', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        $this->valueHolder7a109 = clone $this->valueHolder7a109;
    }
    public function __sleep()
    {
        $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, '__sleep', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
        return array('valueHolder7a109');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6262e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6262e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6262e && ($this->initializer6262e->__invoke($valueHolder7a109, $this, 'initializeProxy', array(), $this->initializer6262e) || 1) && $this->valueHolder7a109 = $valueHolder7a109;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7a109;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7a109;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
