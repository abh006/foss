#!/bin/bash

clear
ch=1
while [ $ch -ne 0 ]
do

echo 
echo "CALCULATOR"
echo "-----------"
echo "1. Addition"
echo "2.Subtraction"
echo "3.Multiplication"
echo "4.Division"
echo "Choose from the above"
read ch

echo "enter two numbers: "
read x
read y
	
if [ $ch == 1 ] ; then	
	echo "$x + $y = `expr $x + $y`"
elif [ $ch == 2 ] ; then
	echo "$x - $y = `expr $x - $y`"
elif [ $ch == 3 ] ; then
	echo "$x * $y = `expr $x \* $y`"	
elif [ $ch == 4 ] ; then	
	if [ $y == 0 ] ; then
		echo "Division Cannot be performed with zero"
	else
		echo "$x / $y = `expr $x / $y`"	
	fi
fi
done
