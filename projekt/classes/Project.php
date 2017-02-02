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

    public function findByEmail($email) {
        $stmt = $this->mysqli->prepare("SELECT id FROM mamangus_projects WHERE email LIKE ? LIMIT 1") or die($mysqli->error);
        $stmt->bind_param('s', $email) or die($stmt->error);
        $stmt->execute() or die($stmt->error);
        $result = $stmt->get_result();
        $res = $result->fetch_array();
		$this->id = $res['id'];
    }

    public function getReviews() {
    	$reviews = array();
		if ($handle = opendir('/home/mamangus/db/i244_project_upload/')) {
		    while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != "..") {
				    $parts = explode('__', $entry);
				    if ($parts[0] == $this->id) {
				    	$reviews []= $entry;
				    }
				}
		    }
		    closedir($handle);
		}
		return $reviews;
    }

}

?>
