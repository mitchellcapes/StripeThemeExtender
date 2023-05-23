<?php

namespace Ulaw\StripeElement\Model\Ui;

use StripeIntegration\Payments\Model\Ui\ConfigProvider as OriginalConfigProvider;

class CustomConfigProvider extends OriginalConfigProvider
{
    /**
     * Retrieve the element options.
     *
     * @return array
     */
    protected function getElementOptions()
    {
        $options = parent::getElementOptions();

        // Modify the options as per your requirements
        $options['appearance']['theme'] = 'your_custom_theme';
        $options['appearance']['variables']['colorText'] = '#1A1A1A';
        $options['appearance']['variables']['borderRadius'] = '4px';
        $options['appearance']['variables']['colorDanger'] = '#A94442';
        $options['appearance']['variables']['colorSuccess'] = '#00A178';
        $options['appearance']['variables']['fontSizeBase'] = '14px';
        $options['appearance']['variables']['focusBoxShadow'] = '#8B96A2';
        $options['appearance']['variables']['colorTextPlaceholder'] = '#1A1A1A';

        // Add the appearance rules
        $options['appearance']['rules'] = [
            '.Input' => [
                'padding' => '1rem',
                'borderColor' => '#8B96A2',
                'color' => '#444444'
            ],
            '.Input:focus' => [
                'borderColor' => '#8B96A2',
                'border' => '2px solid #8B96A2',
                'padding' => '0.929rem'
            ],
            '.Label' => [
                'fontSize' => '15px',
                'fontWeight' => '500',
                'marginBottom' => '0.7rem'
            ],
            '.Error' => [
                'marginTop' => '1rem'
            ]
        ];

        return $options;
    }
}
