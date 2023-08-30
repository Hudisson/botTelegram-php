<?php

namespace App\Comunication;

use TelegramBot\Api\BotApi;

class Alert{

    const TELEGRAM_BOT_TOKEN = 'SEU_TOKEM_AQUI';
    const TELEGRAM_CHAT_ID = 0; // SEU ID DO CHAT *numero inteiro

    // Método que enviar as menssagens
    public static function sendMessage($msg){

        // Intancia do bot com o token gerado
      $objBotApi = new BotApi(self::TELEGRAM_BOT_TOKEN);

      return $objBotApi->sendMessage(self::TELEGRAM_CHAT_ID, $msg);
    }
}

/* 
  OBTER O ID DO CHAT
https://api.telegram.org/botSEUTOKEN/getUpdates

*/
