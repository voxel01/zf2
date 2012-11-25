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
class ViewObject extends AbstractTableObject
{
    /**
     * @var string
     */
    protected $viewDefinition;

    /**
     * @var string
     */
    protected $checkOption;

    /**
     * @var bool
     */
    protected $isUpdatable;

    /**
     * @var string
     */
    protected $comment = '';

    /**
     * @return string $viewDefinition
     */
    public function getViewDefinition()
    {
        return $this->viewDefinition;
    }

    /**
     * @param string $viewDefinition to set
     * @return ViewObject
     */
    public function setViewDefinition($viewDefinition)
    {
        $this->viewDefinition = $viewDefinition;
        return $this;
    }

    /**
     * @return string $checkOption
     */
    public function getCheckOption()
    {
        return $this->checkOption;
    }

    /**
     * @param string $checkOption to set
     * @return ViewObject
     */
    public function setCheckOption($checkOption)
    {
        $this->checkOption = $checkOption;
        return $this;
    }

    /**
     * @return bool $isUpdatable
     */
    public function getIsUpdatable()
    {
        return $this->isUpdatable;
    }

    /**
     * @param bool $isUpdatable to set
     * @return ViewObject
     */
    public function setIsUpdatable($isUpdatable)
    {
        $this->isUpdatable = $isUpdatable;
        return $this;
    }

    public function isUpdatable()
    {
        return $this->isUpdatable;
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
}
