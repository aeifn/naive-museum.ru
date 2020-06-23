plugins:
	./wp

.PHONY: dump
dump:
	docker exec nm_db_1 sh -c 'exec mysqldump -uwordpress -pwordpress wordpress' > dump/dump.sql

pushdump:
	scp -r dump/* u:nm/dump/

restore:
	docker exec nm_db_1 sh -c 'exec mysql -uwordpress -pwordpress' < ./dump/dump.sql
