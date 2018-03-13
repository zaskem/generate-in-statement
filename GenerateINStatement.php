<?php
// USAGE: php GenerateINStatement.php inFile=path/to/filename.csv&outFile=path/to/filename.txt
// inFile and outFile are optional -- by default they are:
// inFile /auto/mz/cifs/ListData.csv
// outFile /auto/mz/cifs/ListOut.txt

// Take "Command Line" arguments
parse_str(implode('&', array_slice($argv, 1)), $_GET);
// Set Input and Output file paths
$inFilePath = ($_GET['inFile']) ? $_GET['inFile'] : '/auto/mz/cifs/ListData.csv';
$outFilePath = ($_GET['outFile']) ? $_GET['outFile'] : '/auto/mz/cifs/ListOut.txt';

// Generate IN Statement
$statementText = 'IN (';
        if (($handle = fopen($inFilePath, "r")) !== FALSE) {
                while (($inputData = fgetcsv($handle, 50, ",")) !== FALSE) {
                        $statementText .= "'$inputData[0]',";
                }
                fclose($handle);
        }
$statementText = rtrim($statementText, ',') . ')';

// Output File
        $fp = fopen($outFilePath, "wb");
        fwrite($fp, $statementText);
        fclose($fp);
?>

