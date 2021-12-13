<?php

final class Item {
    private int $id ;
    private bool $changed;
    private string $name;
    private int $status;

    function __construct($id) {
        $this->id = $id;
        require_once '../config/conection.php';//запускается в самом начале(подклбчение прописывается в отдельном файле)
    }

    public function __set($name,$value){//срабатывает, когда мы пытается установить значения вполе класса к которому невозможно получить доступ

        if($name == '$id') {
            echo "nelzya";
        }elseif(is_string($name =='$name' )||is_int($value=='$status')){
            $this->$name=$value;}
        elseif(empty($value)||empty($name)){
            echo "zapolnite";}
    }


    public function __get($name){//считывает значение поля к которому нет доступа
        return $this->$name;
    }


    private function init($connect,$name,$status){// передает $name и  $status для записи| функция получает значение столбцов в свойства

    $name =mysqli_query($connect, "SELECT name FROM 'objects'");
    $status = mysqli_query($connect, "SELECT status FROM 'objects'");
    $name= mysqli_fetch_all($name);
    $status= mysqli_fetch_all($status);

    }

    public function save($connect,$name,$status,$id){// позволяет добавлять новое  в базу данных в случае, если были внесены изменения извне
      //  mysqli_query($connect,"UPDATE 'objects' SET 'name' = '$name','status' = $status WHERE  'objects'.'Id'=$id" ); ->должно быть отдельной функцией (для вноса изменений)
        mysqli_query($connect,"INSERT INTO 'objects'['id','name','status'], VALUES (NULL,'$name','$status')");//для заполнения таблицы извне

    }

}


?>
