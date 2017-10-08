<?php 
    class car {
        public $merk = ['toyota','bmw','ferrari'];
        public $i = 0;
        public $tulisan;

        public function get() {
            foreach ($this->merk as $m) {
                echo $m . '<br>';
            }  
        }

        public function set_tulisan($tulisan){
            return $this->tulisan = $tulisan;
        }

        public function get_tulisan() {
            return $this->tulisan;
        }
    }

    class motor extends car {
        public function tulisan(){
            return parent::$tulisan;
        }
    }

    $merk = new car();
    $merk->set_tulisan('haii sayaa adalah luthfi');
    echo $merk->get();
    echo $merk->get_tulisan();

    $motor = new motor();
    echo $motor->tulisan();
    

?>