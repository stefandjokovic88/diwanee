<?php

class UserModel extends Model
{
    /**
     * @return bool
     */
    public function getAll()
    {
        
        $con=mysqli_connect("localhost","root","","registration");
        $sql="SELECT * FROM users ORDER BY creation_time ASC";
        $result = mysqli_query($con, $sql);

        while($user = mysqli_fetch_array($result))
        echo $user['username'].'<br/>';
        
    }


}

?>