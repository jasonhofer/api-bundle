<?php declare(strict_types=1);

namespace Somnambulist\Bundles\ApiBundle\Tests\Support\Stubs\Forms;

use Somnambulist\Bundles\FormRequestBundle\Http\FormRequest;

/**
 * Class UpdateUserFromRequest
 *
 * @package    Somnambulist\Bundles\ApiBundle\Tests\Support\Stubs\Forms
 * @subpackage Somnambulist\Bundles\ApiBundle\Tests\Support\Stubs\Forms\UpdateUserFromRequest
 */
class UpdateUserFromRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'    => 'required|email|min:3|max:60',
            'password' => 'required|min:1|max:255',
            'name'     => 'required|min:1|max:255',
        ];
    }
}
