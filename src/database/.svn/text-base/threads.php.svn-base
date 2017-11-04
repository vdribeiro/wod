<?

class threads {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM threads');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
	
	function getthread($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM threads WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function getbysection($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM threads WHERE section_id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
	
	function insertthread($title, $content, $idauthor, $idsection) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO threads VALUES (DEFAULT, ?, ?, ?, ?)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($title, $content, $idauthor, $idsection));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
	}
	
	function editthread($cod, $title, $content, $author) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE threads SET title=?, content=?, author=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($title, $content, $author, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delthread($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM threads WHERE id=?');

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
