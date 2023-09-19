<?php 

class Crud{
    private $conexion;
    private $host ="localhost";
    private $user = "tomatox";
    private $pass = "";
    private $bd = "agenda";

    public function __construct(){
        $this->conexion=new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->pass);
    }
    public function read(){
        $query = "SELECT * FROM contactos";
        $stmt = $this->conexion->prepare($query);
        $stmt-> execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
    public function create($datos){
        $query = "INSERT INTO contactos(nombre, telefono, email) VALUES (:nombre, :telefono, :email)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":telefono",$datos["telefono"]);
        $stmt->bindParam(":email",$datos["email"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }
    public function update($id){
        $query = "UPDATE contactos SET nombre=:nombre,telefono=:telefono,email=:email WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id",$datos["id"]);
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":telefono",$datos["telefono"]);
        $stmt->bindParam(":email",$datos["email"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function delate($id){
        $query = "DELETE FROM contactos WHERE id=:id";
        $stmt->bindParam(":id",$datos["id"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function show($id){
        $query = "SELECT * FROM contactos WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt ->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result; 
    }
}

?>