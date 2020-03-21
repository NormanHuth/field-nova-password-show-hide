<?php

namespace NormanHuth\PlainFieldNovaPasswordShowHide;

use Illuminate\Support\Facades\Hash;
use Laravel\Nova\Fields\Field;
use NormanHuth\NovaValuestore\Fields\PlainPasswordField;

class PlainFieldNovaPasswordShowHide extends PlainPasswordField
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'PlainFieldNovaPasswordShowHide';
}
