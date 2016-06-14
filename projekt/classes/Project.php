<?php

require_once('DB.php');

class Project extends DB {

    public $id;

    public function __construct($id = false) {
        parent::__construct();
        if ($id) {
            $this->id = $id;
        }
    }

    public function getInfo() {
        $stmt = $this->mysqli->prepare("SELECT version_control, demo_url FROM mamangus_projects WHERE id=? LIMIT 1") or die($mysqli->error);
        $stmt->bind_param('i', $this->id) or die($stmt->error);
        $stmt->execute() or die($stmt->error);
        $result = $stmt->get_result();
        return $result->fetch_array();
    }

    public function add($post) {
        $stmt = $this->mysqli->prepare("INSERT INTO mamangus_projects(name, email, version_control, demo_url, created) VALUES (?, ?, ?, ?, NOW())") or die($mysqli->error);
        $stmt->bind_param('ssss', $post["name"], $post["email"], $post["version_control"], $post["demo_url"]) or die($stmt->error);
        $stmt->execute() or die($stmt->error);
    }

}

?>
