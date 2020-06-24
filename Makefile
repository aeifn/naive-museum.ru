plugins:
	./wp

.PHONY: dump
dump:
	docker exec nm_db_1 sh -c 'exec mysqldump -uwordpress -pwordpress wordpress' > dump/dump.sql

restore:
	docker exec nm_db_1 sh -c 'exec mysql -uwordpress -pwordpress' < ./dump/dump.sql

push: dump
	rsync -avz ./dump u:
	rsync -avz ./plugins u:
	rsync -avz ./uploads u:
