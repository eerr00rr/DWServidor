<?php
    class Person {
        private string $name;
        private int $age;
        private string $descripcion;

        public function __construct($name, $age, $descripcion)
        {
            $this->name = $name;
            $this->age = $age;
            $this->descripcion = $descripcion;
        }
    
        public function printPerson() {
            echo "
                Name: $this->name<br>
                Age: $this->age<br>
                Descripcion: $this->descripcion<br>
            ";
        }
    }

    $person1 = new Person("Nikita", 69, "loves cactuses");

    $person1->printPerson();
    
?>