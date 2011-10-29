<?php
	class HospitalUserManager extends TModule implements IUserManager {
		public function getGuestName() {
			return 'Guest';
		}

		// requerida por IUserManager
		public function getUser($username=null) {
			$user = new TUser($this);
			$user->setIsGuest(true);
			if( $username !== null && $this->usernameExists($username) ) {
				$user->setIsGuest( false );
				$user->setName( $username );
				$user->setRoles( array('normal') );
			}
			return $user;
		}

		// requerida por IUserManager
		public function validateUser( $username, $password ) {
			// FIXME
			return true;
			//return $username == $password;
			//return $this->usernameExists($username);
		}

		// requerida por IUserManager
		public function getUserFromCookie( $cookie ) {
			// TODO: nada por ahora
			return null;
		}

		// requerida por IUserManager
		public function saveUserToCookie( $cookie ) {
			// TODO: por ahora no se guarda nada
		}

		public function usernameExists($username) {
			// FIXME
			return true;
		}
	}
?>
