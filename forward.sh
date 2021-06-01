#!/bin/bash

# dir for moving and removing from
set dir /opt/lampp/htdocs;

echo ""; echo "1.   Clearing Old Server Files";
sudo rm -rf {$_dir}/*;
echo "2.   Copying Over New Server Files";
sudo cp -r ./* {$_dir};
echo "3.   Removing Unnecessary Development Files From Server";
sudo rm -rf {$_dir}/forward.sh {$_dir}/index.html {$_dir}/todo.txt {$_dir}/core/css/stylesheet.sass {$_dir}/git/ ;
echo "4.   Migrating Items To Server Compleated";
