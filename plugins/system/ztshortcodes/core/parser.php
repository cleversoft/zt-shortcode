<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 * @since 2.0.0
 */
if (!class_exists('ZtShortcodesParser'))
{

    /**
     * Forked from WordPress API
     */
    class ZtShortcodesParser
    {

        /**
         * Container for storing shortcode tags and their hook to call for the shortcode
         *
         * @since 2.5.0
         *
         * @name $shortcode_tags
         * @var array
         * @global array $shortcode_tags
         */
        public $shortcode_tags = array();

        /**
         * Array of shortcodes
         * @var array
         */
        private $_shortcodes = array();

        /**
         * Constructor
         */
        public function __construct()
        {
            $this->loadFromFile('Shortcodes://assets/shortcodes.json');
        }

        /**
         * Load & add shortcodes from json file
         * @param string $jsonFile
         */
        public function loadFromFile($jsonFile)
        {
            $jsonFile = ZtShortcodesPath::getInstance()->getPath($jsonFile);
            if ($jsonFile)
            {
                $shortcodes = json_decode(file_get_contents($jsonFile), true);
                $this->_shortcodes = array_merge($this->_shortcodes, $shortcodes);
                // Register shortcodes
                foreach ($shortcodes as $tag => $data)
                {
                    $this->add_shortcode($tag);
                }
            }
        }

        /**
         * 
         * @staticvar ZtShortcodesParser $instance
         * @return \ZtShortcodesParser
         */
        public static function getInstance()
        {
            static $instance;
            if (empty($instance))
            {
                $instance = new ZtShortcodesParser();
            }
            return $instance;
        }

        /**
         * 
         * @return array
         */
        public function getShortcodes()
        {
            return $this->_shortcodes;
        }

        /**
         * Add hook for shortcode tag.
         *
         * There can only be one hook for each shortcode. Which means that if another
         * plugin has a similar shortcode, it will override yours or yours will override
         * theirs depending on which order the plugins are included and/or ran.
         *
         * Simplest example of a shortcode tag using the API:
         *
         *     // [footag foo="bar"]
         *     function footag_func( $atts ) {
         *         return "foo = {
         *             $atts[foo]
         *         }";
         *     }
         *     add_shortcode( 'footag', 'footag_func' );
         *
         * Example with nice attribute defaults:
         *
         *     // [bartag foo="bar"]
         *     function bartag_func( $atts ) {
         *         $args = shortcode_atts( array(
         *             'foo' => 'no foo',
         *             'baz' => 'default baz',
         *         ), $atts );
         *
         *         return "foo = {$args['foo']}";
         *     }
         *     add_shortcode( 'bartag', 'bartag_func' );
         *
         * Example with enclosed content:
         *
         *     // [baztag]content[/baztag]
         *     function baztag_func( $atts, $content = '' ) {
         *         return "content = $content";
         *     }
         *     add_shortcode( 'baztag', 'baztag_func' );
         *
         * @since 2.5.0
         *
         * @uses $shortcode_tags
         *
         * @param string $tag Shortcode tag to be searched in post content.
         * @param callable $func Hook to run when shortcode is found.
         */
        public function add_shortcode($tag, $data = null)
        {
            $path = ZtShortcodesPath::getInstance();
            // Provide custom class for this class
            if ($classFilePath = $path->getPath('Shortcodes://tag/' . $tag . '.php'))
            {
                $className = 'ZtShortcodesTag' . ucfirst($tag);
                $class = new $className();
            } else
            {
                // Use base class
                $class = new ZtShortcodesTagBase();
            }
            $this->shortcode_tags[$tag] = array($class, 'render');
            // Add to main list
            if ($data !== null)
            {
                $this->_shortcodes[$tag] = $data;
            }
        }

        /**
         * Removes hook for shortcode.
         *
         * @since 2.5.0
         *
         * @uses $shortcode_tags
         *
         * @param string $tag shortcode tag to remove hook for.
         */
        public function remove_shortcode($tag)
        {
            unset($this->shortcode_tags[$tag]);
            unset($this->_shortcodes[$tag]);
            return $this;
        }

        /**
         * Clear all shortcodes.
         *
         * This function is simple, it clears all of the shortcode tags by replacing the
         * shortcodes global by a empty array. This is actually a very efficient method
         * for removing all shortcodes.
         *
         * @since 2.5.0
         *
         * @uses $shortcode_tags
         */
        public function remove_all_shortcodes()
        {
            $this->shortcode_tags = array();
            $this->_shortcodes = array();
        }

        /**
         * Whether a registered shortcode exists named $tag
         *
         * @since 3.6.0
         *
         * @global array $shortcode_tags
         * @param string $tag
         * @return boolean
         */
        public function shortcode_exists($tag)
        {
            return array_key_exists($tag, $this->shortcode_tags);
        }

        /**
         * Whether the passed content contains the specified shortcode
         *
         * @since 3.6.0
         *
         * @global array $shortcode_tags
         * @param string $tag
         * @return boolean
         */
        public function has_shortcode($content, $tag)
        {
            if (false === strpos($content, '['))
            {
                return false;
            }

            if ($this->shortcode_exists($tag))
            {
                preg_match_all('/' . $this->get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER);
                if (empty($matches))
                    return false;

                foreach ($matches as $shortcode)
                {
                    if ($tag === $shortcode[2])
                    {
                        return true;
                    } elseif (!empty($shortcode[5]) && $this->has_shortcode($shortcode[5], $tag))
                    {
                        return true;
                    }
                }
            }
            return false;
        }

        /**
         * Verify if input content has any shortcodes
         * @param type $content
         * @return boolean
         */
        public function hasShortcodes($content)
        {
            foreach ($this->shortcode_tags as $tag => $data)
            {
                if ($this->has_shortcode($content, $tag))
                {
                    return true;
                }
            }
            return false;
        }

        /**
         * Search content for shortcodes and filter shortcodes through their hooks.
         *
         * If there are no shortcode tags defined, then the content will be returned
         * without any filtering. This might cause issues when plugins are disabled but
         * the shortcode will still show up in the post or content.
         *
         * @since 2.5.0
         *
         * @uses $shortcode_tags
         *
         * @param string $content Content to search for shortcodes
         * @return string Content with shortcodes filtered out.
         */
        public function do_shortcode($content)
        {
            // Make sure we have at least open tag
            $a = strpos($content, '[');
            if (false === strpos($content, '['))
            {
                return $content;
            }

            if (empty($this->shortcode_tags) || !is_array($this->shortcode_tags))
                return $content;

            // Generate depends
            $depends = array();

            foreach ($this->_shortcodes as $tag => $data)
            {
                // If content has this shortcode than we check for depends
                if ($this->has_shortcode($content, $tag))
                {
                    // CSS
                    if (!empty($this->_shortcodes[$tag]['depends']['css']))
                    {
                        foreach ($this->_shortcodes[$tag]['depends']['css'] as $css)
                        {
                            if (strpos($css, 'Shortcodes://') === false)
                            {
                                // Internal
                                if (strpos($css, 'http') == false)
                                {
                                    $depends['_css'][$css] = rtrim(JUri::root(true), '/') . $css;
                                } else
                                {
                                    $depends['_css'][$css] = $css;
                                }
                            } else
                            {
                                // If we'r using key than we need convert to URL
                                $depends['_css'][$css] = ZtShortcodesPath::getInstance()->getUrl($css);
                            }
                        }
                    }
                    // JS
                    if (!empty($this->_shortcodes[$tag]['depends']['js']))
                    {
                        foreach ($this->_shortcodes[$tag]['depends']['js'] as $js)
                        {
                            if (strpos($js, 'Shortcodes://') === false)
                            {
                                // Internal
                                if (strpos($js, 'http') == false)
                                {
                                    $depends['_js'][$js] = rtrim(JUri::root(true), '/') . $js;
                                } else
                                {
                                    $depends['_js'][$js] = $js;
                                }
                            } else
                            {
                                // If we'r using key than we need convert to URL
                                $depends['_js'][$js] = ZtShortcodesPath::getInstance()->getUrl($js);
                            }
                        }
                    }
                }
            }
            // Generate css depends
            if (!empty($depends['_css']))
            {
                foreach ($depends['_css'] as $key => $url)
                {
                    $buffer[] = '<link rel="stylesheet" type="text/css" href="' . $url . '">';
                }
            }
            // Generate js depends
            if (!empty($depends['_js']))
            {
                foreach ($depends['_js'] as $key => $url)
                {
                    $buffer[] = '<script src="' . $url . '"></script>';
                }
            }
            // Replace BBCode
            $pattern = $this->get_shortcode_regex();
            $html = preg_replace_callback("/$pattern/s", array($this, 'do_shortcode_tag'), $content);
            // Include depends to head if needed
            if (!empty($buffer))
            {
                $buffer = implode(PHP_EOL, $buffer);
                $html = str_replace('</head>', $buffer . '</head>', $html);
            }
            return $html;
        }

        /**
         * Retrieve the shortcode regular expression for searching.
         *
         * The regular expression combines the shortcode tags in the regular expression
         * in a regex class.
         *
         * The regular expression contains 6 different sub matches to help with parsing.
         *
         * 1 - An extra [ to allow for escaping shortcodes with double [[]]
         * 2 - The shortcode name
         * 3 - The shortcode argument list
         * 4 - The self closing /
         * 5 - The content of a shortcode when it wraps some content.
         * 6 - An extra ] to allow for escaping shortcodes with double [[]]
         *
         * @since 2.5.0
         *
         * @uses $shortcode_tags
         *
         * @return string The shortcode search regular expression
         */
        public function get_shortcode_regex()
        {
            $tagnames = array_keys($this->shortcode_tags);
            $tagregexp = join('|', array_map('preg_quote', $tagnames));

// WARNING! Do not change this regex without changing do_shortcode_tag() and strip_shortcode_tag()
// Also, see shortcode_unautop() and shortcode.js.
            return
                    '\\['                              // Opening bracket
                    . '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
                    . "($tagregexp)"                     // 2: Shortcode name
                    . '(?![\\w-])'                       // Not followed by word character or hyphen
                    . '('                                // 3: Unroll the loop: Inside the opening shortcode tag
                    . '[^\\]\\/]*'                   // Not a closing bracket or forward slash
                    . '(?:'
                    . '\\/(?!\\])'               // A forward slash not followed by a closing bracket
                    . '[^\\]\\/]*'               // Not a closing bracket or forward slash
                    . ')*?'
                    . ')'
                    . '(?:'
                    . '(\\/)'                        // 4: Self closing tag ...
                    . '\\]'                          // ... and closing bracket
                    . '|'
                    . '\\]'                          // Closing bracket
                    . '(?:'
                    . '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
                    . '[^\\[]*+'             // Not an opening bracket
                    . '(?:'
                    . '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
                    . '[^\\[]*+'         // Not an opening bracket
                    . ')*+'
                    . ')'
                    . '\\[\\/\\2\\]'             // Closing shortcode tag
                    . ')?'
                    . ')'
                    . '(\\]?)';                          // 6: Optional second closing brocket for escaping shortcodes: [[tag]]
        }

        /**
         * Regular Expression callable for do_shortcode() for calling shortcode hook.
         * @see get_shortcode_regex for details of the match array contents.
         *
         * @since 2.5.0
         * @access private
         * @uses $shortcode_tags
         *
         * @param array $m Regular expression match array
         * @return mixed False on failure.
         */
        public function do_shortcode_tag($m)
        {

            // Provide caching for same shortcodes
            $cacheId = ZtShortcodesHelperCommon::getCacheId($m);
            $cache = JFactory::getCache('ztshortcodes', '');
            $html = $cache->get($cacheId);
            if ($html === false)
            {
                // allow [[foo]] syntax for escaping a tag
                if ($m[1] == '[' && $m[6] == ']')
                {
                    return substr($m[0], 1, -1);
                }

                $tag = $m[2];
                // Get attributes of this shortcode instance
                $attr = $this->shortcode_parse_atts($m[3]);

                // Callback for parent prepare
                $callback = $this->shortcode_tags[$tag];
                // Do init for asked tag
                if (method_exists($callback[0], 'init'))
                {
                    $attr = call_user_func(array($callback[0], 'init'), $attr, $tag);
                }
                // Shortcode data exists
                if (isset($this->_shortcodes[$tag]))
                {
                    // Process for subTags if needed
                    if (isset($this->_shortcodes[$tag]['subTag']))
                    {
                        foreach ($this->_shortcodes[$tag]['subTag'] as $subTag => $subData)
                        {
                            $subParser = ZtShortcodesParser::getInstance();
                            $subData['attributes']['_parent'] = $attr;
                            $subParser->add_shortcode($subTag, $subData);
                            if (isset($m[5]))
                            {
                                $m[5] = $subParser->do_shortcode($m[5]);
                            }
                        }
                    }
                    // Have attributes than we merge with default
                    if (is_array($attr))
                    {
                        if (isset($this->_shortcodes[$tag]['attributes']))
                        {
                            $attr = array_merge($this->_shortcodes[$tag]['attributes'], $attr);
                        }
                    } else
                    {
                        if (isset($this->_shortcodes[$tag]['attributes']))
                        {
                            $attr = $this->_shortcodes[$tag]['attributes'];
                        }
                    }
                }
                if (isset($m[5]))
                {
                    // Recursive shortcodes in content
                    if ($this->hasShortcodes($m[5]))
                    {
                        $m[5] = $this->do_shortcode($m[5]);
                    }
                    // enclosing tag - extra parameter
                    $html = $m[1] . call_user_func($this->shortcode_tags[$tag], $attr, $m[5], $tag) . $m[6];
                } else
                {
                    // self-closing tag
                    $html = $m[1] . call_user_func($this->shortcode_tags[$tag], $attr, null, $tag) . $m[6];
                }
                // Store cache
                $cache->store($html, $cacheId);
            }
            return $html;
        }

        /**
         * Retrieve all attributes from the shortcodes tag.
         *
         * The attributes list has the attribute name as the key and the value of the
         * attribute as the value in the key/value pair. This allows for easier
         * retrieval of the attributes, since all attributes have to be known.
         *
         * @since 2.5.0
         *
         * @param string $text
         * @return array List of attributes and their value.
         */
        public function shortcode_parse_atts($text)
        {
            $atts = array();
            $pattern = '/(\w+)\s*=\s*"([^"]*)"(?:\s|$)|(\w+)\s*=\s*\'([^\']*)\'(?:\s|$)|(\w+)\s*=\s*([^\s\'"]+)(?:\s|$)|"([^"]*)"(?:\s|$)|(\S+)(?:\s|$)/';
            $text = preg_replace("/[\x{00a0}\x{200b}]+/u", " ", $text);
            if (preg_match_all($pattern, $text, $match, PREG_SET_ORDER))
            {
                foreach ($match as $m)
                {
                    if (!empty($m[1]))
                        $atts[$m[1]] = stripcslashes($m[2]);
                    elseif (!empty($m[3]))
                        $atts[$m[3]] = stripcslashes($m[4]);
                    elseif (!empty($m[5]))
                        $atts[$m[5]] = stripcslashes($m[6]);
                    elseif (isset($m[7]) and strlen($m[7]))
                        $atts[] = stripcslashes($m[7]);
                    elseif (isset($m[8]))
                        $atts[] = stripcslashes($m[8]);
                }
            } else
            {
                $atts = ltrim($text);
            }
            return $atts;
        }

        /**
         * Combine user attributes with known attributes and fill in defaults when needed.
         *
         * The pairs should be considered to be all of the attributes which are
         * supported by the caller and given as a list. The returned attributes will
         * only contain the attributes in the $pairs list.
         *
         * If the $atts list has unsupported attributes, then they will be ignored and
         * removed from the final returned list.
         *
         * @since 2.5.0
         *
         * @param array $pairs Entire list of supported attributes and their defaults.
         * @param array $atts User defined attributes in shortcode tag.
         * @param string $shortcode Optional. The name of the shortcode, provided for context to enable filtering
         * @return array Combined and filtered attribute list.
         */
        public function shortcode_atts($pairs, $atts, $shortcode = '')
        {
            $atts = (array) $atts;
            $out = array();
            foreach ($pairs as $name => $default)
            {
                if (array_key_exists($name, $atts))
                    $out[$name] = $atts[$name];
                else
                    $out[$name] = $default;
            }
            /**
             * Filter a shortcode's default attributes.
             *
             * If the third parameter of the shortcode_atts() function is present then this filter is available.
             * The third parameter, $shortcode, is the name of the shortcode.
             *
             * @since 3.6.0
             *
             * @param array $out The output array of shortcode attributes.
             * @param array $pairs The supported attributes and their defaults.
             * @param array $atts The user defined shortcode attributes.
             */
            if ($shortcode)
                $out = apply_filters("shortcode_atts_{$shortcode}", $out, $pairs, $atts);

            return $out;
        }

        /**
         * Remove all shortcode tags from the given content.
         *
         * @since 2.5.0
         *
         * @uses $shortcode_tags
         *
         * @param string $content Content to remove shortcode tags.
         * @return string Content without shortcode tags.
         */
        public function strip_shortcodes($content)
        {

            if (false === strpos($content, '['))
            {
                return $content;
            }

            if (empty($this->shortcode_tags) || !is_array($this->shortcode_tags))
                return $content;

            $pattern = $this->get_shortcode_regex();

            return preg_replace_callback("/$pattern/s", 'strip_shortcode_tag', $content);
        }

        /**
         * 
         * @param type $m
         * @return type
         */
        public function strip_shortcode_tag($m)
        {
            // allow [[foo]] syntax for escaping a tag
            if ($m[1] == '[' && $m[6] == ']')
            {
                return substr($m[0], 1, -1);
            }

            return $m[1] . $m[6];
        }

    }

}
    