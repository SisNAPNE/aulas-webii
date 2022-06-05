<?php
	// Função para carregar automaticamente todas as classes padrão
	function autoload($class_name) {

		$ABSPATH = dirname( __FILE__ );

		$file = $ABSPATH . "/" . $class_name . '.php';
		$fileM = $ABSPATH . '/models/' . $class_name . '.php';
		$fileC = $ABSPATH . '/controllers/' . $class_name . '.php';

		if(!file_exists( $file )) {
			if(!file_exists( $fileM )) {
				if(!file_exists( $fileC )) {
					echo "<script>alert('ERRO AO CARREGAR CLASSE')</script>";
				} else {
					require_once $fileC;
				}
			} else {
				require_once $fileM;
			}
		} else {
			require_once $file;
		}
	}

	spl_autoload_register('autoload');

