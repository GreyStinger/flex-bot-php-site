echo ""; echo "1.   Clearing Old Server Files";
sudo rm -rf /opt/lampp/htdocs/*;
echo ""; echo "2.   Copying Over New Server Files";
sudo cp -r ./* /opt/lampp/htdocs;
echo ""; echo "3.   Removing Unnecessary Development Files From Server";
sudo rm /opt/lampp/htdocs/forward.sh /opt/lampp/htdocs/index.html /opt/lampp/htdocs/todo.txt /opt/lampp/htdocs/core/css/stylesheet.sass;
echo ""; echo "4.   Migrating Items To Server Compleated";
