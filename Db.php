<?php 

class Db{

    public $stmt;
    const DBNAME="project";
    const USERNAME="root";

   final public function connection($Db_var,$Db_user,$password = null)
    {
        try{
            return new PDO("mysql:host=127.0.0.1;dbname={$Db_var};",$Db_user, $password);
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }

   final public function callPdo()
    {   
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt = $pdo->prepare("select * from  user");
        $stmt->execute();
        $this->stmt = $stmt;
        return $this;
    }

}

class InsertData extends Db
{
    public $name;
    public  $number;
    public  $email;
    public  $is_admin;
    public $password;

     public function insert()
    {
         $this->name = $_POST["name"];
         $this->number = $_POST["ph_number"];
         $this->email = $_POST["email"];
         $this->is_admin = $_POST["is_admin"];
         $this->password = $_POST["password"];
         

         
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("INSERT INTO user(name,email,number,is_admin,password) values('$this->name','$this->email','$this->number', '$this->is_admin','$this->password')");
        $stmt->execute();
    }
}
  
 