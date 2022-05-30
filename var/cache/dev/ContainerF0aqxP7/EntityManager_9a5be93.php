<?php

namespace ContainerF0aqxP7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderabe77 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8e738 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8befa = [
        
    ];

    public function getConnection()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getConnection', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getMetadataFactory', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getExpressionBuilder', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'beginTransaction', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getCache', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'transactional', array('func' => $func), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'commit', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->commit();
    }

    public function rollback()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'rollback', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getClassMetadata', array('className' => $className), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'createQuery', array('dql' => $dql), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'createNamedQuery', array('name' => $name), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'createQueryBuilder', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'flush', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'clear', array('entityName' => $entityName), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->clear($entityName);
    }

    public function close()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'close', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->close();
    }

    public function persist($entity)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'persist', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'remove', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'refresh', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'detach', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'merge', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'contains', array('entity' => $entity), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getEventManager', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getConfiguration', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'isOpen', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getUnitOfWork', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getProxyFactory', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'initializeObject', array('obj' => $obj), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'getFilters', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'isFiltersStateClean', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'hasFilters', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return $this->valueHolderabe77->hasFilters();
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

        $instance->initializer8e738 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderabe77) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderabe77 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderabe77->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, '__get', ['name' => $name], $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        if (isset(self::$publicProperties8befa[$name])) {
            return $this->valueHolderabe77->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe77;

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

        $targetObject = $this->valueHolderabe77;
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
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe77;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderabe77;
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
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, '__isset', array('name' => $name), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe77;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderabe77;
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
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, '__unset', array('name' => $name), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe77;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderabe77;
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
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, '__clone', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        $this->valueHolderabe77 = clone $this->valueHolderabe77;
    }

    public function __sleep()
    {
        $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, '__sleep', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;

        return array('valueHolderabe77');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8e738 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8e738;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8e738 && ($this->initializer8e738->__invoke($valueHolderabe77, $this, 'initializeProxy', array(), $this->initializer8e738) || 1) && $this->valueHolderabe77 = $valueHolderabe77;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderabe77;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderabe77;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
