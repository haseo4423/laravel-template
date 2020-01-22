#!/bin/sh

echo "CREATE DATABASE IF NOT EXISTS \`testing\` ;" | "${mysql[@]}"
echo "GRANT ALL ON \`testing\`.* TO 'default'@'%' ;" | "${mysql[@]}"
