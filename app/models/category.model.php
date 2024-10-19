<?php

require_once './app/models/model.php';

class CategoryModel extends Model {

  function insertCategoryOfBike($category, $information) {
    $query = $this->db->prepare("INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES (?, ?, ?);");
    $query->execute([NULL, $category, $information]);

    return $this->db->lastInsertId();
  }
  function UpdateCategory($id, $category, $information) {
    $query = $this->db->prepare("UPDATE `categoria` SET `nombre` = ?, `descripcion` = ? WHERE `categoria`.`id` = ?;");
    $query->execute([$category, $information, $id]);
  }
  function deleteCategoryOfBikeById($id) {
    $query = $this->db->prepare('DELETE FROM categoria WHERE id = ?');
    $query->execute([$id]);
  }
  public function getCategories() {

    $query = $this->db->prepare("SELECT * FROM categoria");
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_OBJ);

    return $categories;
  }
  public function getCategory($id) {

    $query = $this->db->prepare('SELECT * FROM categoria WHERE id = ?' );
    $query->execute([$id]);
    $category = $query->fetch(PDO::FETCH_OBJ);

    return $category;
  }
}
