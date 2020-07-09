<?php 
/**
* Created by Gbenga Ogunbule.
* User: Gbenga Ogunbule
* Date: 18/05/2020
* Time: 07:39
*/

namespace App\Filter;

class Result{
	public $item; // (mixed) filtered data | (bool) result of validation
	public $messages = array(); // [(string) message, (string) message ]

	public function __construct($item, $messages){
		$this->item = $item;
		if(is_array($messages)){
			$this->messages = $messages;
		} else{
			$this->messages = [$messages];
		}
	}

	public function mergeResults(Result $result){
		$this->item = $result->item;
		$this->mergeMessages($result);
	}

	public function mergeMessages(Result $result){
		if(isset($result->messages) && is_array($result->messages)){
			$this->messages = array_merge($this->messages,
				$result->messages);
		}
	}

	public function mergeValidationResults(Result $result){
		if($this->item === TRUE){
			$this->item = (bool) $result->item;
		}
		$this->mergeMessages($result);
	}
}
