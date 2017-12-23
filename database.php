<?php
class database extends PDO
    {
    	
    	#make a connection
    	public function __construct($hostname,$dbname,$username,$password)
    	{
            $dsn = 'mysql:host='.$hostname.';dbname='.$dbname;
    		parent::__construct($dsn,$username,$password);
    		
    		try
    		{ 
    			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		}
    		catch (PDOException $e)
    		{
    			die($e->getMessage());
    		}
    	}
    	
    	#get the number of rows in a result
    	public function num_rows($query)
    	{
    		# create a prepared statement
    		$stmt = parent::prepare($query);
    		
    		if($stmt)
    		{
    			# execute query
    			$stmt->execute();
    			
    			return $stmt->rowCount();
    		}
    		else
    		{
    			return self::get_error();
    		}
    	}

        #get the password User
        public function str_pass($query)
        {
         $stmt = parent::prepare($query);
            
            if($stmt)
            {
                # execute query
                $stmt->execute();
                
                return $stmt->fetch();
            }
            else
            {
                return self::get_error();
            }   
        }    	
    	#display error
    	public function get_error()
    	{
    		$this->connection->errorInfo();
    	}
    	
        #verify user
        
    	# closes the database connection when object is destroyed.
    	public function __destruct()
    	{
            $this->connection = null;
        }
    }