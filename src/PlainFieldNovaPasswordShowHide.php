<?php

namespace NormanHuth\PlainFieldNovaPasswordShowHide;

use Illuminate\Support\Facades\Hash;
use Laravel\Nova\Fields\Field;
use NormanHuth\NovaValuestore\Fields\PlainPassword;

class PlainFieldNovaPasswordShowHide extends PlainPassword
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'PlainFieldNovaPasswordShowHide';
}
