<?php
const SUELDO_TOPE = 3333;
class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private static array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public static function anyadirTelefono(int $telefono): void {
        $strTelefono = (string)$telefono;
        if (strlen($strTelefono) != 9) {
            echo "Error, el numero tiene que tener 9 digitos<br>";
            return;
        }
        self::$telefonos[] = $telefono;
    }

    public static function listarTelefonos(): string {
        if (empty(self::$telefonos)) {
            return "ningun numero<br>";
        }
        return implode(", ", self::$telefonos); 
    }

    public static function vaciarTelefonos(): void {
        self::$telefonos = [];
        echo "Telefonos han sido borrados<br>";
    }

    public function nomCompleto() {
        echo "Nombre completo: {$this->nombre} {$this->apellidos}<br>";
    }

    public function pagarImpuesto() : bool {
        return $this->sueldo > SUELDO_TOPE ? true : false;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellidos() {
        return $this->apellidos;
    }
    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }
}

$emp1 = new Empleado("Jeff", "Bezoz");
$emp2 = new Empleado("Mike", "Zuckerburg", 3334);

$impuesto1 = $emp1->pagarImpuesto() ? "si" : "no";
$impuesto2 = $emp2->pagarImpuesto() ? "si" : "no";

$emp1->nomCompleto();
echo "Pagar impuestos: $impuesto1<br>";
echo "---------------------<br>";
$emp2->nomCompleto();
echo "Pagar impuestos: $impuesto2<br>";

echo "---------------------<br>";
Empleado::anyadirTelefono(123456789);
Empleado::anyadirTelefono(987654321);
Empleado::anyadirTelefono(12345678);

$listaNums = Empleado::listarTelefonos();
echo "$listaNums<br>";

Empleado::vaciarTelefonos();
$listaNums = Empleado::listarTelefonos();
echo "$listaNums<br>";