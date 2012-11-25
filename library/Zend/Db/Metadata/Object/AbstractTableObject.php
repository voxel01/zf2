<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Db
 */

namespace Zend\Db\Metadata\Object;

/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage Metadata
 */
abstract class AbstractTableObject
{

    /*
    protected $catalogName = null;
    protected $schemaName = null;
    */

    /**
     *
     * @var string
     */
    protected $name = null;

    /**
     *
     * @var string
     */
    protected $type = null;

    /**
     *
     * @var array
     */
    protected $columns = null;

    /**
     *
     * @var array
     */
    protected $constraints = null;

    /**
     * @var string
     */
    protected $comment = '';

    /**
     * @var string
     */
    protected $engine = 'InnoDB';

    /**
     * The Indexs of that Tables
     * @var array
     */
    protected $indexes = array();
    /**
     * Constructor
     *
     * @param string $name
     */
    public function __construct($name)
    {
        if ($name) {
            $this->setName($name);
        }
    }

    /**
     * Set columns
     *
     * @param array $columns
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    /**
     * Get columns
     *
     * @return array
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set constraints
     *
     * @param array $constraints
     */
    public function setConstraints($constraints)
    {
        $this->constraints = $constraints;
    }

    /**
     * Get constraints
     *
     * @return array
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the Comment
     * @param $com
     */
    public function setComment($com)
    {
        $this->comment = $com;
    }
    /**
     * Returns the comment
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Sets Engine
     * @param $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }
    /**
     * Gets Engine
     * @return string
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Adds an Index
     * @param $index
     */
    public function addIndex($index)
    {
        $this->indexes[] = $index;
    }

    /**
     * Returns the indexes
     * @return array
     */
    public function getIndexes()
    {
        return $this->indexes;
    }

    /**
     * Deletes all the indexes
     */
    public function resetIndexes()
    {
        $this->indexes = array();
    }

    /**
     * Sets the indexes
     * @param $ind
     */
    public function setIndexes($ind)
    {
        $this->indexes = $ind;
    }
}
