alias drush='podman exec -it ${CONTAINER_NAME} vendor/bin/drush'
alias composer='podman exec -it ${CONTAINER_NAME} /usr/local/bin/composer'
alias php='podman exec -it ${CONTAINER_NAME} /usr/bin/php'
run () { local args="$@"; podman exec -it ${CONTAINER_NAME} /bin/bash -c $args; }
