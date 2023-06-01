<?php

interface Worker
{
   public function work();
}

class Developer implements Worker
{
   public function work()
   {
      printf("I'm developing");
   }
}

class Designer implements Worker
{
   public function work()
   {
      // TODO: implement work() method.
      printf("I'm designing");
   }
}

interface WorkerFactory
{
   public static function make();
}

class DeveloperFactory implements WorkerFactory
{
   public static function make()
   {
      return new Developer();
      // TODO: implement make() method.
   }
}

class DesignerFactory implements WorkerFactory
{
   public static function make()
   {
      return new Designer();
      // TODO: implement make() method.
   }
}

$developerFactory = new DeveloperFactory();
$designerFactory = new DesignerFactory();
$developer = DeveloperFactory::make();
$designer = DesignerFactory::make();

$developer->work();
