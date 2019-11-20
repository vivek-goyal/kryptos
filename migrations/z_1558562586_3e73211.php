<?php
namespace migrations;
require_once __DIR__ .'/lib.inc.php';
db_query(<<<'SQL'
INSERT INTO resources (module, resource, privilege) VALUES
('default', 'osoby', 'index'),
('default', 'courses', 'index'),
('default', 'courses', 'update'),
('default', 'exams', 'index'),
('default', 'exams', 'update'),
('default', 'course-categories', 'index'),
('default', 'course-categories', 'update'),
('default', 'exam-categories', 'index'),
('default', 'exam-categories', 'update'),
('default', 'osoby', 'update'),
('default', 'groups', 'index'),
('default', 'groups', 'update'),
('default', 'tickets', 'index'),
('default', 'tickets', 'update'),
('default', 'config', 'logi'),
('default', 'config', 'login-history'),
('default', 'systemsconfiguration', 'index'),
('default', 'documents-versioned', 'index'),
('default', 'documents-versioned', 'update'),
('default', 'licenses', 'index'),
('default', 'licenses', 'update'),
('default', 'licenses', 'manage-license-history'),
('default', 'license-subscriptions', 'index'),
('default', 'license-subscriptions', 'update'),
('default', 'license-info', 'index'),
('default', 'license-info', 'update'),
('default', 'free-trial', 'index'),
('default', 'free-trial', 'update'),
('default', 'messages', 'update'),
('default', 'messages', 'index'),
('default', 'tasks-my', 'update'),
('default', 'tasks-my', 'index'),
('default', 'documents', 'index'),
('default', 'documenttemplates', 'index'),
('default', 'documenttemplates', 'update'),
('default', 'signatures', 'index'),
('default', 'signatures', 'update'),
('default', 'numberingschemes', 'index'),
('default', 'documents', 'pending'),
('default', 'documents', 'all'),
('default', 'registry-entries', 'index'),
('default', 'registry-entries', 'update'),
('default', 'tasks', 'index'),
('default', 'tasks', 'storage-tasks'),
('default', 'tasks', 'update');
SQL
);
?>