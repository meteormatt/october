<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => '回到basics'
    ],
    'locale' => [
        'en' => 'English',
        'de' => 'German',
        'es' => 'Spanish',
        'es-ar' => 'Spanish (Argentina)',
        'fa' => 'Persian',
        'fr' => 'French',
        'hu' => 'Hungarian',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'nl' => 'Dutch',
        'pl' => 'Polish',
        'pt-br' => 'Brazilian Portuguese',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'se' => 'Swedish',
        'sk' => 'Slovak (Slovakia)',
        'tr' => 'Turkish',
        'zh-cn' => 'Chinese (China)'
    ],
    'directory' => [
        'create_fail' => '不能创建目录: :name'
    ],
    'file' => [
        'create_fail' => '不能创建文件: :name'
    ],
    'combiner' => [
        'not_found' => "混合文件 ':name' 没找到."
    ],
    'system' => [
        'name' => '系统',
        'menu_label' => '系统',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Misc',
            'logs' => 'Logs',
            'mail' => 'Mail',
            'shop' => 'Shop',
            'team' => 'Team',
            'users' => 'Users',
            'system' => 'System',
            'social' => 'Social',
            'events' => 'Events',
            'customers' => 'Customers',
            'my_settings' => 'My Settings'
        ]
    ],
    'plugin' => [
        'unnamed' => '未命名的插件',
        'name' => [
            'label' => '插件名称',
            'help' => '输入插件的唯一代码. 比如 RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => '管理插件',
        'enable_or_disable' => '启用或禁用',
        'enable_or_disable_title' => '启用或禁用插件',
        'remove' => '移除',
        'refresh' => '刷新',
        'disabled_label' => '禁用',
        'disabled_help' => '被禁用的插件被应用程序忽略了.',
        'selected_amount' => '选中的插件: :数目',
        'remove_confirm' => '你确定吗?',
        'remove_success' => '成功从系统移除这些插件.',
        'refresh_confirm' => '你确定吗?',
        'refresh_success' => '成功刷新了系统中的插件.',
        'disable_confirm' => '你确定吗?',
        'disable_success' => '成功禁用了这些插件.',
        'enable_success' => '成功启用了这些插件',
        'unknown_plugin' => '插件从文件系统中移除了.'
    ],
    'project' => [
        'name' => '项目',
        'owner_label' => '拥有者',
        'attach' => '增加项目',
        'detach' => '删除项目',
        'none' => '没有',
        'id' => [
            'label' => '项目ID',
            'help' => '如何找到你的项目ID',
            'missing' => '请确认你想使用的项目ID.'
        ],
        'detach_confirm' => '你确定要删除这个项目吗?',
        'unbind_success' => '项目删除成功.'
    ],
    'settings' => [
        'menu_label' => '设置',
        'not_found' => '不能找到特定的设置.',
        'missing_model' => '设置页缺少Model定义.',
        'update_success' => ':name 的设置更新成功了.',
        'return' => '返回系统设置',
        'search' => '搜索'
    ],
    'mail' => [
        'log_file' => '日志文件',
        'menu_label' => '邮件配置',
        'menu_description' => '管理邮件配置.',
        'general' => '常规',
        'method' => '邮件方法',
        'sender_name' => '发送者名称',
        'sender_email' => '发送者邮件',
        'php_mail' => 'PHP mail',
        'sendmail' => 'Sendmail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP 地址',
        'smtp_authorization' => '需要 SMTP 认证',
        'smtp_authorization_comment' => '使用 checkbox 如果你的SMTP服务器需要认证.',
        'smtp_username' => '用户名',
        'smtp_password' => '密码',
        'smtp_port' => 'SMTP 端口',
        'smtp_ssl' => '需要SSL连接',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail 路径',
        'sendmail_path_comment' => '请确认 Sendmail 路径.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun 域名',
        'mailgun_domain_comment' => '请确认 Mailgun 域名.',
        'mailgun_secret' => 'Mailgun Secret',
        'mailgun_secret_comment' => '输入你的 Mailgun API key.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill Secret',
        'mandrill_secret_comment' => '输入你的 Mandrill API key.'
    ],
    'mail_templates' => [
        'menu_label' => '邮件模板',
        'menu_description' => '编辑发送到用户和管理员的邮件模板, 管理邮件布局.',
        'new_template' => '新模板',
        'new_layout' => '新布局',
        'template' => '模板',
        'templates' => '模板',
        'menu_layouts_label' => '邮件布局',
        'layout' => '布局',
        'layouts' => '布局',
        'name' => '名称',
        'name_comment' => '指向这个模板的唯一名称',
        'code' => '代码',
        'code_comment' => '指向这个模板的唯一代码',
        'subject' => '标题',
        'subject_comment' => '邮箱消息标题',
        'description' => '描述',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => '纯文本',
        'test_send' => '发送测试消息',
        'test_success' => '测试消息已经成功发送.',
        'return' => '返回模板列表'
    ],
    'install' => [
        'project_label' => '加入项目',
        'plugin_label' => '安装插件',
        'missing_plugin_name' => '请指明要安装的插件.',
        'install_completing' => '完成安装过程',
        'install_success' => '插件安装成功.'
    ],
    'updates' => [
        'title' => '管理更新',
        'name' => '软件更新',
        'menu_label' => '更新',
        'menu_description' => '更新系统, 管理并安装插件和主题.',
        'check_label' => '检查更新',
        'retry_label' => '重试',
        'plugin_name' => '名字',
        'plugin_description' => '描述',
        'plugin_version' => '版本',
        'plugin_author' => '作者',
        'core_build' => '当前build',
        'core_build_old' => '当前build :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => '新 build 可用.',
        'core_downloading' => '下载应用程序',
        'core_extracting' => '解压应用程序',
        'plugins' => '插件',
        'disabled' => '禁用',
        'plugin_downloading' => '下载插件: :name',
        'plugin_extracting' => '解压插件: :name',
        'plugin_version_none' => '新插件',
        'plugin_version_old' => '当前 v:version',
        'plugin_version_new' => 'v:version',
        'theme_label' => '主题',
        'theme_new_install' => '新主题安装.',
        'theme_downloading' => '下载主题: :name',
        'theme_extracting' => '解压主题: :name',
        'update_label' => '更新软件',
        'update_completing' => '完成更新过程',
        'update_loading' => '加载可用更新...',
        'update_success' => '更新完成.',
        'update_failed_label' => '更新失败',
        'force_label' => '强制更新',
        'found' => [
            'label' => '发现新更新!',
            'help' => '点击更新.'
        ],
        'none' => [
            'label' => '没有更新',
            'help' => '没发现新更新.'
        ]
    ],
    'server' => [
        'connect_error' => '连接服务器失败.',
        'response_not_found' => '找不到更新服务器.',
        'response_invalid' => '服务器的异常返回.',
        'response_empty' => '服务器的空返回.',
        'file_error' => '服务器发送失败.',
        'file_corrupt' => '服务器文件被占用.'
    ],
    'behavior' => [
        'missing_property' => 'Class :class 必须定义属性 $:property 被 :behavior behavior 使用.'
    ],
    'config' => [
        'not_found' => '不能查找配置文件 :file 为 :location 定义.',
        'required' => "配置 :location 必须有 ':property'."
    ],
    'zip' => [
        'extract_failed' => "不能解压缩文件 ':file'."
    ],
    'event_log' => [
        'hint' => 'This log displays a list of potential errors that occur in the application, such as exceptions and debugging information.',
        'menu_label' => 'Event log',
        'menu_description' => 'View system log messages with their recorded time and details.',
        'empty_link' => 'Empty event log',
        'empty_loading' => 'Emptying event log...',
        'empty_success' => 'Successfully emptied the event log.',
        'return_link' => 'Return to event log',
        'id' => 'ID',
        'id_label' => 'Event ID',
        'created_at' => 'Date & Time',
        'message' => 'Message',
        'level' => 'Level'
    ],
    'request_log' => [
        'hint' => 'This log displays a list of browser requests that may require attention. For example, if a visitor opens a CMS page that cannot be found, a record is created with the status code 404.',
        'menu_label' => 'Request log',
        'menu_description' => 'View bad or redirected requests, such as Page not found (404).',
        'empty_link' => 'Empty request log',
        'empty_loading' => 'Emptying request log...',
        'empty_success' => 'Successfully emptied the request log.',
        'return_link' => 'Return to request log',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'count' => 'Counter',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Status'
    ],
    'permissions' => [
        'name' => 'System',
        'manage_system_settings' => 'Manage system settings',
        'manage_software_updates' => 'Manage software updates',
        'manage_mail_templates' => 'Manage mail templates',
        'manage_mail_settings' => 'Manage mail settings',
        'manage_other_administrators' => 'Manage other administrators',
        'view_the_dashboard' => 'View the dashboard'
    ]
];
