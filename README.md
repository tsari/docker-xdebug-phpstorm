# docker-xdebug-phpstorm
Shell script to enable "single click debugging" of unit/codeception tests from within phpstorm.

You will be able to run/debug all tests, a directory, a single file or a single method.

### Why?
Have you ever tried to debug a project and its tests that runs in a docker container? 
You may think you can do this like you've done with vagrant and add ssh to the container. Bad idea as this breaks docker principles and it could lead to a permission mess.

Really! That's the reason I was creating this script.

### What you get
A script that runs a command via `docker exec` in an existing container that has it dependent containers running as well.
So you have to start your environment with `docker-compose up -d` or similar.

An integration guide how you configure your PHPStorm properly.

### What you don't get.
A perfectly written and generic bash script. It works for my purpose but it may not work for yours.

### Usage
1. [Configure PHPStorm](docs/phpstorm-configuration/README.md)
2. Learn [how to use it](docs/debug-tests-files/README.md)  in PHPStorm


3. _Use the plain shell script if you want. But I built this just as wrapper for the PHPStorm integration._
```
bash docker_xdebug --help
usage: bash docker_xdebug [options]
Options:
    --container=         The docker container that should be use for execution. [required when -p|--project-name is absent]
    --codeception        Run codeception tests.
    --debug              Enable debugging with xdebug.
    --file=              File to debug relative to project root.
    --idekey=            Your xdebug idekey. [default: xdebug]
    --method=            Method to debug. Works only in combination with -f|--file.
    --php                Debug php files. [default]
    --phpunit            Debug php unit tests.
    --project-name=      The name of the project directory. This is used to automatically determine the docker container. [required when -c|--container is absent]
    --server=            PHPStorm configuration (Languages & Framework -> PHP -> Servers) [default: local]

    --help               Print the this help page.
```