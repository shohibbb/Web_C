<?php

namespace app\Models;

include 'app/Config/DatabaseConfig.php';

use app\Config\DatabaseConfig;
use mysqli;

class Product extends DatabaseConfig
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database_name, $this->port);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function findAll()
    {
        $sql = "SELECT * FROM product";
        $result = $this->conn->query($sql);
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM product WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function create($data)
    {
        $productName = $data['product_name'];
        $query = 'INSERT INTO product(product_name) VALUES (?)';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $productName);
        $stmt->execute();
        $this->conn->close();
    }

    public function update($data, $id)
    {
        $productName = $data['product_name'];

        $query = 'UPDATE product SET product_name = ? WHERE id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('si', $productName, $id);
        $stmt->execute();
        $this->conn->close();
    }

    public function destroy($id)
    {
        $query = 'DELETE FROM product WHERE id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $this->conn->close();
    }

    public function findAllWithCategory()
    {
        $sql = "SELECT product.product_name ,description.producer,description.isi_bersih,description.jenis 
        FROM product 
        JOIN description on product.id = description.id";

        $result = $this->conn->query($sql);
        $this->conn->close();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function updateDescription($colomn, $id)
    {
        $sql = "UPDATE description SET $colomn = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $colomn, $id);
        $stmt->execute();
        $stmt->close();
        $this->conn->close();
    }

    public function deleteDescription($id)
    {
        $sql = "DELETE FROM description WHERE id_desc = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $this->conn->close();
    }

    public function insertDescription($id_desc, $producer, $isi_bersih, $jenis)
    {
        $sql = "INSERT INTO `description` (`id_desc`, `producer`, `isi_bersih`, `jenis`) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $id_desc, $producer, $isi_bersih, $jenis);
        $stmt->execute();
        $stmt->close();
        $this->conn->close();
    }

    public function findProductWithDescriptionById($id)
    {
        $sql = "SELECT product.id, product.product_name, description.producer, description.isi_bersih, description.jenis
            FROM product
            JOIN description on product.id = description.id_desc
            WHERE product.id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        // Fetch the data into an associative array
        $data = $result->fetch_all(MYSQLI_ASSOC);

        // Close the statement and connection
        $stmt->close();
        $this->conn->close();

        return $data;
    }


}
