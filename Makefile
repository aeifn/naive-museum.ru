plugins:
	./wp

mkdump:
	docker exec nm_db_1 sh -c 'exec mysqldump -uwordpress -pwordpress wordpress' > dump/dump.sql

restore:
	docker exec nm_db_1 sh -c 'exec mysql -uwordpress -pwordpress' < ./dump/dump.sql
