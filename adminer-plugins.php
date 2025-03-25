<?php

declare(strict_types=1);

$token = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'apitoken.txt');

return array(
	new AdminerSqlGemini(trim($token)),
	new AdminerLoginWithoutCredentials(),
	new AdminerTableStructure(),
	new AdminerTablesFilter(),
	new AdminerJsonColumn(),
	new AdminerDotJs()

);
