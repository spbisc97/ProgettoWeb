/** @format */
// Example for a second server (PostgreSQL for Windows)
$conf["servers"][1]["desc"] = "edu-database";
$conf["servers"][1]["host"] = "edu-database-instance-1.cuooizc71ger.eu-south-1.rds.amazonaws.com";
$conf["servers"][1]["port"] = 5432;
$conf["servers"][1]["sslmode"] = "allow";
$conf["servers"][1]["defaultdb"] = "template1";
