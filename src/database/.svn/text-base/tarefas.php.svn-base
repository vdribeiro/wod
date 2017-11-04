<?

class tarefas {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM tasks');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function gettarefa($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM tasks WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function inserttarefa($name, $details, $version_id, $priority) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO tasks VALUES (DEFAULT, ?, ?, ?, ?)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($name, $details, $version_id, $priority));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
	}
	
	function edittarefa($cod, $name, $details, $priority) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE tasks SET name=?, details=?, priority=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		}

		$res =& $stmt->execute(array($name, $details, $priority, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function deltarefa($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM tasks WHERE id=?');

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
		$stmt =& $mdb2->prepare('SELECT * FROM tasks WHERE version_id = ?');

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
