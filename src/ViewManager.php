<?php
/**
 * slince view component
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\View;

class ViewManager implements ViewManagerInterface
{

    protected $_viewPath;
    
    function setViewPath($path)
    {
        $this->_viewPath = $path;
    }
    
    function getViewPath()
    {
        return $this->_viewPath;
    }
}