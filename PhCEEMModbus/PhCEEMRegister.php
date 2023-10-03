<?php

/**
 * Class PhCEEMRegister
 * Constants with EEM-measuring register and value translations
 *
 * @version     0.1
 * @category    Symcon
 * @package     en.phoenix-EEM-MA370
 * @author      Fredje Gallon <fredje@gggss.com>
 * @link        https://www.gggss.com
 * @link        https://github.com/GGGss/en.phoenix-EEM-MA370
 *
 */
class PhCEEMRegister
{
    /**
     * device addresses
     * addresses with fixed values
     */
    const device_addresses = [
        'default' => [
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
            30053 => [
                'name' => 'Device-ID',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    9000 => 'SWR 700'
                ]
            ],
            342 => [
                'name' => 'Serial',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DEC'
            ],
            16448 => [
                'name' => 'Device faults',
                'count' => 1,
                'type' => 'U16',
                'format' => 'DEC',
            ],
        ],
        'test' => [
            16448 => [
                'name' => 'Device faults',
                'count' => 1,
                'type' => 'U16',
                'format' => 'DEC',
            ],
        ]
    ];

    /**
     * value addresses
     * addresses with slow updated values
     */
    const value_addresses = [
        'default' => [
            /**
             * Global
             */
            32768 => [
                'name' => 'Phase conductor voltage U12',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Volt2'
            ],
            32770 => [
                'name' => 'Phase conductor voltage U23',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Volt2'
            ],
            32772 => [
                'name' => 'Phase conductor voltage U31',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Volt2'
            ],
            32774 => [
                'name' => 'Phase voltage U1',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Volt4'
            ],
            32776 => [
                'name' => 'Phase voltage U2',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Volt4'
            ],
            32778 => [
                'name' => 'Phase voltage U3',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Volt4'
            ],
            32780 => [
                'name' => 'Frequency',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Hz'
            ],
            32782 => [
                'name' => 'Current I1',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Amp'
            ],
            32784 => [
                'name' => 'Current I2',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Amp'
            ],
            32786 => [
                'name' => 'Current I3',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Amp'
            ],
            32788 => [
                'name' => 'Current IN',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC',
                'profile' => 'Amp'
            ]
        ],            
        'Test' => [

        ]
    ];

    /**
     * adresses for fast updated values
     */
    const current_addresses = [
        'default' => [
            32790 => [
                'name' => 'Total Active Power',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC', // convert Wh to kWh
                'profile' => 'Watt',
                'archive' => 1 // archive: counter
            ],
            32792 => [
                'name' => 'Total Reactive Power Vectorial',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC', // convert Wh to kWh
                'profile' => 'Var',
            ],
            32794 => [
                'name' => 'Total Apparent Power Vectorial',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC', // convert Wh to kWh
                'profile' => 'VA',
            ]
      ],
        'Test' => [
            32790 => [
                'name' => 'Total Active Power',
                'count' => 2,
                'type' => 'FL',
                'format' => 'DEC', // convert Wh to kWh
                'profile' => 'Watt',
                'archive' => 1 // archive: counter
            ]
        ]
    ];
}
