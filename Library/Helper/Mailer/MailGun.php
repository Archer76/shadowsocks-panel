<?php
/**
 * Project: shadowsocks-panel
 * Author: Sendya <18x@loacg.com>
 * Time: 2016/4/16 23:28
 */


namespace Helper\Mailer;


use Contactable\IMailer;
use Model\Mail;

/**
 * MailGun 邮件代发服务
 * webSite: https://mailgun.com/
 * API: http://documentation.mailgun.com/
 * Class MailGun
 * @package Helper\Mailer
 */
class MailGun implements IMailer
{


    public function send(Mail $mail)
    {
        // TODO: Implement send() method.
    }

}