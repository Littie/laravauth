<?php 

namespace Littie\Laravauth\Auth\Gateways;

use Aloha\Twilio\Support\Laravel\Facade as TwilioMessenger;
use Littie\Laravauth\Contracts\TwoFactorSmsGateway;

class Twilio implements TwoFactorSmsGateway{

	/**
     * Uses Nexmo API to send texts to user's phone.
     *
     * @param string $to 
     * @param string $message
     * @return mixed
     */
	public function send($to, $message){

		return TwilioMessenger::message( $to, $message );
	}
}
