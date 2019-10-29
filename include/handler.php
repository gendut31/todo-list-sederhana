<?php
include 'connection.php';

class DbHandler extends DbConnect{

  function __construct(){
    parent::__construct();
    mysqli_set_charset($this->conn, "utf8");
  }

  /**
   * Escape string before execute on query
   *
   * @param string      $value  string will be escaped
   *                    
   * @return string             escaped string
   */
  public function escape_string($value){
		return $this->conn->real_escape_string($value);
  }

  public function aaa($value){
		return $value;
  }

  /**
   * Read just one field from database
   *
   * @param string      $query  query will be executed
   *                    
   * @return string             value returned from query
   */
  public function readOneValue($query){
    $result = $this->conn->query($query);

    if (!$result) {
      return "ERROR";
    }
    $row = $result->fetch_array();

    return $row[0];
  }

  /**
   * Read data from database
   *
   * @param string      $query  query will be executed
   *                    
   * @return array              array associative returned from query
   */
  public function readData($query){
    $data = array();

    $result = $this->conn->query($query);

    if (!$result) {
      return "ERROR";
    }

    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }

    return $data;
  }

  /**
   * Execute query insert, update or deletes
   *
   * @param string      $query          query will be executed
   * @param string      $successMessage message if query successfully executed
   * @param string      $dataname       key name for data returned
   * @param string      $queryRead      query for get the data after execute query
   *                    
   * @return array              array   query response
   */
  public function executeQuery($query, $successMessage, $dataname, $queryRead){
    $data = array();
    $response = array();

    $result = $this->conn->query($query);

    if (!$result) {
      $response["error"] = true;
      $response["message"] = mysqli_error($this->conn);
      return $response;
    } else {
      $response["error"] = false;
      $response["message"] = $successMessage;

      // check if need to return data
      if($dataname != null){
        $resultData = $this->conn->query($queryRead);

        if (!$resultData) {
          $response["error"] = true;
          $response["message"] = "Kesalahan pada server";
          return $response;
        }

        while ($row = $resultData->fetch_assoc()) {
          $data[] = $this->renameArrayKeys($row);
        }

        $response["$dataname"] = $data;
      }
    }
    return $response;
  }
}
