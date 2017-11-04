<?

class codigos {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM source_codes');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getcodigo($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM source_codes WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function insertcodigo($content, $last_edited, $version_id, $hired_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO source_codes VALUES (DEFAULT, ?, ?, ?, ?)');

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
	
	function editcodigo($cod, $content, $last_edited, $hired_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE source_codes SET content=?, last_edited=?, hired_id=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		}

		$res =& $stmt->execute(array($content, $last_edited, $hired_id, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delcodigo($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM source_codes WHERE id=?');

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
		$stmt =& $mdb2->prepare('SELECT * FROM source_codes WHERE version_id = ?');

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
