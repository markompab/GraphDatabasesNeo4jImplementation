<?php
	require_once __DIR__ .'/vendor/autoload.php';
	use GraphAware\Neo4j\Client\ClientBuilder;

	// Example for Bolt
	$config = \GraphAware\Bolt\Configuration::newInstance()
	->withCredentials('Clueout', '5OWTYtZDhrCmxcMANJGp')
	->withTimeout(10)
	->withTLSMode(\GraphAware\Bolt\Configuration::TLSMODE_REQUIRED);

	$driver = \GraphAware\Bolt\GraphDatabase::driver('bolt://hobby-jaampiliojekgbkeiajaoool.dbs.graphenedb.com:24786', $config);
	$client = $driver->session();

	$result = $client->run("CREATE (n:Person {name: 
		\"Bob\"}) RETURN id(n)");
	echo $result->getRecord()->value("id(n)");
/*
	$session->run("CREATE (n) SET n += {props}",['name'=>'Mike','age'=>27]);
	
	$config = \GraphAware\Bolt\Configuration::newInstance()
	    ->withCredentials('bolttest', 'L7n7SfTSj0e6U')
	    ->withTLSMode(\GraphAware\Bolt\Configuration::TLSMODE_REQUIRED);

	$driver = \GraphAware\Bolt\GraphDatabase::driver('bolt://hobomjfhocgbkeenl.dbs.graphenedb.com:24786', $config);
	$session = $driver->session();	*/	
?>
