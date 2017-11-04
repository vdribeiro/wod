<?
class Admin {

        function getAll() {
                global $mdb2;
                $stmt =& $mdb2->prepare('SELECT * FROM administrators');

                if (PEAR::isError($stmt)) {
                        die($stmt->getDebugInfo());
                }

                $res =& $stmt->execute();

                if (PEAR::isError($res)) {
                        die($res->getDebugInfo());
                }

                return $res->fetchAll();
        }
	
	function getByUsername($username) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM administrators WHERE username = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($username));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}	

	function isAdmin($username) {
		global $mdb2;
		$stmt =& $mdb2->prepare('SELECT * FROM administrators WHERE username = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($username));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		if (empty($res)){
			return false;
		}			

		return isAdmintrue;
	}

}

?>

