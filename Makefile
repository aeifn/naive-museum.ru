plugins:
	./wp

.PHONY: dump
dump:
	docker exec nm_db_1 sh -c 'exec mysqldump -uwordpress -pwordpress wordpress' > dump/dump.sql

pushdump:
	scp -r dump/* u:nm/dump/

restore: pull
	docker exec -i nm_db_1 sh -c 'exec mysql -uwordpress -pwordpress wordpress' < ./dump/dump.sql

pull:
	rsync -avz u:dump .
	rsync -avz u:plugins .
	rsync -avz u:uploads .
