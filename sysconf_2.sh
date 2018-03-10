#!/bin/bash

clear
echo "SYSTEM CONFIGURATION"
echo "--------------------"

echo "Current User : $USER "
echo "Current logname : $LOGNAME "
echo "Current Shell : $SHELL"
echo "Home Directory : $HOME"
echo "Current Path Setting : $PATH"
echo "Operating System Type : $OSTYPE"
echo "Current Working Directory : `pwd`"
echo "Currently logged no. of users : `users|wc -w`"
