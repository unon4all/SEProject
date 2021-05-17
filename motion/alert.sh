#!/bin/bash

G=$(ls | wc -l)
C="$(($G+1))"

for (( ; ; ))
do
F=$(ls | wc -l)
if [ $F -eq $C ]
then
python3 alert.py
((C++))
fi
done
