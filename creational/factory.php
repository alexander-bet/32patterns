<?php

// Factory means that one class creates another one.

class Worker
{
   private string $name;

   /**
    * @return string
    */
   public function getName(): string
   {
      return $this->name;
   }

   /**
    * @param string $name
    */
   public function setName(string $name): void
   {
      $this->name = $name;
   }

   /**
    * Worker constructor. This is not 'must have', but technically constructor is possible method if needed.
    * @param string $name
    */
   // public function __construct(string $name)
   // {
   //    $this->name = $name;
   // }
}

class WorkerFactory
{
   public static function make(): Worker
   {
      return new Worker();
   }
}

$worker = WorkerFactory::make();
$worker->setName('Alex');

var_dump($worker->getName());
