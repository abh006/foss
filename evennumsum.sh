#!/bin/bash

clear
ch=1
while [ $ch -ne 0 ]
do
	echo "enter the limit : "
	read ch
	
	sum=0
	for(( i=1;$i <= $ch;++i))
	do
		x=`expr 2 \* $i`
		sum=`expr $sum + $x`
	done
	echo "sum = $sum "
done
