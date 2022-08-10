<?php
class AboutModel extends model{
public $title="Products";

public function readAbout(){

    $this->dbh->query("SELECT * FROM about");
    return $this->dbh->resultSet();
    
    }

}
?>