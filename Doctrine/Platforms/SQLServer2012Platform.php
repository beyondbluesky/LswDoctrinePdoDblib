<?php

namespace Lsw\DoctrinePdoDblib\Doctrine\Platforms;
use Doctrine\DBAL\Platforms\SQLServer2012Platform as SQLServer;

class SQLServer2012Platform extends SQLServer
{
    /**
     * @var string
     */
    protected $dateTimeFormatString = 'Y-m-d H:i:s';
  
    /**
     * @return string
     */
    public function getDateTimeFormatString()
    {
        return $this->dateTimeFormatString;
    }
    
    /**
     * @param string $dateTimeFormatString
     * @return \Lsw\DoctrinePdoDblib\Doctrine\Platforms\SQLServer2012Platform
     */
    public function setDateTimeFormatString($dateTimeFormatString){
        $this->dateTimeFormatString = $dateTimeFormatString;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getDateTimeTzFormatString()
    {
        return $this->getDateTimeFormatString();
    }
}
