sudo pwd
sleep 0.5
echo -e "\e[1;32mRunning upgrade command.......\n\e[0m"
sudo php bin/magento setup:upgrade
echo -e "\e[1;32mUpgrade command completed\n\e[0m"
sleep 0.5
echo -e "\e[1;32mChanging ownership.......\n\e[0m"
sudo chown -R $USER:$USER pub var generated
sleep 0.5
echo -e "\e[1;32mChanging file permissions for var and pub directories.......\n\e[0m"
sudo chmod 0777 -R pub/static pub/media var generated
echo -e "\e[1;32mAll Done :) \e[0m"
