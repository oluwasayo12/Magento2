<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Voguepay\VoguepayGateway\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Store\Model\Store as Store;
// use Voguepay\VoguepayGateway\Gateway\Http\Client\ClientMock;

/**
 * Class ConfigProvider
 */
final class ConfigProvider implements ConfigProviderInterface
{
    const CODE = 'voguepay_gateway';

    /**
     * Retrieve assoc array of checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {
        $merchant_id = $this->method->getConfigData('merchant_id');

        return [
            'payment' => [
                self::CODE => [
                    'merchant_id' => $merchant_id
                ]
            ]
        ];
    }
}
