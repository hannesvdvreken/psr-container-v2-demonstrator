<?php

use App\ContainerDependent;
use League\Container\Container;
use League\Container\ReflectionContainer;

require 'vendor/autoload.php';

$container = new Container();
$container->delegate(new ReflectionContainer());
$container->add(DateTimeZone::class, new DateTimeZone('GMT'));

$dependent = new ContainerDependent($container);

var_dump($dependent->execute(DateTimeImmutable::class));
