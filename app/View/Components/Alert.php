<?php

namespace App\View\Components;

use App\Enums\AlertType;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $message = '';

    public AlertType $type = AlertType::SUCCESS;

    public function __construct(string $message = '', $alertType = AlertType::SUCCESS)
    {
        $this->message = $message;
        $this->type = $alertType;
    }

    public function setContextClassFromAlertType()
    {
        return $this->type == AlertType::SUCCESS->value ? 'success' : 'danger';
    }

    public function getClassesFromType()
    {
        $contextClass = $this->setContextClassFromAlertType();

        return implode(' ', [
            'border',
            'border-' . $contextClass,
            'text-' . $contextClass
        ]);
    }

    public function render()
    {
        return view('components.alert');
    }
}
