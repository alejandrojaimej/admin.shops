<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.submit.validator' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractTypeExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/Validator/Type/SubmitTypeValidatorExtension.php';

return $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
