<?php
namespace App;
class container
{
    public $configuration;
    public $pdo;
    public function __contruct(array $configuration)
    {
        $this->configuration=$configuration;
        //dd($this->configation);
    }
   /* /**
     * @return \PDO
    /*public function getPDO()
    {
        if($this->pdo===null)
        {
            $this->pdo=new \PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo; 
    } */

}