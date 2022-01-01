<?php

namespace App\View\Components;

use App\Enums\AlertType;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $contextClass = '';

    public string $message = '';

    public function set(string $message, AlertType $alertType = AlertType::SUCCESS)
    {
        $this->message = $message;
        $this->setContextClassFromAlertType($alertType);
    }

    public function setContextClassFromAlertType(AlertType $alertType)
    {
        $this->contextClass = ($alertType == AlertType::SUCCESS->value ? 'success' : 'error');
    }

    public function getClassListFromType()
    {
        return [
            'border-' . $this->contextClass,
            'text-' . $this->contextClass
        ];
    }

    public function render()
    {
        return view('components.alert', [
            'class' => implode(' ', $this->getClassListFromType())
        ]);
    }
}
