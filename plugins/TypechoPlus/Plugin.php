<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

require_once __DIR__ . '/Common.php';
require_once __DIR__ . '/trait/Search.php';
require_once __DIR__ . '/trait/Content.php';
require_once __DIR__ . '/trait/Captcha.php';

/**
 * Typecho 多功能增强插件
 *
 * @package TypechoPlus
 * @author A.wei
 * @version 1.0.0
 * @link http://gravatar.cn
 */
class TypechoPlus_Plugin implements Typecho_Plugin_Interface
{
    use Common, Search, Content, Captcha;

    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        self::searchActivate();
        self::contentActivate();
        self::captchaActivate();
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        self::searchConfig($form);
        self::contentConfig($form);
        self::captchaConfig($form);
    }

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
    }
}
