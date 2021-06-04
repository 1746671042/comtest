<?php


class Sms
{
// 错误信息
    private $error = '';
    // 上传成功的文件信息
    private $uploadFileInfo;

    /**
     * 架构函数
     * @access public
     * @param array $config 上传参数
     */
    public function __construct($config = [])
    {
        if (is_array($config)) {
            $this->config = array_merge($this->config, $config);
        }
    }
}