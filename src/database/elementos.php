<?

class elementos {

	function getAll() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM hired');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}

	function getelemento($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM hired WHERE id = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
	function getelementonome($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT developer_id FROM contracted,hired WHERE contracted.hired_id=?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetch();
	}
	
	function obtemhired($developer_id,$project_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM contracted WHERE developer_id=? AND project_id=?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($developer_id,$project_id));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		$var = $res->fetchRow();
		return $var["hired_id"];
	}
	
	function insertelemento($job, $salary, $start_date) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO hired VALUES (DEFAULT, ?, NULL, ?, ?, DEFAULT)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($job, $salary, $start_date));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
		
	}
	
	function retultimoelemento() {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT MAX(id) FROM hired');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array());

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		$var = $res->fetchRow();
		return $var["max"];
		
	}
	
	function editelemento($cod, $job, $speciality, $salary, $state) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE hired SET job=?, speciality=?, salary=?, state=? WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		}

		$res =& $stmt->execute(array($job, $speciality, $salary, $state, $cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delelemento($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM hired WHERE id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function delcontract($hid,$pid,$did) {
		global $mdb2;
		$stmt =& $mdb2->prepare('DELETE FROM contracted WHERE hired_id=? AND project_id=? AND developer_id=?');

		if (PEAR::isError($stmt)) {
			return null;
		} 

		$res =& $stmt->execute(array($hid,$pid,$did));

		if (PEAR::isError($res)) {
			return null;
		}
	}
	
	function getbyProject($cod) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM hired, contracted WHERE (contracted.project_id=?) AND (contracted.hired_id=hired.id)');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($cod));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchAll();
	}
	
	function contrataele($hired_id, $project_id, $developer_id) {
		global $mdb2;
		$stmt =& $mdb2->prepare('INSERT INTO contracted VALUES (?, ?, ?)');

		if (PEAR::isError($stmt)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		} 

		$res =& $stmt->execute(array($hired_id, $project_id, $developer_id));

		if (PEAR::isError($res)) {
			$errors['generic'] = 'Erro na BD';
			return $errors;
		}
		
	}
	
}

?>
