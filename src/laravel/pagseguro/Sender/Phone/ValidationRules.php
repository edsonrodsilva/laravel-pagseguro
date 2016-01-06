<?php

namespace laravel\pagseguro\Sender\Phone;

use laravel\pagseguro\Complements\ValidationRulesInterface;
use laravel\pagseguro\Complements\ValidationRulesTrait;

/**
 * Validation Rules Object
 *
 * @category   SenderPhone
 * @package    Laravel\PagSeguro\Sender\Phone
 *
 * @author     Isaque de Souza <isaquesb@gmail.com>
 * @since      2015-01-11
 *
 * @copyright  Laravel\PagSeguro
 */
class ValidationRules implements ValidationRulesInterface
{

    /**
     * @var array
     */
    protected $rules = [
        'areacode' => 'Required|numeric|digits:2',
        'number' => 'Required|digits_between:8,9',
    ];

    /**
     * @var array
     */
    protected $messages;

    use ValidationRulesTrait;
}
