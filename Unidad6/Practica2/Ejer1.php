<?php
class Persona {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad($nuevoEdad): void {
        $this->edad = $nuevoEdad;
    }
}

class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos = [];
    private static float $sueldoTope = 3333.0;

    public function __construct(string $nombre, string $apellidos, int $edad,
        float $sueldo = 1000, array $telefonos = [])
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
        $this->telefonos = $telefonos;
    }


    public function imprimirEmpleado(): string {
        return "Nombre: {$this->nombre}<br>
                Apellidos: {$this->apellidos}<br>
                Edad: {$this->edad}<br> 
                Sueldo: {$this->sueldo}<br> 
                Telefonos: {$this->listarTelefonos()}<br>"
        ;
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevoSueldo): void {
        self::$sueldoTope = $nuevoSueldo;
    }

    public function anyadirTelefono(int $telefono): void {
        $strTelefono = (string)$telefono;
        if (strlen($strTelefono) != 9) {
            echo "Error, el numero tiene que tener 9 digitos<br>";
            return;
        }
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        if (empty($this->telefonos)) {
            return "ningun numero<br>";
        }
        return implode(", ", $this->telefonos); 
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
        echo "Telefonos han sido borrados<br>";
    }

    public function nomCompleto() {
        echo "Nombre completo: {$this->nombre} {$this->apellidos}<br>";
    }

    public function pagarImpuesto() : bool {
        if ($this->edad >= 21) {
            return $this->sueldo > self::$sueldoTope ? true : false;
        }
        echo "menores de 21 anyos no pagan impuestos<br>";
        return false;
    }
    
    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }
}

echo "---------Ejercicio a)-----------<br>";
echo Empleado::getSueldoTope() . "<br>";
Empleado::setSueldoTope(4443.40);
echo Empleado::getSueldoTope() . "<br>";
echo "---------Ejercicio b)-----------<br>";
$empleado1 = new Empleado("Elon", "Musk", 20, 9999.99, array(123456789, 987654321, 123987645));
echo $empleado1->imprimirEmpleado();
echo "---------Ejercicio c)-----------<br>";
echo "Como veis, el objeto tiene el constructor del parent y el suyo<br>";
echo "---------Ejercicio d)-----------<br>";
$impuesto = $empleado1->pagarImpuesto() ? "true" : "false";
echo $empleado1->getEdad() . "<br>";
echo "Pagar impuestos: $impuesto <br>";

$empleado1->setEdad(22);
echo $empleado1->getEdad() . "<br>";
$impuesto = $empleado1->pagarImpuesto() ? "true" : "false";
echo "Pagar impuestos: $impuesto <br>";

$empleado1->setSueldo(2222);
echo $empleado1->getSueldo() . "<br>";
$impuesto = $empleado1->pagarImpuesto() ? "true" : "false";
echo "Pagar impuestos: $impuesto <br>";