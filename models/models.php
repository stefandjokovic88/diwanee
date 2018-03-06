<?php

class Model
{
    /**
     * @var PDO
     */
    public $connection;

    /**
     * @var string
     */
    private $user = 'root';

    /**
     * @var string
     */
    private $pass = '';

    /**
     * @var string
     */
    private $dbName = 'registration';

    /**
     * @var string
     */
    private $host = 'localhost';

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->user, $this->pass);
             // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    
    /**
     * @return array|mixed
     */
    public function getLogin()
	{
		if(isset($_POST['username']) && isset($_POST['password'])) {
		    if ($this->checkIfUserExists($_POST['username'], $_POST['password'])) {
                return [
                    'status' => 'login',
                    'username' => $_POST['username'],
                ];
            } else {
				return ['status' => 'Failed to login!'];
			}
		}
	}

    /**
     * @param $userName
     * @param $password
     * @return bool
     */
	private function checkIfUserExists($userName, $password)
    {
        $statement = $this->connection->prepare('SELECT * FROM users where username = :username and password = :password');
        $statement->execute([
            'username' => $userName,
            'password' => $password,
        ]);

        return (bool)$statement->fetchAll();
    }
}

?>