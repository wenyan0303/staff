<?php
// 配置信息类
class Config
{
  // 系统ID
  const SYSTEM_ID = '1';
  // 系统代号
  const SYSTEM_CD = 'staff';
  // 系统URL
  const SYSTEM_URL = 'http://www.fnying.com/staff/';

  // 使用测试数据调试区分（false 使用正式数据 true 使用测试数据）
  const AUTO_TEST_FLAG = false;

  // 微信登录页面
  const WX_LOGIN_URL = 'http://wx.fnying.com/login.php';
  // 新员工注册URL
  const STAFF_SIGN_URL = 'http://www.fnying.com/staff/wx/sign.php';
  // 新员工待审核URL
  const STAFF_WAIT_URL = 'http://www.fnying.com/staff/wx/wait.php';

  // 跟踪日志等级
  const DEBUG_LEVEL = 1;
  // 信息日志等级
  const INFO_LEVEL = 2;
  // 警告日志等级
  const WARN_LEVEL = 4;
  // 异常日志等级
  const ERROR_LEVEL = 8;
  // PHP日志等级(0关闭，15全部, 14关闭跟踪日志)
  const PHP_LOG_LEVEL = 14;
  // PHP日志文件目录加前缀
  const PHP_LOG_FILE_PREFIX = '../log/';

  // 一次读取记录条数
  const REC_LIMIT = 10;
  // 一次最多读取记录条数
  const REC_LIMIT_MAX = 100;
  // 每页显示记录条数
  const PAGESIZE = 10;
  // API调用超时
  const API_TIMEOUT = 30;
}
?>