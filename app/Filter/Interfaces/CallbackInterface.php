<?php 
/**
* Created by Gbenga Ogunbule.
* User: Gbenga Ogunbule
* Date: 18/05/2020
* Time: 07:39
*/

namespace App\Filter\Interfaces;

interface CallbackInterface
{
	public function __invoke ($item, $params) : Result;
}