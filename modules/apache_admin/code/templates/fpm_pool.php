[<?=$domainName?>]

listen = /var/run/php/<?=$domainName?>.socket
listen.backlog = -1
listen.owner = www-data
listen.group = www-data
listen.mode=0660

; Unix user/group of processes
user = www-data
group = www-data

; Choose how the process manager will control the number of child processes.
pm = dynamic
pm.max_children = 75
pm.start_servers = 10
pm.min_spare_servers = 5
pm.max_spare_servers = 20
pm.max_requests = 500

; Pass environment variables
env[HOSTNAME] = $HOSTNAME
env[PATH] = /usr/local/bin:/usr/bin:/bin
env[TMP] = /tmp
env[TMPDIR] = /tmp
env[TEMP] = /tmp

; host-specific php ini settings here
php_admin_value[open_basedir] = <?=$rootDir?>:/tmp