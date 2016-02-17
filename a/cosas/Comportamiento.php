<?php
	interface Comportamiento {
		public function caminar($numPasos);
	}
	interface SubInterfaz extends Comportamiento {
		public function dormir($numHoras);
	}
?>