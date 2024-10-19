<?php

require_once './app/models/model.php';

class ItemModel extends Model {

  public function getItembyfk($id) {
    $query = $this->db->prepare('SELECT * FROM bicicletas WHERE id_tipos_fk = ?');
    $query->execute([$id]);
    $item = $query->fetchall(PDO::FETCH_OBJ);
    
    return $item;
  }
  function insertItem($item, $year, $color, $category) {
    $query = $this->db->prepare("INSERT INTO `bicicletas` (`id`, `marca`, `anio`, `color`, `id_tipos_fk`) VALUES (?, ?, ?, ?, ?);");
    $query->execute([NULL, $item, $year, $color, $category]);

    return $this->db->lastInsertId();
  }
  function UpdateItem($id, $item, $year, $color, $category) {
    $query = $this->db->prepare("UPDATE `bicicletas` SET `marca` = ?, `anio` = ?, `color` = ?, `id_tipos_fk` = ? WHERE `bicicletas`.`id` = ?;");
    $query->execute([$item, $year, $color,$category, $id]);
  }
  function deleteItemById($id) {
    $query = $this->db->prepare('DELETE FROM bicicletas WHERE id = ?');
    $query->execute([$id]);
  }
  public function getAllItems() {
    $query = $this->db->prepare("SELECT * FROM bicicletas");
    $query->execute();
    $items = $query->fetchAll(PDO::FETCH_OBJ);

    return $items;
  }
  public function getItem($id) {

    $query = $this->db->prepare('SELECT * FROM bicicletas WHERE id = ?' );
    $query->execute([$id]);
    $item = $query->fetch(PDO::FETCH_OBJ);

    return $item;
  }
}