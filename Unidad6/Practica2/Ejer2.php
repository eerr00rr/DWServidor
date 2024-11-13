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

abstract class Trabajador extends Persona {
    protected array $telefonos;

    protected function __construct(string $nombre, string $apellidos, int $edad, array $telefonos = [])
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->telefonos = $telefonos;
    }

    abstract public function calcularSueldo();
    abstract public function imprimir();
    
    public function pagarImpuesto(): bool {
        return $this->edad >= 21 ? true : false;
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
            return "ningun numero";
        }
        return implode(", ", $this->telefonos); 
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
        echo "Telefonos han sido borrados<br>";
    }
}

class Empleado extends Trabajador {
    private int $horas;
    private float $sueldoPorHora;
    private static float $sueldoTope = 3333.0;

    public function __construct(string $nombre, string $apellidos, int $edad,
        int $horas, float $sueldoPorHora = 10, array $telefonos = [])
    {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->horas = $horas;
        $this->sueldoPorHora = $sueldoPorHora;
    }

    public function calcularSueldo(): string {
        return $this->horas * $this->sueldoPorHora;
    }

    public function imprimir(): string {
        return "Nombre: {$this->nombre}<br>
                Apellidos: {$this->apellidos}<br>
                Edad: {$this->edad}<br> 
                Telefonos: {$this->listarTelefonos()}<br>
                Horas trabajado: {$this->horas}<br>
                Sueldo por hora: {$this->sueldoPorHora}<br>
                Sueldo total: {$this->calcularSueldo()}<br>";
    }

    public function nomCompleto() {
        echo "Nombre completo: {$this->nombre} {$this->apellidos}<br>";
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevoSueldo): void {
        self::$sueldoTope = $nuevoSueldo;
    }
    
    public function getSueldo() {
        return $this->sueldoPorHora;
    }

    public function setSueldo($sueldoPorHora) {
        $this->sueldoPorHora = $sueldoPorHora;
    }
}

class Gerente extends Trabajador {
    private float $salario;

    public function __construct(string $nombre, string $apellidos, int $edad, 
        float $salario, array $telefonos = [])
    {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salario = $salario;
    }

    public function calcularSueldo(): string {
        return $this->salario + $this->salario * ($this->edad / 100);
    }

    public function imprimir(): string {
        return "Nombre: {$this->nombre}<br>
                Apellidos: {$this->apellidos}<br>
                Edad: {$this->edad}<br> 
                Telefonos: {$this->listarTelefonos()}<br>
                Sueldo total: {$this->calcularSueldo()}<br>";
    }
}

$empleado1 = new Empleado("Elon", "Musk", 20, 10, 9.99);
$empleado1->anyadirTelefono(123456789);
$empleado1->anyadirTelefono(123456789, 987654321);
echo $empleado1->imprimir();
$impuesto = $empleado1->pagarImpuesto() ? "true" : "false";
echo "Pagar impuestos: $impuesto <br>";
echo "----------------------------------<br>";
$gerente = new Gerente("Dave", "Burger", 25, 10000);
echo $gerente->imprimir();
$impuesto1 = $gerente->pagarImpuesto() ? "true" : "false";
echo "Pagar impuestos: $impuesto1 <br>";