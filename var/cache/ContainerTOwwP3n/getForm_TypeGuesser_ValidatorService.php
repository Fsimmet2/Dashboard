<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_guesser.validator' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/form/FormTypeGuesserInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->load(__DIR__.'/getValidatorService.php')));
