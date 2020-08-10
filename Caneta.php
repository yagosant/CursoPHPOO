
<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    //funcao para verificar e esta tampada
   public function rabiscar(){
        if($this->tampada == true){
        echo "<p>Não posso rabiscar</p>";
        }else{
        echo "<p>Estou rabiscando</p>";
        }
    }

    //funcao para tampar
   private function tampar(){
        $this -> tampada = true;

    }
    //funcao para destampar
  private function destampar(){
        $this -> tampada = false;
    }
}
?>