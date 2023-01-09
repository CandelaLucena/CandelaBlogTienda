<?php

namespace ContainerGYxTjMf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5d0bd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f559 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8f150 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getConnection', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getMetadataFactory', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getExpressionBuilder', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'beginTransaction', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getCache', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'transactional', array('func' => $func), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'commit', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->commit();
    }

    public function rollback()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'rollback', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getClassMetadata', array('className' => $className), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'createQuery', array('dql' => $dql), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'createNamedQuery', array('name' => $name), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'createQueryBuilder', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'flush', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'clear', array('entityName' => $entityName), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->clear($entityName);
    }

    public function close()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'close', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->close();
    }

    public function persist($entity)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'persist', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'remove', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'refresh', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'detach', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'merge', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'contains', array('entity' => $entity), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getEventManager', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getConfiguration', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'isOpen', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getUnitOfWork', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getProxyFactory', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'initializeObject', array('obj' => $obj), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'getFilters', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'isFiltersStateClean', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'hasFilters', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return $this->valueHolder5d0bd->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer6f559 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5d0bd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5d0bd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5d0bd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, '__get', ['name' => $name], $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        if (isset(self::$publicProperties8f150[$name])) {
            return $this->valueHolder5d0bd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d0bd;

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

        $targetObject = $this->valueHolder5d0bd;
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
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d0bd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5d0bd;
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
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, '__isset', array('name' => $name), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d0bd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5d0bd;
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
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, '__unset', array('name' => $name), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d0bd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5d0bd;
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
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, '__clone', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        $this->valueHolder5d0bd = clone $this->valueHolder5d0bd;
    }

    public function __sleep()
    {
        $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, '__sleep', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;

        return array('valueHolder5d0bd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f559 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f559;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6f559 && ($this->initializer6f559->__invoke($valueHolder5d0bd, $this, 'initializeProxy', array(), $this->initializer6f559) || 1) && $this->valueHolder5d0bd = $valueHolder5d0bd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5d0bd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d0bd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
