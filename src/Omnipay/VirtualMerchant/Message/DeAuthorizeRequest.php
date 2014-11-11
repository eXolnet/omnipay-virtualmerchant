<?php

namespace Omnipay\VirtualMerchant\Message;

/**
 * VirtualMerchant  Authorize Request
 */
class DeAuthorizeRequest extends AbstractRequest
{
	protected $action = 'ccdelete';

	public function getData()
	{
		$data = $this->getBaseData();
		$data['ssl_txn_id'] = $this->getTransactionId();

		return array_merge($data, $this->getBillingData());
	}
}
