plugins:
	./wp

.PHONY: dump
dbdump:
	docker exec nm_db_1 sh -c 'exec mysqldump -uwordpress -pwordpress wordpress' > dump/dump.sql
dumpmeta:
	docker exec nm_db_1 sh -c 'exec mysqldump -uwordpress -pwordpress --add-drop-table wordpress wp_postmeta' > dump/dump.sql


dbrestore: 
	docker exec -i nm_db_1 sh -c 'exec mysql -uwordpress -pwordpress wordpress' < ./dump/dump.sql

push: dbdump
	rsync -avz ./dump u:
	rsync -avz ./plugins u:
	rsync -avz ./uploads u:

pull:
	rsync -avz u:dump .
	rsync -avz u:plugins .
	rsync -avz u:uploads .
