{"filter":false,"title":"ControladorTicket.php","tooltip":"/tpv2/classes/controlador/ControladorTicket.php","undoManager":{"mark":25,"position":25,"stack":[[{"start":{"row":0,"column":0},"end":{"row":2,"column":47},"action":"insert","lines":["<?php","","class ControladorClientes extends Controlador {"],"id":1}],[{"start":{"row":2,"column":47},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":3,"column":4},"end":{"row":17,"column":2},"action":"insert","lines":["function guardarTicket() {","         $ticket = Request::read('ticketmandar');","         $tai = $ticket['idclient'];","         //$ticket['idMember'] = $this->getUser()->getId();","         $user = $this->getUser()->getIdMember();","         $ticket['idmember'] = $user;","         $ticket['date'] = date('Y-m-d H:i:s');","         $objeto = new Ticket();","         //$ver = Util::varDump($ticket);","         $objeto->setFromAssociative($ticket);","         $this->getModel()->setDato('devuelto', Util::varDump($objeto));","         //$res = $this->getModel()->addTicket($objeto);","     }","}","?>"],"id":3}],[{"start":{"row":2,"column":17},"end":{"row":2,"column":25},"action":"remove","lines":["Clientes"],"id":4},{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["T"]}],[{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["i"],"id":5}],[{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"insert","lines":["c"],"id":6}],[{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"insert","lines":["k"],"id":7}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["e"],"id":8}],[{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["t"],"id":9}],[{"start":{"row":2,"column":45},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["/"],"id":11}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["/"],"id":12}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["/"],"id":13}],[{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["/"],"id":14}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["/"],"id":15}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["/"],"id":16}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["/"],"id":17}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["/"],"id":18}],[{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["/"],"id":20}],[{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"insert","lines":["/"],"id":21}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["/"],"id":22}],[{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["/"],"id":23}],[{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["/"],"id":24}],[{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["/"],"id":25}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["/"],"id":26}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["/"],"id":27}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":1},"end":{"row":17,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1520366667287,"hash":"7ca01bcf8ca879bf39e76bf90c28e870f73da0e4"}