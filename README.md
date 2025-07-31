# Dcat Admin 演示模块

一个基于 nwidart/laravel-modules 的 Dcat Admin 演示模块，展示各种功能和最佳实践。

## 安装

您可以通过 composer 安装此包：

```bash
composer require dcatadmin2/module-dcatadmin_demo
```

## 使用方法

安装完成后，模块将自动注册。您可以通过管理面板访问演示功能。

### 发布配置

如果您需要自定义配置，可以发布它：

```bash
php artisan vendor:publish --tag=madmindemo-config
```

## 功能特性

- 基于 nwidart/laravel-modules 的模块化架构
- Dcat Admin 管理面板集成
- 数据库迁移
- 示例控制器和视图
- 配置管理
- 测试支持

## 测试

```bash
composer test
```

## 更新日志

请查看 [CHANGELOG](CHANGELOG.md) 了解最近更新的详细信息。

## 贡献指南

请查看 [CONTRIBUTING](CONTRIBUTING.md) 了解详情。

## 安全

如果您发现任何安全问题，请发送邮件至 admin@dcatadmin.com，而不是使用问题跟踪器。

## 许可证

MIT 许可证 (MIT)。请查看 [许可证文件](LICENSE.md) 了解更多信息。