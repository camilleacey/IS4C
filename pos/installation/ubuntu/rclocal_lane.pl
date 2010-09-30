#!/usr/bin/perl

open(FILE, "/etc/init.d/rc.local");

$ssd = -1;
$lptty = -1;

while ($line = <FILE>) {

	if (index($line, "/ssd") >= 0) {
		$ssd = 1;
	}
	if (index($line, "/lptty") >= 0) {
		$lptty = 1;
	}
}

close(FILE);

open(FILE, ">>/etc/init.d/rc.local");

if ($ssd < 0) {
	print FILE "\n\n/etc/init.d/ssd";
}

if ($lptty < 0) {
	print FILE "\n/etc/init.d/lptty";
}

print FILE "\nmount -t tmpfs -o size=1m tmpfs /pos/is4c/rs232/ssddata";
print FILE "\nchmod 777 /pos/is4c/rs232/ssddata"; 

close(FILE);