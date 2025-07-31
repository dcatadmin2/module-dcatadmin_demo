<?php

namespace DcatAdminDemo\Database\Seeders;

use Illuminate\Database\Seeder;
use DcatAdminDemo\Models\Demo;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 创建示例数据
        Demo::create([
            'name' => '欢迎使用Dcat Admin Demo',
            'description' => '这是一个Dcat Admin模块的演示示例，展示了如何创建和管理后台模块。',
            'status' => true,
        ]);

        Demo::create([
            'name' => '模块功能演示',
            'description' => '本模块包含了完整的CRUD操作、数据表格、表单构建等功能演示。',
            'status' => true,
        ]);

        Demo::create([
            'name' => '开发指南',
            'description' => '通过本示例，您可以学习如何开发自己的Dcat Admin模块。',
            'status' => false,
        ]);
    }
}