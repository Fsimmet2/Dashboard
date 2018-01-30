<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.logout_listener.main' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Logout/LogoutSuccessHandlerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Logout/DefaultLogoutSuccessHandler.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Logout/LogoutHandlerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Logout/SessionLogoutHandler.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Firewall/LogoutListener.php';

$a = ($this->privates['security.http_utils'] ?? $this->load(__DIR__.'/getSecurity_HttpUtilsService.php'));

$this->privates['security.logout_listener.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\LogoutListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/login'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));

$instance->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

return $instance;
