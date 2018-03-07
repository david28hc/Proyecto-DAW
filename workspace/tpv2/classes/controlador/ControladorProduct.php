<?php

class ControladorProduct extends Controlador {
    function index() {
        if($this->isLogged()) {
            if($this->getUser()->getMember() === 'admin@admin.es') {
                
                $op = Request::read('op');
                $res = Request::read('res');
                //echo $op;
                //echo $res;
                
                if($res == '0foto'){
                    $resultado='<h1 style="padding-left: 2%;color: darkgoldenrod;">Error: Imagen no valida.</h1>';
                    $this->getModel()->setDato('error1' , $resultado);
                }
                if($res == '1foto'){
                    $resultado='<h1 style="padding-left: 2%;color: darkgoldenrod;">Cambiada la foto</h1>';
                    $this->getModel()->setDato('error1' , $resultado);
                }
                
                
                if(Request::read('page') === null){
                    $page = 1;
                }else{
                    $page = Request::read('page');
                }
                $pagination = new Pagination($this->getModel()->getCount(), $page, 5);
                $products = $this->getModel()->getPaginateUser($pagination->getOffset(),  $pagination->getRpp());
                $linea = '<tr>
                <td><img src="product/verfoto?id={{idProduct}}" width=150;></td>
                <td>{{idProduct}}</td>
                <td class="familyCap">{{idFamily}}</td>
                <td>{{family}}</td>
                <td>{{product}}</td>
                <td>{{price}} €</td>
                <td>{{description}}</td>
                <td><a href="product/borrar?id={{idProduct}}" class="confirmBorrado"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                <td><a href="product/edit?id={{idProduct}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                </tr>';
                $cadena = '';
                foreach($products as $product) {
                    $array = $product;
                    $cadena .= Util::renderText($linea, $array);
                }
                $rango = '<div class="paginationPropia"><a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/product/index?page=' . $pagination->getFirst() . '">&laquo;</a> ';
                foreach($pagination->getRange() as $number){
                    $rango .= '<a class="btn btn-secondary" href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/product/index?page=' . $number . '">' . $number . '</a> ';
                }
                $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/product/index?page=' . $pagination->getLast() . '">&raquo;</a></div> ';
                $this->getModel()->setDato('rango' , $rango);
                $this->getModel()->setDato('listaproducto', $cadena);
                $this->getModel()->setDato('archivo','listaproductos.html');
                
                
            } else {
                $this->getModel()->setDato('archivo','tpv_member.html');
                //editar='<a href="./?accion=modificarperfil&ruta=member&id=">Nuevo cliente</a>';
                //$this->getModel()->setDato('editar',$editar);
            }
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->getModel()->setDato('archivo','index_lockscreen.html');
        }
    }
    //editproduct y borrar 
    function insertarproducto() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $linea = '<option value="{{idFamily}}">{{family}}</option>';
            $cadena = '';
            $familias = $this->getModel()->getFamilyInsert();
            foreach($familias as $family) {
                        $array = $family;
                        $cadena .= Util::renderText($linea, $array);
                    }
            $this->getModel()->setDato('listafamilia', $cadena);
            $this->getModel()->setDato('archivo', 'insertar_producto.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    function accionInsertarProducto(){
        $product = new Product();
        $product->read();
            $producto = $this->getModel()->addProduct($product);
            if($producto) {
                header("Location: product/listaproductos?op=accionInsertarProducto&resultado=bien");
            } else {
                header("Location: product/listaproductos?op=accionInsertarProducto&resultado=" . $producto);
            }
    }
    
    function edit() {
        $product = Request::read('id');
        $prod = $this->getModel()->getProduct($product);
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $products = $this->getModel()->getProduct($product);
            $array = $products->getAttributesValues();
            $array['family'] = $this->getModel()->getFamily($products->getIdFamily());
            $this->getModel()->setDatos($array);
            $familia .= Util::renderText($array);
            
            $linea = '<option value="{{idFamily}}">{{family}}</option>';
            $cadena = '';
            $familias = $this->getModel()->getFamilyInsert();
            foreach($familias as $family) {
                        $array = $family;
                        $cadena .= Util::renderText($linea, $array);
                    }
            $this->getModel()->setDato('listafamilia', $cadena);
            
            $this->getModel()->setDato('archivo', 'editarproduct.html');
            $this->getModel()->setDatos($products->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function accionEditProduct() {
        $product = new Product();
        $product->read();
        //echo Util::varDump($product);
        //exit;
            if($this->isLogged()) {
                        $res = $this->getModel()->editProduct($product);
                        header('Location: product/listaproductos?op=editarcliente&res=' . $res);
            }else{
                $this->index();
            }
    }
    
    function borrar() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $res = $this->getModel()->remove(Request::read('id'));
            header('Location: product/listaproductos?op=borrar&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function subirfoto(){
        
        if($this->isLogged() && $this->getUser()->getMember() === "admin@admin.es"){
            if(isset($_FILES['foto'])){
                echo 'entro';
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $filename = $_FILES['foto']['tmp_name'];
                $mime=$finfo->file($filename);
                
                if($mime==='image/gif' || $mime==='image/png' || $mime==='image/jpeg'){
                    $upload = new FileUpload('foto' , Request::read('idProduct'), '../fotosproductos' , 2 * 1024 * 1024, FileUpload::SOBREESCRIBIR);
                    echo $res = $upload->upload().'foto';
                }else{
                    $res='0foto';
                }
            }else{
                $res='0foto';
            }
            
            header('Location: product/listaproductos?id=' . Request::read('idProduct') . '&op=subirfoto&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function verfoto(){
        if($this->isLogged()){
            if($this->isLogged()) {
                header('Content-type: image/*');
                $id = Request::read("id");
                $archivo = '../fotosproductos/' . $id;
                if(!file_exists($archivo)) {
                    $archivo = '../fotosproductos/0';
                }
                readfile($archivo);
                exit();
            } else {
                $this->index();
            }
        }
    }
    
    
    // Devolver Ajax
    
    function productsAjax() {
        header('Content-Type: application/json');
        $this->getModel()->setDato('data', $this->getModel()->getAllAjax());
        
    //     $products = $this->getModel()->getAll();
    //         $todo = '';
    //         foreach($products as $producto) {
    //             $r = Util::renderText($linea, $producto->getAttributesValues());
    //             $todo .= $r;
    //         }
            
    //         $this->getModel()->setDato('products', $todo);
     }
    
}
?>