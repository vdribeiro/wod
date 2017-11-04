<?

class documentos {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM documentations');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getdocumento($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM documentations WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function insertdocumento($content, $last_edited, $version_id, $hired_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO documentations VALUES (DEFAULT, ?, ?, ?, ?)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($content, $last_edited, $version_id, $hired_id));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
	}
	
	function editdocumento($cod, $content, $last_edited, $hired_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE documentations SET content=?, last_edited=?, hired_id=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		}

		$res =& $stmt->execute(array($content, $last_edited, $hired_id, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function deldocumento($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM documentations WHERE id=?');

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
		$stmt =& $mdb2->prepare('SELECT * FROM documentations WHERE version_id = ?');

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
