<?php
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id$
 */
/** 开启https */
define('__TYPECHO_SECURE__',true);
/** 定义根目录 */
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));
/** 定义插件目录(相对路径) */
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');
/** 定义模板目录(相对路径) */
define('__TYPECHO_THEME_DIR__', '/usr/themes');
/** 后台路径(相对路径) */
define('__TYPECHO_ADMIN_DIR__', '/admin/');
/** 设置包含路径 */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);
/** 载入API支持 */
require_once 'Typecho/Common.php';
/** 程序初始化 */
Typecho_Common::init();
/** 定义数据库参数 */
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => 'monorail.proxy.rlwy.net',
  'user' => 'root',
  'password' => '6eg32Efd6HC43EEd3fcebcGdH1Cha-1-',
  'charset' => 'utf8mb4',
  'port' => '52200',
  'database' => 'railway',
  'engine' => 'MyISAM',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);

作者：因吹斯汀
链接：https://juejin.cn/post/7306146705971281958
来源：稀土掘金
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。