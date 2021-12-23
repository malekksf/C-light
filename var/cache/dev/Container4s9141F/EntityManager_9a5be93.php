<?php

namespace Container4s9141F;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0116c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerae1a1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23728 = [
        
    ];

    public function getConnection()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getConnection', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getMetadataFactory', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getExpressionBuilder', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'beginTransaction', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getCache', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'transactional', array('func' => $func), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->transactional($func);
    }

    public function commit()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'commit', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->commit();
    }

    public function rollback()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'rollback', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getClassMetadata', array('className' => $className), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'createQuery', array('dql' => $dql), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'createNamedQuery', array('name' => $name), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'createQueryBuilder', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'flush', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'clear', array('entityName' => $entityName), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->clear($entityName);
    }

    public function close()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'close', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->close();
    }

    public function persist($entity)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'persist', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'remove', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'refresh', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'detach', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'merge', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'contains', array('entity' => $entity), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getEventManager', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getConfiguration', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'isOpen', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getUnitOfWork', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getProxyFactory', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'initializeObject', array('obj' => $obj), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'getFilters', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'isFiltersStateClean', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'hasFilters', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return $this->valueHolder0116c->hasFilters();
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

        $instance->initializerae1a1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0116c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0116c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0116c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, '__get', ['name' => $name], $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        if (isset(self::$publicProperties23728[$name])) {
            return $this->valueHolder0116c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0116c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder0116c;
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
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0116c;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder0116c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, '__isset', array('name' => $name), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0116c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0116c;
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
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, '__unset', array('name' => $name), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0116c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0116c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, '__clone', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        $this->valueHolder0116c = clone $this->valueHolder0116c;
    }

    public function __sleep()
    {
        $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, '__sleep', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;

        return array('valueHolder0116c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae1a1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae1a1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerae1a1 && ($this->initializerae1a1->__invoke($valueHolder0116c, $this, 'initializeProxy', array(), $this->initializerae1a1) || 1) && $this->valueHolder0116c = $valueHolder0116c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0116c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0116c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
