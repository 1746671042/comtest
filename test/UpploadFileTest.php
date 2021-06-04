<?php

/*
 * This file is part of the guanguans/uploadfile.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

require __DIR__.'/../vendor/autoload.php';

use Guanguans\UploadFile;

$upload = new UploadFile();
$upload->maxSize = 1 * 1024 * 1024; // Ĭ��Ϊ-1���������ϴ���С
$upload->savePath = './upload/'; // �ϴ���Ŀ¼
$upload->saveRule = 'uniqid'; // �ϴ��ļ����ļ����������
$upload->uploadReplace = true; // �������ͬ���ļ��Ƿ���и���
$upload->autoSub = true; // �ϴ���Ŀ¼����
$upload->subType = 'date'; // �ϴ���Ŀ¼��������
$upload->allowExts = ['jpg', 'png']; // ��������

if ($upload->upload()) {
    var_dump($upload->getUploadFileInfo());
} else {
    var_dump($upload->getErrorMsg());
}