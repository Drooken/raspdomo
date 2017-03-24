#!/bin/bash
nb_lampes=4
 for ((i=0; i< nb_lampes; i++));
do
	gpio mode $i out
	gpio write $i 1 
done

