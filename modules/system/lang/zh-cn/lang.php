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
        'new_template' => 'New Template',
        'new_layout' => 'New Layout',
        'template' => 'Template',
        'templates' => 'Templates',
        'menu_layouts_label' => 'Mail Layouts',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'name' => 'Name',
        'name_comment' => 'Unique name used to refer to this template',
        'code' => 'Code',
        'code_comment' => 'Unique code used to refer to this template',
        'subject' => 'Subject',
        'subject_comment' => 'Email message subject',
        'description' => 'Description',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Plaintext',
        'test_send' => 'Send test message',
        'test_success' => 'The test message has been successfully sent.',
        'return' => 'Return to template list'
    ],
    'install' => [
        'project_label' => 'Attach to Project',
        'plugin_label' => 'Install Plugin',
        'missing_plugin_name' => 'Please specify a Plugin name to install.',
        'install_completing' => 'Finishing installation process',
        'install_success' => 'The plugin has been installed successfully.'
    ],
    'updates' => [
        'title' => 'Manage Updates',
        'name' => 'Software update',
        'menu_label' => 'Updates',
        'menu_description' => 'Update the system, manage and install plugins and themes.',
        'check_label' => 'Check for updates',
        'retry_label' => 'Try again',
        'plugin_name' => 'Name',
        'plugin_description' => 'Description',
        'plugin_version' => 'Version',
        'plugin_author' => 'Author',
        'core_build' => 'Current build',
        'core_build_old' => 'Current build :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => 'Latest build is available.',
        'core_downloading' => 'Downloading application files',
        'core_extracting' => 'Unpacking application files',
        'plugins' => 'Plugins',
        'disabled' => 'Disabled',
        'plugin_downloading' => 'Downloading plugin: :name',
        'plugin_extracting' => 'Unpacking plugin: :name',
        'plugin_version_none' => 'New plugin',
        'plugin_version_old' => 'Current v:version',
        'plugin_version_new' => 'v:version',
        'theme_label' => 'Theme',
        'theme_new_install' => 'New theme installation.',
        'theme_downloading' => 'Downloading theme: :name',
        'theme_extracting' => 'Unpacking theme: :name',
        'update_label' => 'Update software',
        'update_completing' => 'Finishing update process',
        'update_loading' => 'Loading available updates...',
        'update_success' => 'The update process was performed successfully.',
        'update_failed_label' => 'Update failed',
        'force_label' => 'Force update',
        'found' => [
            'label' => 'Found new updates!',
            'help' => 'Click Update software to begin the update process.'
        ],
        'none' => [
            'label' => 'No updates',
            'help' => 'No new updates were found.'
        ]
    ],
    'server' => [
        'connect_error' => 'Error connecting to the server.',
        'response_not_found' => 'The update server could not be found.',
        'response_invalid' => 'Invalid response from the server.',
        'response_empty' => 'Empty response from the server.',
        'file_error' => 'Server failed to deliver the package.',
        'file_corrupt' => 'File from server is corrupt.'
    ],
    'behavior' => [
        'missing_property' => 'Class :class must define property $:property used by :behavior behavior.'
    ],
    'config' => [
        'not_found' => 'Unable to find configuration file :file defined for :location.',
        'required' => "Configuration used in :location must supply a value ':property'."
    ],
    'zip' => [
        'extract_failed' => "Unable to extract core file ':file'."
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
