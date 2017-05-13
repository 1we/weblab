#!/usr/bin/perl
 use CGI':standard';
 print "Refresh:1\n";
 print "Content-type:text/html\n\n";
 ($s,$m,$h)=localtime(time);
 print br "The current server time is $h:$m:$s";
 print br "In words,the time is- $h hours, $m minutes and $s seconds";