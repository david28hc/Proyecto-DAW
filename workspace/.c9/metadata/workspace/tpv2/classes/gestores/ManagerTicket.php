{"filter":false,"title":"ManagerTicket.php","tooltip":"/tpv2/classes/gestores/ManagerTicket.php","undoManager":{"mark":27,"position":27,"stack":[[{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"remove","lines":["m"],"id":2},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"insert","lines":["M"]}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"remove","lines":["c"],"id":3},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["C"]}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":19},"action":"remove","lines":["TicketManager"],"id":4},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["M"]}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["a"],"id":5}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["n"],"id":6}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["a"],"id":7}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["g"],"id":8}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["e"],"id":9}],[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["r"],"id":10}],[{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["T"],"id":11}],[{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":["i"],"id":12}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["c"],"id":13}],[{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["k"],"id":14}],[{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["e"],"id":15}],[{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["t"],"id":16}],[{"start":{"row":2,"column":19},"end":{"row":2,"column":37},"action":"insert","lines":[" implements Manage"],"id":17}],[{"start":{"row":2,"column":37},"end":{"row":2,"column":38},"action":"insert","lines":["r"],"id":18}],[{"start":{"row":6,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["function __construct(DataBase $db) {","        $this->db = $db;","    }"],"id":19},{"start":{"row":6,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["function __construct($dataBase) {","        $this->database = $dataBase;","    }"]}],[{"start":{"row":27,"column":4},"end":{"row":87,"column":5},"action":"remove","lines":["public function editTicket(Ticket $ticket) {","        $sql = 'update ticket set date = :date, idmember = :idmember, idclient = :idclient where id = :id';","        $params = array(","            'date' => $ticket->getDate(),","            'idmember' => $ticket->getIdmember(),","            'idclient' => $ticket->getIdclient(),","            'id' => $ticket->getId()","        );","        $res = $this->db->execute($sql, $params);","        if($res) {","            $affectedRows = $this->db->getRowNumber();","        } else {","            $affectedRows = -1;","        }","        return $affectedRows;","    }","    ","    public function getTicket($id){","        $sql = 'select * from ticket where id = :id';","        $params = array(","            'id' => $id,","        );","        $res = $this->db->execute($sql, $params);","        $statement = $this->db->getStatement();","        $ticket = new Ticket();","        if($res && $row = $statement->fetch()) {","            $ticket->set($row);","        } else {","            $ticket = null;","        }","        return $ticket;","    }","    ","    public function getAllTicket() {","        $sql = 'select * from ticket';","        $res = $this->db->execute($sql);","        $tickets = array();","        if($res){","            $statement = $this->db->getStatement();","            while($row = $statement->fetch()) {","                $ticket = new Ticket();","                $ticket->set($row);","                $tickets[] = $ticket;","            }","        }","        return $tickets;","    }","    ","    public function removeTicket($id) {","        $sql = 'delete from ticket where id = :id';","        $params = array(","            'id' => $id","        );","        $res = $this->db->execute($sql, $params);","        if($res) {","            $affectedRows = $this->db->getRowNumber();","        } else {","            $affectedRows = -1;","        }","        return $affectedRows;","    }"],"id":20}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "],"id":21}],[{"start":{"row":26,"column":4},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":22}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["a"],"id":23}],[{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["t"],"id":24}],[{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["a"],"id":25}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["a"],"id":26}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["s"],"id":27}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["e"],"id":28}],[{"start":{"row":19,"column":25},"end":{"row":19,"column":27},"action":"remove","lines":["db"],"id":29},{"start":{"row":19,"column":25},"end":{"row":19,"column":33},"action":"insert","lines":["database"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":33},"end":{"row":19,"column":33},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":113,"mode":"ace/mode/php"}},"timestamp":1520366482492,"hash":"7b5d2343f24fdd5216cf0090d018ed576d68d49d"}