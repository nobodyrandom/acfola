#!/bin/bash

RED=$'\033[0;31m'
NC=$'\033[0m' # No Color

echo "Why you so lazy >.<"
sleep 1
echo "Good thing I was bored and wrote this script for ya."
sleep 1
echo "OK Let's get started."
sleep 1
echo -e "What is your GitHub repo path? (ie. dev foundation is '${RED}Fadyazmy/developersfoundation${NC}')"
echo "Make sure to include the username and slash"

read REPO

while true; do
    read -p "Using ${RED}https://github.com/$REPO.git${NC} Are you sure this is correct?" yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "I give up, run da script to try again."; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

# LOL FINALLY ACTUALLY RUNNING THE COMMANDS
# git remote rm origin
echo -e "Changing ${RED}https://github.com/$REPO.git${NC} to origin."
git remote set-url origin https://github.com/$REPO.git
echo -e "Init origin master"
git push -u origin master
echo -e "Setting up API remote for api sync"
git remote add api https://github.com/nobodyrandom/blank-bootstrap.git

echo "Alls well. Done init."

while true; do
    read -p "Do you want to init composer as well? (php must be setup for this to work)" yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "Okay :("; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

php composer.phar update