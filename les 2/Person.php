<?php


{
    class Person
    {
        public $name;
        private $age;
        protected $gender;
        public $isStudent;
        public $gemmideldCijfer;

        function __construct(string $name, int $age, string $gender)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;

        }

        /**
         * @param string $name
         */
        public function setName(string $name): void
        {
            $this->name = $name;
        }
        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @param int $age
         */
        public function setAge(int $age): void
        {
            $this->age = $age;
        }

        /**
         * @return int
         */
        public function getAge(): int
        {
            return $this->age;
        }

        /**
         * @param string $gender
         */
        public function setGender(string $gender): void
        {
            $this->gender = $gender;
        }
        /**
         * @return string
         */
        public function getGender(): string
        {
            return $this->gender;
        }

        /**
         * @param mixed $isStudent
         */
        public function setIsStudent($isStudent): void
        {
            $this->isStudent = $isStudent;
        }
        /**
         * @return mixed
         */
        public function getIsStudent()
        {
            return $this->isStudent;
        }


        /**
         * @param mixed $gemmideldCijfer
         */
        public function setGemmideldCijfer($gemmideldCijfer): void
        {
            $this->gemmideldCijfer = $gemmideldCijfer;
        }

        /**
         * @return mixed
         */
        public function getGemmideldCijfer()
        {
            return $this->gemmideldCijfer;
        }

        function getGegevens()
        {
            $gegevens =
                "\nDe gegevens van  " . $this->name . "zijn: " . "<br>" .
                "\nLeeftijd" . $this->age . "<br>" .
                "\nGeslacht" . $this->gender;
            return $gegevens;

        }


    }
}

?>