<?php
class shopMessengersPlugin extends shopPlugin
{
    public static function displayTelegram() {
    	$path = wa()->getRouteUrl('shop/frontend', array(), true);
        $plugin = wa()->getPlugin('messengers');
        $TelegramName = $plugin->getSettings('TelegramName');
        $ButtonWidth = $plugin->getSettings('ButtonWidth');
        if ($plugin->getSettings('enable')) {
            echo "<a href='tg://resolve?domain=".$TelegramName."'><img style='width:".$ButtonWidth."px;' src='".$path."wa-apps/shop/plugins/messengers/img/tb.png'></a>";
        };
 	}
 	public static function displayWhatsApp() {
 		$path = wa()->getRouteUrl('shop/frontend', array(), true);
        $plugin = wa()->getPlugin('messengers');
        $WhatsAppNumber = $plugin->getSettings('WhatsAppNumber');
        //$WhatsAppText = $plugin->getSettings('WhatsAppText');
        //$WhatsAppText = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $WhatsAppText = url();
        $ButtonWidth = $plugin->getSettings('ButtonWidth');
        if ($plugin->getSettings('enable')) {
            echo "<a href='https://api.whatsapp.com/send?text=".$WhatsAppText."&amp;phone=".$WhatsAppNumber."'><img style='width:".$ButtonWidth.";' src='".$path."wa-apps/shop/plugins/messengers/img/wb.png'></a>";
        };
 	}
 	public static function displayViber() {
 		$path = wa()->getRouteUrl('shop/frontend', array(), true);
        $plugin = wa()->getPlugin('messengers');
        $ViberNumber = $plugin->getSettings('ViberNumber');
        $ButtonWidth = $plugin->getSettings('ButtonWidth');
        if ($plugin->getSettings('enable')) {
                echo "<a href='viber://chat?number=".$ViberNumber."'><img style='width:".$ButtonWidth."px;' src='".$path."wa-apps/shop/plugins/messengers/img/vb.png'></a>";
        };
 	}

    function url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        );
    }
}