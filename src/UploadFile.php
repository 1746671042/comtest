<?php


class Sms
{
// ������Ϣ
    private $error = '';
    // �ϴ��ɹ����ļ���Ϣ
    private $uploadFileInfo;

    /**
     * �ܹ�����
     * @access public
     * @param array $config �ϴ�����
     */
    public function __construct($config = [])
    {
        if (is_array($config)) {
            $this->config = array_merge($this->config, $config);
        }
    }
}