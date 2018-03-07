<?php

class ManagerTicket implements Manager {
    
    private $db;
    
    function __construct($dataBase) {
        $this->database = $dataBase;
    }
    
    public function addTicket(Ticket $ticket) {
        $sql = 'insert into ticket(date, idMember, idClient) values (:date, :idmember, :idclient)';
        $params = array(
            'date' => $ticket->getDate(),
            'idmember' => $ticket->getIdmember(),
            'idclient' => $ticket->getIdclient()
        );
        $res = $this->database->execute($sql, $params);
        if($res) {
            $id = $this->database->getId();
            $ticket->setId($id);
        } else {
            $id = 0;
        }
        return $id;
    }
    
    
}