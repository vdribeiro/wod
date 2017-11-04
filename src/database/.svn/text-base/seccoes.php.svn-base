<?

class seccoes {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM sections');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getsection($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM sections WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function insertsection($name, $content, $idauthor) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO sections VALUES (DEFAULT, ?, ?, ?)');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($name, $content, $idauthor));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function editsection($cod, $name, $content, $idauthor) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE sections SET name=?, content=?, author=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($name, $content, $idauthor, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delsection($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM sections WHERE id=?');

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
