<?php 

namespace Littie\Laravauth\Contracts;

interface TwoFactorSmsGateway{

	/**
    * Handles sending sms to user's phone.
    *
    * @return mixed
    */
	public function send($to, $message);
}
