<?

class Utilizadores {

        function getAll() {
                global $mdb2;
                $stmt =& $mdb2->prepare('SELECT * FROM users');

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
		$stmt =& $mdb2->prepare('SELECT * FROM users WHERE username = ?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		}

		$res =& $stmt->execute(array($username));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
		}

		return $res->fetchRow();
	}
	
        function existsUsernamePassword($username, $password) {
                global $mdb2;
                $stmt =& $mdb2->prepare('SELECT * FROM users WHERE username = ?');

                if (PEAR::isError($stmt)) {
                        die($stmt->getDebugInfo());
                }

                $res =& $stmt->execute(array($username));

                if (PEAR::isError($res)) {
                        die($res->getDebugInfo());
                }

                $utilizador = $res->fetchRow();
		
                return ($utilizador['password'] == md5($password));
        }
	
        function addUser( $username, $password, $name, $email, $age, $address) {
                global $mdb2;
                $stmt =& $mdb2->prepare('INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, DEFAULT)');

            	if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
		
			return false;
                }

                $res =& $stmt->execute(array($username, md5($password), $name, $email, $age, $address));

                if (PEAR::isError($res)) {
                        die($res->getDebugInfo());
			
			return false;
                }
		return true;
        }

	function edituser($username, $name, $email, $age, $address, $state) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE users SET name=?, email=?, age=?, address=?, state=? WHERE username=?');

		if (PEAR::isError($stmt)) {
			die($stmt->getDebugInfo());
			return false;
		} 

		$res =& $stmt->execute(array( $name, $email, $age, $address, $state, $username));

		if (PEAR::isError($res)) {
			die($res->getDebugInfo());
			return false;
		}
		return true;
	}

	function editself($username, $password, $name, $email, $age, $address) {
		global $mdb2;
		$stmt =& $mdb2->prepare('UPDATE utilizadores SET password=?, name=?, email=?, age=?, address=? WHERE username=?');

		if (PEAR::isError($stmt)) {
			return false;
		} 

		$res =& $stmt->execute(array($password, $name, $email, $age, $address, $state, $username));

		if (PEAR::isError($res)) {
			return false;
		}
		return true;
	}
}

