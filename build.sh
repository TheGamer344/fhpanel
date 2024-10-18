#!/bin/bash

# Set NODE_OPTIONS environment variable
export NODE_OPTIONS=--openssl-legacy-provider

# Run yarn build:production
yarn build:production
