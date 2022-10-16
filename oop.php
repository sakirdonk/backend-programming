<?php
class Animal{
    public $hewan;

    public function __construct($data){
        $this->hewan = array($data);
    }
    
    public function index(){
        echo 'List Hewan<br>';
        foreach ($this->hewan as $hewan){
            echo $hewan.'<br>';
        }
        echo '<br>';
    }

    public function store($data){
        echo 'Menyimpan data '.$data.' kedalam array';
        echo '<br>';
        array_push($this->hewan,$data);
        echo '<br>';
    }

    public function update($index,$data){
        echo 'Mengupdate data '.$this->hewan[$index].' menjadi '.$data;
        echo '<br>';
        $this->hewan[$index] = $data;
        echo '<br>';
    }

    public function destroy($data){
        echo 'Menghapus data '.$this->hewan[$data];
        echo '<br>';
        unset($this->hewan[$data]);
        echo '<br>';
    }
}

$hewan = new Animal('Kucing');

$hewan->index();

$hewan->store('Kadal');

$hewan->index();

$hewan->store('Cacing');

$hewan->index();

$hewan->update(0,'Ular');

$hewan->index();

$hewan->destroy(1);

$hewan->index();

?>