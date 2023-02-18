#!/bin/bash
set -eu -o pipefail
AUTH_HEADER=$(cat ./INSTANCES_SOCIAL_AUTH_HEADER.txt)
curl -H "Authorization: Bearer ${AUTH_HEADER}" \
 'https://instances.social/api/1.0/instances/list?count=0&include_closed=true&include_down=false&sort_by=users&sort_order=desc' \
 > all_instances.json

# top 100
jq '.instances[:100] | map({name})' all_instances.json |
    jq '.[].name' |
    tr '"' "'" |
    sed -E 's#$#,#g' > top_100_instance_names.txt

