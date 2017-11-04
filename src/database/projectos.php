<?

class projectos {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM projects');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getproject($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM projects WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function getcandidaturas($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM application WHERE project_id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
	
	function insertproject($name, $start_date, $details, $cliente_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO projects VALUES (DEFAULT, ?, ?, ?, ?, DEFAULT)');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($name, $start_date, $details, $cliente_id));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function editproject($cod, $name, $details, $cliente_id, $state) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE projects SET name=?, details=?, cliente_id=?, state=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($name, $details, $cliente_id, $state, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delproject($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM projects WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delcandidatura($did,$pid) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM application WHERE developer_id=? AND project_id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($did,$pid));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function candidataproject($developer_id, $project_id, $job, $salary) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO application VALUES (?, ?, DEFAULT, ?, ?)');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($developer_id, $project_id, $job, $salary));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
}

?>
