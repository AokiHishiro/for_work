
<?php

    final class Item {
        private int $id ;
        private bool $changed;
        private string $name;
        private int $status;

        function __construct($id) {
          $this->id = $id;

        }

        private function init(){

       
        }

        public function save(){

        }

    }

    $Item = new Item();

function func(event) {
    if(event.keyCode == '38'){
        console.log('Нажата клавиша вверх');
    }

    if(event.keyCode == '40'){
        console.log('нажата клавиша вниз');
    }
}

window.addEventListener('keydown', func, false);
?>