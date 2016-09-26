<?
namespace App\Model;

class Hero implements \JsonSerializable{

	private $id;
	private $name;

	 public function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;

        //
    }

    public function getId(){

        return $this->id;

    }


    public function jsonSerialize(){
        $vars = get_object_vars($this);

        return $vars;
    }


}