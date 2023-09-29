<?php

/**
 * Class SMARegister
 * Constants with sma register and value translations
 *
 * @version     0.1
 * @category    Symcon
 * @package     de.codeking.symcon
 * @author      Fredje Gallon <fredje@gggss.com>
 * @link        https://www.gggss.com
 * @link        https://github.com/GGGss/en.phoenix-EEM370
 *
 */
class SMARegister
{
    /**
     * device addresses
     * addresses with fixed values
     */
    const device_addresses = [
        'EEM-MA370' => [
            /**
             * Global
             */
            30051 => [
                'name' => 'Device class',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    460 => 'Solar Inverter',
                    8000 => 'All Devices',
                    8001 => 'Solar Inverter',
                    8002 => 'Wind Turbine Inverter',
                    8007 => 'Battery Inverter',
                    8033 => 'Consumer',
                    8064 => 'Sensor System in General',
                    8065 => 'Electricity meter',
                    8128 => 'Communication device'
                ]
            ],
            342 => [
                'name' => 'Serial',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW'
            ],
            16448 => [
                'name' => 'Device faults',
                'count' => 1,
                'type' => 'U16',
                'format' => 'FIX0',
            ],
        ],
        'test' => [
            16448 => [
                'name' => 'Device faults',
                'count' => 1,
                'type' => 'U16',
                'format' => 'FIX0',
            ],
        ]
    ];

    /**
     * value addresses
     * addresses with updated values
     */
    const value_addresses = [
        'EEM-MA370' => [
            /**
             * Global
             */
            32768 => [
                'name' => 'Phase conductor voltage U12',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Volt'
            ],
            32770 => [
                'name' => 'Phase conductor voltage U23',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Volt'
            ],
            32772 => [
                'name' => 'Phase conductor voltage U31',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Volt'
            ],
            32774 => [
                'name' => 'Phase voltage U1',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Volt'
            ],
            32776 => [
                'name' => 'Phase voltage U2',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Volt'
            ],
            32778 => [
                'name' => 'Phase voltage U3',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Volt'
            ],
            32780 => [
                'name' => 'Frequency',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Hz'
            ],
            32782 => [
                'name' => 'Current I1',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Amp'
            ],
            32784 => [
                'name' => 'Current I2',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Amp'
            ],
            32786 => [
                'name' => 'Current I3',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Amp'
            ],
            32788 => [
                'name' => 'Current IN',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Amp'
            ]
        ],            
        'Test' => [

        ]
    ];

    /**
     * adresses for high frequent values
     */
    const current_addresses = [
        'EEM-MA370' => [
            32790 => [
                'name' => 'Total Active Power',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => 'Watt',
                'archive' => 1 // archive: counter
            ],
            32792 => [
                'name' => 'Total Reactive Power Vectorial',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => 'Var',
            ],
            32794 => [
                'name' => 'Total Apparent Power Vectorial',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0', // convert Wh to kWh
                'profile' => 'VA',
            ]
      ],
        'Test' => [
            32790 => [
                'name' => 'Total Active Power',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => 'Watt',
                'archive' => 1 // archive: counter
            ]
        ]
    ];
}
