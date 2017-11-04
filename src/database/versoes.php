<?

class versoes {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM versions');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getversion($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM versions WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function insertversion($vnumber, $projectid) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO versions VALUES (DEFAULT, DEFAULT, ?, ?)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($vnumber, $projectid));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
	}
	
	function editversion($cod, $version_number, $state) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE versions SET version_number=?, state=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		}

		$res =& $stmt->execute(array($version_number, $state, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delversion($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM versions WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function getbyProject($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM versions WHERE project_id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
}

?>
