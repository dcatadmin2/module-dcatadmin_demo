#!/usr/bin/env bash
# start.sh
composer install

# 模块初始化 1. 创建默认环境变量文件 2. key:generate 3. 创建database.sqllite 4. migrate --seed
composer run module_init
#  启动服务器
php artisan serve --port=8081
