<?php
/**
 * author      : shiwuhao
 * createTime  : 2017/5/6
 * description :
 */

namespace App\Mailer;


class UserMailer extends Mailer
{

    public function welcome($user)
    {
        $subject = 'shiwuhao 邮箱确认';
        $view    = 'welcome';
        $data    = ['%name%' => [$user->name]];

        $this->sendTo($user,$subject, $view, $data);
    }
}