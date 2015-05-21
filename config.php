<?php
	$mysql = array(
		'user' => 'root',
		'password' => '',
		'host' => 'localhost',
		'database' => 'btc'
	);

	mysql_connect($mysql['host'], $mysql['user'], $mysql['password']) or die("Cannot connect to database.");
	mysql_select_db($mysql['database']);
	
	$rpc = array(
		'login' => 'RPC_login',
		'password' => 'RPC_password',
		'ip' => '127.0.0.1',
		'port' => '22815'
	);
	
	$config = array(
		'name' => 'VirtaPonzi',																	// Name of your ponzi
		'title' => 'get rich!',																// Description
		'full-name' => 'Virtacoin Ponzi',												// Full name of your ponzi
		'val' => 'VTA',																				// Cryptocurrency abbreviation
		'precision' => 4,
		'confirmations' => 1,																	// Minimum number of confirmations to add transaction
		'min' => 1,																				// Minimum pay in
		'max' => 500000,																				// Maximum pay in
		'income' => 50000,																			// How much money to send - default: 0.1 - 110%
		'fee' => 0.1,																				// Fee taken from pay in amount
		'payout-check' => 180,																// Time between payouts
		'ownaddress' => '1LZqBFbGEKmKJfwirGnEpD6VvH9eAYtyKf', // Your address
		'sendback' => false,																	// What to do with txs that are over maximum or under minimum | true - send back, false - send to your address
		'ponziacc' => 'vta',																	// Name of daemon account
		'address' => '1LZqBFbGEKmKJfwirGnEpD6VvH9eAYtyKf',			// Ponzi address
		'privkey' => '',																			// Needed in setup, private key of your address
		'blockchain-addr' => 'http://blockexperts.com/vta/height/',
		'blockchain-tx' => 'http://blockexperts.com/vta/tx/'
	);
?>
