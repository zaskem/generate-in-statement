# generate-in-statement
Process to transpose a single-column of data into an "IN" statement suitable for SQL queries.

The simple PHP script was made to convert a single-column CSV input file to the form of `IN('a','b',...'z')` for use in ANSI SQL situations.

## PHP Invocation
`php GenerateInStatement.php inFile=path/to/filename.csv&outFile=path/to/filename.txt`

Default values for input/output files can easily be specified.

A simple Shell script (`.sh`) is included--I personally use the shell script invocation via ssh/key auth across platforms (in my environment, the PHP lives on a box separate from my regular workstation and is accessed via CIFS share).
