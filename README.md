# ddev-boilerplate-eecms
DDEV with ExpressionEngine

## Initial Development (MAC OS)
Follow the following steps to setup the environment.  For reference, follow `https://ddev.readthedocs.io/en/latest/users/install/ddev-installation/`

1. Install Docker - Either use `brew install homebrew/cask/docker` or download Docker at `https://www.docker.com/`
1. Install DDEV using `brew install ddev/ddev/ddev`
1. Run `brew upgrade ddev`
1. Setup Self-SSL, `mkcert -install`
1. Clone this repository
1. Go to the directory and go to `development` branch
1. Run `ddev config --docroot=httpdocs --create-docroot`
1. Follow steps below:

## Local Environment
Once the `Initial Development` is setup above, follow the steps below:

1. Copy the database by running `ddev import-db --src=db/db.sql.gz` to sync local DB
1. Run `ddev start`

When the update is ready to be pushed to the repo:
1. Run `ddev stop`
1. Before pushing changes, export the database and commit using `ddev export-db --file=db/db.sql.gz`