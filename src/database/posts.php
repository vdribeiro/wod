<?

class posts {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM posts');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
	
	function getpost($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM posts WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function getbythread($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM posts WHERE thread_id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
	
	function insertpost($title, $content, $idauthor, $idthread) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO posts VALUES (DEFAULT, ?, ?, ?, ?)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($title, $content, $idauthor, $idthread));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
	}
	
	function editpost($cod, $title, $content, $author) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE posts SET title=?, content=?, author=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($title, $content, $author, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delpost($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM posts WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
}

?>
