@echo "Unzipping providence..."
@echo ""
@echo ""
@c:
@cd C:\MAMP\bin\php
::move php8.1.0 _php8.1.0
::move php8.0.1 _php8.0.1
@cd C:\MAMP\htdocs\CollectiveAccessMAMP\
7za.exe x providence.zip -r -aoa
@echo ""
@echo ""
@move providence-1.7.17 ..\providence
@copy setup.php ..\providence
@c:\MAMP\bin\mysql\bin\mysql.exe -u root -proot -e "CREATE DATABASE IF NOT EXISTS collectiveaccess;"
pause