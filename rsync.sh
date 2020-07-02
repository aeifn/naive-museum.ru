#!/bin/sh

while true;
do rsync -avz theme/ nm:wordpress/public_html/wp-content/themes/mrlini/
done
