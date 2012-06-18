<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class DB {
	var $query;
	var $parameter;
	var $table_name;
	var $keys;
	var $condition;
	var $q;
	var $rows;
	
	/* Koneksi Data base ------------------------------------------------------------------------------------ */
	function connect(){
		include('system/php/php_database.php');
		$conn = mysql_connect($_DB['db_server'],$_DB['db_user'],$_DB['db_pass']) or die('ERROR:'.mysql_error());
		mysql_select_db($_DB['db_name'],$conn) or die('ERROR:'.mysql_error());
	}
	
	/* Query function -------------------------------------------------------------------------------------- */
	function query($query){
		$this->q = $query;
		return mysql_query($this->q);
	}
	
	/* Select Table function -------------------------------------------------------------------------------- */
	function to($table_name){
		$this->table_name = $table_name;
	}
	function getTo(){
		return $this->table_name;
	}
	function from($table_name){
		$this->table_name = $table_name; 
	}
	function getFrom(){
		return $this->table_name;
	}
	
	/* Select function -------------------------------------------------------------------------------------- */
	function select($key){
		$this->keys = $key;
	}
	function getSelect(){
		return $this->keys;
	}
	function where($key,$value,$type_condition){
		$arrKeys = explode(',',$key);
		$arrVals = explode(',',$value);
		
		foreach($arrKeys as $vKeys){$k[] = $vKeys ." = ";}
		foreach($arrVals as $vVals){$v[] = $vVals;}
		$count = count($arrKeys);	
		for($i=0;$i<$count;$i++){
			$con[] = $k[$i]."'".$v[$i]."'";
		}
		$condition =implode(" ".$type_condition." ",$con);
		$this->condition = $condition;
	}
	function getWhere(){
		return $this->condition;
	}
	function like($key,$value,$type_condition){
		$arrKeys = explode(',',$key);
		$arrVals = explode(',',$value);
		foreach($arrKeys as $vKeys){$k[] = $vKeys ." ";}
		foreach($arrVals as $vVals){$v[] = $vVals;}
		$count = count($arrKeys);	
		for($i=0;$i<$count;$i++){
			$con[] = $k[$i]."like '%".$v[$i]."%'";
		}
		$condition =implode(" ".$type_condition." ",$con);
		$this->condition = $condition;
	}
	function getLike(){
		return $this->condition;
	}
	function rows($query){
		return $this->rows = mysql_fetch_object($query);
	}
	function num($query){
		return $this->rows = mysql_num_rows($query);
	}
	
	/* Insert function -------------------------------------------------------------------------------------- */
	function insert($key,$value){
		$arrVals = explode(',',$value);
		$count = count($arrVals);
		foreach($arrVals as $vVals){$v[] = $vVals;}
		for($i=0;$i<$count;$i++){
			$val[] = "'".$v[$i]."'";
		}
		$vals = implode(",",$val);
		$this->q = "(".$key.")values(".$vals.")";
	}
	function getInsert(){
		return $this->q;
	}
	
	/* Upadte function -------------------------------------------------------------------------------------- */
	function update($key,$value){
		$arrKeys = explode(',',$key);
		$arrVals = explode(',',$value);
		foreach($arrKeys as $vKeys){$k[] = $vKeys ." ";}
		foreach($arrVals as $vVals){$v[] = $vVals;}
		$count = count($arrKeys);
		for($i=0;$i<$count;$i++){
			$con[] = $k[$i]." ='".$v[$i]."'";
		}
		$parameter =implode(", ",$con);
		$this->parameter = $parameter;
	}
	function getUpdate(){
		return $this->parameter;
	}
	
	/* Delete function -------------------------------------------------------------------------------------- */
	function delete($table_name){
		$this->table_name = $table_name;
	}
	function getDelete(){
		return $this->table_name;
	}
	
	/* Execute function -------------------------------------------------------------------------------------- */
	function execute(){
		if($this->getSelect() && $this->getFrom() && $this->getWhere()){
			$this->q = "select ".$this->getSelect() . " from " . $this->getFrom() ." where ".$this->getWhere();
			$this->query = mysql_query($this->q) or die('ERROR:'.mysql_error());	
		}elseif($this->getSelect() && $this->getFrom() && $this->getLike()){
			$this->q = "select ".$this->getSelect() . " from " . $this->getFrom() ." where ".$this->getLike();
			$this->query = mysql_query($this->q) or die('ERROR:'.mysql_error());
		}elseif($this->getTo() && $this->getInsert()){
			$this->q = "insert into ".$this->getTo()."".$this->getInsert();
			$this->query = mysql_query($this->q) or die('ERROR:'.mysql_error());
		}elseif($this->getTo() && $this->getUpdate() && $this->getWhere()){
			$this->q = "update " . $this->getTo() . " set ".$this->getUpdate(). " where " . $this->getWhere();
			$this->query = mysql_query($this->q) or die('ERROR:'.mysql_error());
		}elseif($this->getDelete() && $this->getWhere()){
			$this->q = "delete from ". $this->getDelete() . " where " . $this->getWhere();
			$this->query = mysql_query($this->q) or die('ERROR:'.mysql_error());
		}else{
			$this->q = "select ".$this->getSelect() . " from " . $this->getFrom();
			$this->query = mysql_query($this->q) or die('ERROR:'.mysql_error());
		}
		return $this->query;
	}
}