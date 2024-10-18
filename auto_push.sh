#!/usr/bin/env bash

# Navigate to the directory of the script
cd $(dirname "${BASH_SOURCE[0]}")

# Fetch updates from the remote repository
git fetch origin

# Check if there are updates available
LOCAL=$(git rev-parse @)
REMOTE=$(git rev-parse @{u})

if [ "$LOCAL" != "$REMOTE" ]; then
    echo "Updates found. Pulling the latest changes..."
    if ! git diff --name-only | grep -q "^auto_push\.sh$"; then
        git pull origin main
    else
        echo "Skipping pull due to pending commit for auto_push.sh."
    fi
else
    echo "Already up to date. No changes needed."
fi
