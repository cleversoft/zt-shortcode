<?php

/**
 * ZT Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 *
 * @version     1.0.0
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesPath'))
{


    /**
     * Used to managed files & folders path by namespaces with override supported
     */
    class ZtShortcodesPath
    {

        /**
         * Array of registered namespaces
         * @var array
         */
        protected $_namespaces = array();

        /**
         * 
         * @staticvar Zo2ShortcodesPath $instances
         * @param type $name
         * @return \Zo2ShortcodesPath
         */
        public static function &getInstance($name = 'zo2')
        {
            static $instances;
            if (!isset($instances[$name]))
            {
                $instances[$name] = new ZtShortcodesPath();
            }
            return $instances[$name];
        }

        /**
         * Split classname
         * @param string $className
         * @return array
         */
        public function splitClassname($className)
        {
            return preg_split('/(?=[A-Z])/', $className, -1, PREG_SPLIT_NO_EMPTY);
        }

        /**
         * 
         * @param type $namespace
         * @param type $path
         * @return \Zo2ShortcodesPath
         */
        public function registerNamespace($namespace, $path)
        {
            if (!isset($this->_namespaces[$namespace]))
            {
                $this->_namespaces[$namespace] = array();
            }
            array_unshift($this->_namespaces[$namespace], $path);
            return $this;
        }

        /**
         * 
         * @param string $namespace
         * @return array
         */
        public function getNamespace($namespace)
        {
            if (isset($this->_namespaces[$namespace]))
            {
                return $this->_namespaces[$namespace];
            } else
            {
                return array();
            }
        }

        /**
         * 
         * @param string $namespace
         * @param string $path
         * @return boolean|string
         */
        protected function _getPath($namespace, $path)
        {
            /* Make sure this namespace is registered */
            if (isset($this->_namespaces[$namespace]))
            {
                /* Find first exists filePath */
                foreach ($this->_namespaces[$namespace] as $namespace)
                {
                    $physicalPath = $namespace . DIRECTORY_SEPARATOR . $path;
                    if (JFile::exists($physicalPath))
                    {
                        return rtrim(str_replace('/', DIRECTORY_SEPARATOR, $physicalPath), DIRECTORY_SEPARATOR);
                    } elseif (JFolder::exists($physicalPath))
                    {
                        return rtrim(str_replace('/', DIRECTORY_SEPARATOR, $physicalPath), DIRECTORY_SEPARATOR);
                    }
                }
            }
        }

        /**
         * 
         * @param string $className
         * @return string|boolean
         */
        public function getPathByClassname($className)
        {
            $array = $this->splitClassname($className);
            if (count($array) > 1)
            {
                $prefix = array_shift($array);
                if ($prefix == 'Zt')
                {
                    $subPrefix = array_shift($array);
                    if ($subPrefix == 'Shortcodes')
                    {
                        return $this->_getPath($subPrefix, strtolower(implode(DIRECTORY_SEPARATOR, $array) . '.php'));
                    }
                }
            }
            return false;
        }

        /**
         * Get physical path by key
         * @param string $key
         * @return string|boolean
         */
        public function getPath($key)
        {
            /* Extract key to get namespace and path */
            $parts = explode('://', $key);
            if (is_array($parts) && count($parts) == 2)
            {
                $namespace = $parts[0];
                $path = $parts[1];
                return $this->_getPath($namespace, $path);
            }
            return false;
        }

        /**
         * Get URL path by key
         * @param string $key
         * @return string|boolean
         */
        public function getUrl($key)
        {
            /* Extract key to get namespace and path */
            $parts = explode('://', $key);
            if (is_array($parts) && count($parts) == 2)
            {
                $namespace = $parts[0];
                $path = $parts[1];
                $filePath = $this->_getPath($namespace, $path);
                if ($filePath)
                {
                    return $this->toUrl($filePath);
                }
            }
            return false;
        }

        /**
         * Convert physical path to URL
         * @param string $path
         * @return string
         */
        public function toUrl($path, $pathOnly = false)
        {
            $relative = str_replace(JPATH_ROOT, '', $path);
            $relative = trim(JPath::clean($relative, '/'), '/');
            if ($pathOnly)
            {
                return rtrim(JUri::root(true), '/') . '/' . $relative;
            } else
            {
                return rtrim(JUri::root(), '/') . '/' . $relative;
            }
        }

    }

}