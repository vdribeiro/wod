<?

class Eventos {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM events');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getByCodEvento($codevento) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM events WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($codevento));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}

	function insertevento($name, $content, $author) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO events VALUES (DEFAULT, ?, ?, ?, DEFAULT)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($name, $content, $author));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
	}
	
	function editevento($cod, $name, $content, $author, $state) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE events SET name=?, content=?, author=?, state=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		}

		$res =& $stmt->execute(array($name, $content, $author, $state, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delevento($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM events WHERE id=?');

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
