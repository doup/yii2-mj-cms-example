#!/bin/bash

SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
${SCRIPT_DIR}/exec.sh vendor/bin/php-cs-fixer fix ./ --rules=@PSR2
